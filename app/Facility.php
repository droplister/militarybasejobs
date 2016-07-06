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
        $new_facility = compact('code', 'name');
        return static::firstOrCreate($new_facility);
    }
}
