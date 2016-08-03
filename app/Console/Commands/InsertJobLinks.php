<?php

namespace App\Console\Commands;

use App\Listing;
use App\Category;
use App\Facility;
use App\Location;
use App\Organization;

use Illuminate\Console\Command;

class InsertJobLinks extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'insert:job:links';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Replace Text w/ Links';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $categories = Category::get();
        $facilities = Facility::get();
        $washington = Location::whereName('Washington')->first();
        $states = Location::states()->whereNotIn('id', [$washington->id])->get();
        $organizations = Organization::get();

        Listing::chunk(50, function($listings) use ($categories, $facilities, $states, $organizations)
        {
            foreach($listings as $listing)
            {
                $listing->qualifications = urlsToLinks($listing->qualifications);
                $listing->summary = urlsToLinks($listing->summary);
                $listing->open_to = urlsToLinks($listing->open_to);
                $listing->save();

                foreach($categories as $category)
                {
                    $url = url(route('category::show', ['category' => $category->slug]));
                    $listing->qualifications = $this->searchReplace($listing->qualifications, strtolower($category->name), $url);
                    $listing->summary = $this->searchReplace($listing->summary, strtolower($category->name), $url);
                    $listing->open_to = $this->searchReplace($listing->open_to, strtolower($category->name), $url);
                    $listing->save();
                }

                foreach($states as $state)
                {
                    $url = url(route('location::show', ['location' => $state->slug]));
                    $listing->qualifications = $this->searchReplace($listing->qualifications, $state->name, $url);
                    $listing->summary = $this->searchReplace($listing->summary, $state->name, $url);
                    $listing->open_to = $this->searchReplace($listing->open_to, $state->name, $url);
                    $listing->save();
                }

                foreach($facilities as $facility)
                {
                    $url = url(route('facility::show', ['facility' => $facility->slug]));
                    $listing->qualifications = $this->searchReplace($listing->qualifications, $facility->name, $url);
                    $listing->summary = $this->searchReplace($listing->summary, $facility->name, $url);
                    $listing->open_to = $this->searchReplace($listing->open_to, $facility->name, $url);
                    $listing->save();
                }

                foreach($organizations as $organization)
                {
                    $url = url(route('organization::show', ['organization' => $organization->slug]));
                    $listing->qualifications = $this->searchReplace($listing->qualifications, $organization->name, $url);
                    $listing->summary = $this->searchReplace($listing->summary, $organization->name, $url);
                    $listing->open_to = $this->searchReplace($listing->open_to, $organization->name, $url);
                    $listing->save();
                }
            }
        });
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