<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'code', 'name', 'slug', 
    ];

    // RELATIONS

    public function listings()
    {
        return $this->belongsToMany(Listing::class);
    }

    public function locations()
    {
        return $this->belongsToMany(Location::class);
    }

    public function organizations()
    {
        return $this->belongsToMany(Organization::class);
    }

    // FUNCTIONS

    /**
     * Create Facility Model
     */
    public static function createFacility($code, $name)
    {
        $facility = static::firstOrNew(compact('name'));

        if (! $facility->exists)
        {
            $slug = str_slug($name);
            $facility_data = compact('code', 'name', 'slug');
            $facility->fill($facility_data)->save();
        }

        return $facility;
    }

    public function state()
    {
        return $this->locations()->states()->first();
    }

    public function h1()
    {
        $h1 = str_replace('AFB', 'Air Force Base', $this->name);

        return $h1;
    }

    public function title()
    {
        $title = str_replace('Joint Base ', '', $this->name);
        $title = str_replace('Marine Corps Air Station', 'MCAS', $title);
        $title = str_replace('Air Reserve Base', 'ARB', $title);
        $title = str_replace('Naval Air Station', 'NAS', $title);
        $title = str_replace('Naval Base ', 'NB ', $title);
        $title = str_replace('Naval Submarine Base ', 'NSB ', $title);
        $title = str_replace('Naval Air Technical Training Center', 'NATTC', $title);
        $title = str_replace('Naval Air Warfare Center Training Systems Division', 'NAWCTSD', $title);
        $title = str_replace('Marine Corps Logistics Base', 'MCLB', $title);
        $title = str_replace('Naval Station ', 'NS ', $title);
        $title = str_replace('Naval Surface Warfare Center ', 'NSWC ', $title);
        $title = str_replace(' Air National Guard Base', ' ANG Base', $title);
        $title = str_replace('Walter Reed National Military Medical Center', 'WRNMMC', $title);
        $title = str_replace('Naval Weapons Station ', 'NWS ', $title);
        $title = str_replace('Naval Support Activity ', 'NSA ', $title);
        $title = str_replace('Naval Medical Center San Diego', 'NMCSD', $title);
        $title = str_replace('National Maritime Intelligence-Integration Office', 'NMIO', $title);
        $title = str_replace('Joint Expeditionary Base', '', $title);

        return $title;
    }
}
