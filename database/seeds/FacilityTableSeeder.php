<?php

use App\Facility;
use App\Location;
use App\GeoLocCode;

use Illuminate\Database\Seeder;

class FacilityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $keywords = [
            'Joint Base', 
            'Naval ', 
            'Marine Corps', 
            'Air Force', 
            ' Air ', 
            'Camp ', 
            'Point Loma Complex', 
            'Army Depot', 
            'Ordnance ', 
            'Ammunition Depot', 
            'Fort ', 
            ' Airfield', 
            'Arsenal', 
            'Training', 
            'Military Base', 
            'Amphibious Base', 
            'Missile Range', 
            'Facility', 
            'Washington Navy Yard', 
            'Submarine', 
            'Army', 
            'Proving Ground', 
            'ANG Base', 
            'Maritime', 
            'Warfare', 
            'Logistics'
        ];

        foreach ($keywords as $keyword)
        {
            $matches = GeoLocCode::enabled()->where('city', 'like', "%{$keyword}%")->where('city', 'not like', 'FAA %')->where('city', 'not like', 'Beaufort %')->get();
            foreach ($matches as $match)
            {
                $facility = Facility::createFacility($match->code, $match->city);
                if ($facility->wasRecentlyCreated)
                {
                    if ($match->country === 'US')
                    {
                        $country = Location::createLocation('country', $match->country, 'United States');
                        $state = Location::createLocation('state', $match->country_subdivision, getFullStateName($match->country_subdivision), $country->id);
                        $county = Location::createLocation('county', null, $match->us_county, $state->id);

                        $locations = [$country, $state, $county];

                        $facility->locations()->saveMany($locations);
                    }
                    else
                    {
                        $country = Location::createLocation('country', $match->country, getFullCountryName($match->country));
                        $facility->locations()->save($country);
                    }
                }
            }
        }
    }
}