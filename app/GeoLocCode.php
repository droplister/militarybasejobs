<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GeoLocCode extends Model
{
    protected $fillable = [
        'code', 'city', 'us_county', 'country_subdivision', 'country', 'disabled',
    ];
}