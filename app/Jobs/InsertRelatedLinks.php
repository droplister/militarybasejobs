<?php

namespace App\Jobs;

use App\Listing;
use App\Category;
use App\Facility;
use App\Location;
use App\Organization;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class InsertRelatedLinks extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    protected $listing;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Listing $listing)
    {
        $this->listing = $listing;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $categories = Category::get();
        $facilities = Facility::get();
        $washington = Location::whereName('Washington')->first();
        $states = Location::states()->whereNotIn('id', [$washington->id])->get();
        $organizations = Organization::get();

        $this->listing->linked = 1;

        $this->listing->qualifications = urlsToLinks($this->listing->qualifications);
        $this->listing->summary = urlsToLinks($this->listing->summary);
        $this->listing->open_to = urlsToLinks($this->listing->open_to);
        $this->listing->save();

        foreach($categories as $category)
        {
            $url = url(route('category::show', ['category' => $category->slug]));
            $this->listing->qualifications = $this->searchReplace($this->listing->qualifications, strtolower($category->name), $url);
            $this->listing->summary = $this->searchReplace($this->listing->summary, strtolower($category->name), $url);
            $this->listing->open_to = $this->searchReplace($this->listing->open_to, strtolower($category->name), $url);
            $this->listing->save();
        }

        foreach($states as $state)
        {
            $url = url(route('location::show', ['location' => $state->slug]));
            $this->listing->qualifications = $this->searchReplace($this->listing->qualifications, $state->name, $url);
            $this->listing->summary = $this->searchReplace($this->listing->summary, $state->name, $url);
            $this->listing->open_to = $this->searchReplace($this->listing->open_to, $state->name, $url);
            $this->listing->save();
        }

        foreach($facilities as $facility)
        {
            $url = url(route('facility::show', ['facility' => $facility->slug]));
            $this->listing->qualifications = $this->searchReplace($this->listing->qualifications, $facility->name, $url);
            $this->listing->summary = $this->searchReplace($this->listing->summary, $facility->name, $url);
            $this->listing->open_to = $this->searchReplace($this->listing->open_to, $facility->name, $url);
            $this->listing->save();
        }

        foreach($organizations as $organization)
        {
            $url = url(route('organization::show', ['organization' => $organization->slug]));
            $this->listing->qualifications = $this->searchReplace($this->listing->qualifications, $organization->name, $url);
            $this->listing->summary = $this->searchReplace($this->listing->summary, $organization->name, $url);
            $this->listing->open_to = $this->searchReplace($this->listing->open_to, $organization->name, $url);
            $this->listing->save();

        }
    }

    /**
     * Search and Replace
     *
     * @return string
     */
    private function searchReplace($haystack, $needle, $url)
    {
        $pos = strpos($haystack, $needle);

        if ($pos !== false) {
            $replace = '<a href="' . $url . '">' . $needle . '</a>';
            $haystack = substr_replace($haystack, $replace, $pos, strlen($needle));
        }

        return $haystack;
    }
}
