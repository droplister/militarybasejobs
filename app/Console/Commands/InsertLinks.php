<?php

namespace App\Console\Commands;

use App\Facility;
use App\Location;
use App\Organization;

use Illuminate\Console\Command;

class InsertLinks extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'insert:links';

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
        $facilities = Facility::get();

        $washington = Location::whereName('Washington')->first();

        $states = Location::states()->whereNotIn('id', [$washington->id])->get();
        $organizations = Organization::get();

        foreach($facilities as $facility)
        {
            $counties = Location::counties()->whereParentId($facility->state()->id)->get();
            $relations = Facility::whereNotIn('id', [$facility->id])->get();

            if ($facility->state()->id == $washington->id)
            {
                $url = url(route('location::show', ['location' => $washington->slug]));
                $facility->content = $this->searchReplace($facility->content, $washington->name, $url);
                $facility->save();
            }

            $army_guard = Organization::whereName('Army National Guard Units (Title 32)')->first();
            $url = url(route('organization::show', ['organization' => $army_guard->slug]));
            $facility->content = $this->searchReplace($facility->content, 'Army National Guard', $url);
            $facility->save();

            $air_force = Organization::whereName('Department of the Air Force')->first();
            $url = url(route('organization::show', ['organization' => $air_force->slug]));
            $facility->content = $this->searchReplace($facility->content, 'United States Air Force', $url);
            $facility->save();

            $army = Organization::whereName('Department of the Army')->first();
            $url = url(route('organization::show', ['organization' => $army->slug]));
            $facility->content = $this->searchReplace($facility->content, 'United States Army', $url);
            $facility->save();

            $navy = Organization::whereName('Department of the Navy')->first();
            $url = url(route('organization::show', ['organization' => $navy->slug]));
            $facility->content = $this->searchReplace($facility->content, 'United States Navy', $url);
            $facility->save();

            foreach($states as $state)
            {
                $url = url(route('location::show', ['location' => $state->slug]));
                $facility->content = $this->searchReplace($facility->content, $state->name, $url);
                $facility->save();
            }

            foreach($counties as $county)
            {
                $url = url(route('location::show', ['location' => $county->slug]));
                $facility->content = $this->searchReplace($facility->content, $county->name, $url);
                $facility->save();
            }

            foreach($relations as $relation)
            {
                $url = url(route('facility::show', ['facility' => $relation->slug]));
                $facility->content = $this->searchReplace($facility->content, $relation->name, $url);
                $facility->save();
            }

            foreach($organizations as $organization)
            {
                if ($facility->name == 'Camp Edwards' && $organization->name == 'Air National Guard') continue;

                $url = url(route('organization::show', ['organization' => $organization->slug]));
                $facility->content = $this->searchReplace($facility->content, $organization->name, $url);
                $facility->save();
            }
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