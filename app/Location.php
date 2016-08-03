<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'parent_id', 'type', 'code', 'name',  'slug', 'content', 
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

    public function categories()
    {
        return $this->belongsToMany(Category::class);
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

    public function scopeTopLevel($query)
    {
        return $query->whereNull('parent_id');
    }

    public function scopeStates($query)
    {
        return $query->whereType('state')->where('parent_id', '=', null);
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
        $location = static::firstOrNew(compact('parent_id', 'type', 'code', 'name'));

        if (! $location->exists)
        {
            $slug = str_slug($name);

            if ($count = Location::where('slug', 'like', $slug . '%')->count())
            {
                if ($parent_id)
                {
                    $count = Location::find($parent_id)->slug;
                }

                $slug = "{$slug}-{$count}";
            }

            $location_data = compact('parent_id', 'type', 'code', 'name', 'slug');
            $location->fill($location_data)->save();
        }

        return $location;
    }

    public function isParent()
    {
        return ($this->parent_id === null ? true : false);
    }
}
