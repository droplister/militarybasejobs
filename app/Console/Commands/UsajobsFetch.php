<?php

namespace App\Console\Commands;

use Curl\Curl;
use App\Listing;
use App\Category;
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
            $total_pages = $this->fetchApiPageCount($facility);

            for ($current_page = 1; $current_page <= $total_pages; $current_page++)
            {
                $results = $this->fetchApiPageResults($facility, $current_page);

                foreach ($results->SearchResult->SearchResultItems as $result)
                {
                    $this->processResult($facility, $result);
                }
            }

            $this->comment("Processed {$total_pages} page(s): {$facility->name}");
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
        // Get Category
        $category = $this->fetchCategory($result);

        // Get Organization
        $organization = $this->fetchOrganization($result);

        // API Result Data
        $data = $this->fetchDataArray($result);

        // Create Listing
        $listing = Listing::createListing(
            $category->id,
            $organization->id,
            $data['c_number'],
            $data['a_number'],
            $data['name'],
            $data['url'],
            $data['summary'],
            $data['qualifications'],
            $data['open_to'],
            $data['open_to_code'],
            $data['schedule'],
            $data['schedule_code'],
            $data['position'],
            $data['position_code'],
            $data['job_grade'],
            $data['low_grade'],
            $data['high_grade'],
            $data['pay_type'],
            $data['min_pay'],
            $data['max_pay'],
            $data['published_at'],
            $data['ends_at']
        );

        // Save Listing to Facility
        $listing->facilities()->sync([$facility->id], false);

        // Relate Facility Locations
        $listing->locations()->sync($facility->locations()->pluck('id')->toArray(), false);

        // Relate Category Locations
        $category->locations()->sync($facility->locations()->pluck('id')->toArray(), false);

        // Relate Facility to Organization
        $facility->organizations()->sync([$organization->id], false);

        // Relate Facility to Category
        $facility->categories()->sync([$category->id], false);
    }

    /**
     * Get Job Categories
     *
     * @return \App\Category
     */
    private function fetchCategory($result)
    {
        $parent = Category::createCategory(trim($result->MatchedObjectDescriptor->JobCategory[0]->Code), trim($result->MatchedObjectDescriptor->JobCategory[0]->Name));
        $category = Category::createCategory(trim($result->MatchedObjectDescriptor->JobCategory[1]->Code), trim($result->MatchedObjectDescriptor->JobCategory[1]->Name), $parent->id);

        return $category;
    }

    /**
     * Get Related Organizations
     *
     * @return \App\Organization
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

                $parent->update(['has_children' => 1]);
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
        $published_at = trim($result->MatchedObjectDescriptor->PublicationStartDate);
        $published_at = substr($published_at, 0, 10);

        $ends_at = trim($result->MatchedObjectDescriptor->ApplicationCloseDate);
        $ends_at = substr($ends_at, 0, 10);

        // Target Data (Trimmed)
        return [
            'c_number'       => trim($result->MatchedObjectId),
            'a_number'       => trim($result->MatchedObjectDescriptor->PositionID),
            'name'           => trim($result->MatchedObjectDescriptor->PositionTitle),
            'url'            => trim($result->MatchedObjectDescriptor->ApplyURI[0]),
            'summary'        => trim($result->MatchedObjectDescriptor->UserArea->Details->JobSummary),
            'qualifications' => trim($result->MatchedObjectDescriptor->QualificationSummary),
            'open_to'        => trim($result->MatchedObjectDescriptor->UserArea->Details->WhoMayApply->Name),
            'open_to_code'   => trim($result->MatchedObjectDescriptor->UserArea->Details->WhoMayApply->Code),
            'schedule'       => trim($result->MatchedObjectDescriptor->PositionSchedule[0]->Name),
            'schedule_code'  => trim($result->MatchedObjectDescriptor->PositionSchedule[0]->Code),
            'position'       => trim($result->MatchedObjectDescriptor->PositionOfferingType[0]->Name),
            'position_code'  => trim($result->MatchedObjectDescriptor->PositionOfferingType[0]->Code),
            'job_grade'      => trim($result->MatchedObjectDescriptor->JobGrade[0]->Code),
            'low_grade'      => trim($result->MatchedObjectDescriptor->UserArea->Details->LowGrade),
            'high_grade'     => trim($result->MatchedObjectDescriptor->UserArea->Details->HighGrade),
            'pay_type'       => trim($result->MatchedObjectDescriptor->PositionRemuneration[0]->RateIntervalCode),
            'min_pay'        => trim($result->MatchedObjectDescriptor->PositionRemuneration[0]->MinimumRange),
            'max_pay'        => trim($result->MatchedObjectDescriptor->PositionRemuneration[0]->MaximumRange),
            'published_at'   => $published_at,
            'ends_at'        => $ends_at,
        ];
    }
}
