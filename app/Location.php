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

    public function facilities()
    {
        return $this->belongsToMany(Facility::class);
    }

    // SCOPES

    public function scopeCountry($query)
    {
        return $query->whereType('country')->where('parent_id', '=', null);
    }

    public function scopeState($query)
    {
        return $query->whereType('state')->where('parent_id', '!=', null);
    }

    public function scopeCounty($query)
    {
        return $query->whereType('county')->where('parent_id', '!=', null);
    }

    public function scopeCity($query)
    {
        return $query->whereType('city')->where('parent_id', '!=', null);
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
