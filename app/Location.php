<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'parent_id', 'type', 'code', 'name',  
    ];

    // RELATIONS

    public function children()
    {
        return $this->hasMany(Location::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(Location::class, 'parent_id');
    }

    public function listings()
    {
        return $this->belongsToMany(Listing::class);
    }

    public function facilities()
    {
        return $this->belongsToMany(Facility::class);
    }

    // SCOPES

    public function scopeCountries($query)
    {
        return $query->whereType('country')->where('parent_id', '=', null);
    }

    public function scopeStates($query)
    {
        return $query->whereType('state')->where('parent_id', '!=', null);
    }

    public function scopeCounties($query)
    {
        return $query->whereType('county')->where('parent_id', '!=', null);
    }

    // FUNCTIONS

    /**
     * Create Location Model
     */
    public static function createLocation($type, $code, $name, $parent_id=null)
    {
        $new_location = compact('parent_id', 'type', 'code', 'name');
        return static::firstOrCreate($new_location);
    }
}
