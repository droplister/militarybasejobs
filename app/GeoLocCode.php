<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GeoLocCode extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'code', 'city', 'us_county', 'country_subdivision', 'country', 'disabled',
    ];

    // SCOPES

    public function scopeEnabled($query)
    {
        return $query->whereDisabled(0);
    }

    // FUNCTIONS

    /**
     * Create GeoLocCode Model
     */
    public static function createGeoLocCode($code, $city, $us_county, $country_subdivision, $country, $disabled)
    {
        $new_geo_loc_code = compact('code', 'city', 'us_county', 'country_subdivision', 'country', 'disabled');
        return static::create($new_geo_loc_code);
    }
}