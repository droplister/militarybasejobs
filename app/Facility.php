<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'code', 'name', 
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

    // FUNCTIONS

    /**
     * Create Facility Model
     */
    public static function createFacility($code, $name)
    {
        $facility = static::firstOrNew(compact('name'));

        if (! $facility->exists)
        {
            $facility_data = compact('code', 'name');
            $facility->fill($facility_data)->save();
        }

        return $facility;
    }

    public function state()
    {
        return $this->locations()->states()->first();
    }
}
