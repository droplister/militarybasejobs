<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'code', 'name', 'slug', 'content', 
    ];

    // RELATIONS

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

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
    public static function createFacility($code, $name, $slug=null, $content=null)
    {
        $facility = static::firstOrNew(compact('name'));

        if (! $facility->exists)
        {
            $slug = ($slug ? $slug : str_slug($name));
            $facility_data = compact('code', 'name', 'slug', 'content');
            $facility->fill($facility_data)->save();
        }

        return $facility;
    }

    public function state()
    {
        return $this->locations()->states()->first();
    }

    public function title()
    {
        $title = str_replace('Marine Corps Air Station', 'MCAS', $this->name);
        $title = str_replace('Air Reserve Base', 'ARB', $title);
        $title = str_replace('Naval Air Station', 'NAS', $title);
        $title = str_replace('Naval Base ', 'NB ', $title);
        $title = str_replace('Naval Submarine Base ', 'NSB ', $title);
        $title = str_replace('Naval Air Warfare Center Training Systems Division', 'NAWCTSD', $title);
        $title = str_replace('Marine Corps Logistics Base', 'MCLB', $title);
        $title = str_replace('Naval Station ', 'NS ', $title); 
        $title = str_replace('Naval Surface Warfare Center ', 'NSWC ', $title);
        $title = str_replace(' Air National Guard Base', ' ANG Base', $title);
        $title = str_replace('Walter Reed National Military Medical Center', 'WRNMMC', $title);
        $title = str_replace('Naval Weapons Station ', 'NWS ', $title);
        $title = str_replace('Naval Support Activity ', 'NSA ', $title);
        $title = str_replace('Naval Medical Center ', 'NMC ', $title);
        $title = str_replace('National Maritime Intelligence-Integration Office', 'NMIO', $title);
        $title = str_replace('Joint Expeditionary Base ', '', $title);

        if(strlen($title) > 25)
        {
            $title = str_replace('Joint Base ', '', $title);
        }

        return $title;
    }
}
