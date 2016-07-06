<?php

namespace App\Console\Commands;

use Curl\Curl;
use App\Filter;
use App\Listing;
use App\Facility;
use App\Organization;

use Illuminate\Console\Command;

class UsajobsFetch extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'usajobs:fetch';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch USAJobs.gov API';

    /**
     * USAJobs.gov API
     *
     * @var Curl
     */
    protected $curl;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->curl = new Curl();
        $this->curl->setHeader('Host', getenv('USAJOBS_HOST'));
        $this->curl->setHeader('User-Agent', getenv('USAJOBS_EMAIL'));
        $this->curl->setHeader('Authorization-Key', getenv('USAJOBS_KEY'));
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $facilities = Facility::get();

        foreach ($facilities as $facility)
        {
            $page_count = $this->fetchApiPageCount($facility);

            for ($this_page = 1; $this_page <= $page_count; $this_page++)
            {
                $results = $this->fetchApiPageResults($facility, $this_page);

                foreach ($results->SearchResult->SearchResultItems as $result)
                {
                    $this->processResult($facility, $result);
                }
            }

            $this->comment("Processed {$page_count} page(s): {$facility->name}");
        }
    }

    /**
     * Determine # of Pages
     *
     * @return integer
     */
    private function fetchApiPageCount($facility)
    {
        $results = $this->fetchApiPageResults($facility);

        // Catch Failed Fetch
        if (! $results) return 0;

        return ceil($results->SearchResult->SearchResultCountAll / 500);
    }

    /**
     * Return API Results
     *
     * @return object
     */
    private function fetchApiPageResults($facility, $page=1)
    {
        $this->curl->get('https://data.usajobs.gov/api/Search?Page='. $page .'&ResultsPerPage=500&LocationName=' . $facility->code);

        return json_decode($this->curl->response);
    }

    /**
     * Process Single Result
     *
     * @return void
     */
    private function processResult($facility, $result)
    {
        // Get Organization
        $organization = $this->fetchOrganization($result);

        // API Result Data
        $data = $this->fetchDataArray($result);

        // Create Listing
        $listing = Listing::createListing(
            $organization->id,
            $data['identifier'],
            $data['announcement'],
            $data['name'],
            $data['url'],
            $data['summary'],
            $data['qualifications'],
            $data['low_grade'],
            $data['high_grade'],
            $data['min_pay'],
            $data['max_pay'],
            $data['pay_interval'],
            $data['published_at'],
            $data['ends_at']
        );

        // Save Listing to Facility
        $listing->facilities()->sync([$facility->id], false);

        // Relate Facility Locations
        $listing->locations()->sync($facility->locations()->pluck('id')->toArray(), false);

        // Relate Facility to Organization
        $facility->organizations()->sync([$organization->id], false);

        // Tag Listing with Filters
        $this->tagListingWithFilters($listing, $result);
    }

    /**
     * Get Related Departments
     *
     * @return \App\Department
     */
    private function fetchOrganization($result)
    {
        if (! empty($result->MatchedObjectDescriptor->DepartmentName))
        {
            // Part of Department
            if (strpos($result->MatchedObjectDescriptor->OrganizationName, ' Agency Wide'))
            {
                // Agency Wide
                $organization = Organization::createOrganization(trim($result->MatchedObjectDescriptor->DepartmentName));
            }
            else
            {
                // Regular Nesting
                $parent = Organization::createOrganization(trim($result->MatchedObjectDescriptor->DepartmentName));
                $organization = Organization::createOrganization(trim($result->MatchedObjectDescriptor->OrganizationName), $parent->id);
            }
        }
        else
        {
            // Single Organization
            $organization = Organization::createOrganization(trim($result->MatchedObjectDescriptor->OrganizationName));
        }

        return $organization;
    }

    /**
     * Create In-Memory Data Blob
     *
     * @return array
     */
    private function fetchDataArray($result)
    {
        // Target Data (Trimmed)
        return [
            'identifier'     => trim($result->MatchedObjectId),
            'announcement'   => trim($result->MatchedObjectDescriptor->PositionID),
            'name'           => trim($result->MatchedObjectDescriptor->PositionTitle),
            'url'            => trim($result->MatchedObjectDescriptor->ApplyURI[0]),
            'summary'        => trim($result->MatchedObjectDescriptor->UserArea->Details->JobSummary),
            'qualifications' => trim($result->MatchedObjectDescriptor->QualificationSummary),
            'low_grade'      => trim($result->MatchedObjectDescriptor->UserArea->Details->LowGrade),
            'high_grade'     => trim($result->MatchedObjectDescriptor->UserArea->Details->HighGrade),
            'min_pay'        => trim($result->MatchedObjectDescriptor->PositionRemuneration[0]->MinimumRange),
            'max_pay'        => trim($result->MatchedObjectDescriptor->PositionRemuneration[0]->MaximumRange),
            'pay_interval'   => trim($result->MatchedObjectDescriptor->PositionRemuneration[0]->RateIntervalCode),
            'published_at'   => trim($result->MatchedObjectDescriptor->PublicationStartDate),
            'ends_at'        => trim($result->MatchedObjectDescriptor->ApplicationCloseDate),
        ];
    }

    /**
     * Relate Filters to Listing
     *
     * @return void
     */
    private function tagListingWithFilters($listing, $result)
    {
        // New Listings Only
        if ($listing->wasRecentlyCreated)
        {
            $filters = array();

            // Who May Apply
            $filters[] = Filter::createFilter('who_may_apply', trim($result->MatchedObjectDescriptor->UserArea->Details->WhoMayApply->Code), trim($result->MatchedObjectDescriptor->UserArea->Details->WhoMayApply->Name));

            // Job Category
            foreach ($result->MatchedObjectDescriptor->JobCategory as $job_category)
            {
                $filters[] = Filter::createFilter('job_category', trim($job_category->Code), trim($job_category->Name));
            }

            // Job Grade
            foreach ($result->MatchedObjectDescriptor->JobGrade as $job_grade)
            {
                $filters[] = Filter::createFilter('job_grade', trim($job_grade->Code));
            }

            // Position Schedule
            foreach ($result->MatchedObjectDescriptor->PositionSchedule as $position_schedule)
            {
                $filters[] = Filter::createFilter('position_schedule', trim($position_schedule->Code), trim($position_schedule->Name));
            }

            // Position Type
            foreach ($result->MatchedObjectDescriptor->PositionOfferingType as $position_type)
            {
                $filters[] = Filter::createFilter('position_type', trim($position_type->Code), trim($position_type->Name));
            }

            // Save Relation
            $listing->filters()->saveMany($filters);
        }
    }
}
