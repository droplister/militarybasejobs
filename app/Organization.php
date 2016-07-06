<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'parent_id', 'name', 
    ];

    // RELATIONS

    public function children()
    {
        return $this->hasMany(Organization::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(Organization::class, 'parent_id');
    }

    public function listings()
    {
        return $this->hasMany(Listing::class);
    }

    public function childrenListings()
    {
        return $this->hasManyThrough(Listing::class, Organization::class, 'parent_id', 'organization_id');
    }

    // RELATIONS

    public function scopeTopLevel($query)
    {
        return $query->whereNull('parent_id');
    }

    // FUNCTIONS

    /**
     * Create Organization Model
     */
    public static function createOrganization($name, $parent_id=null)
    {
        $new_organization = compact('parent_id', 'name');
        return static::firstOrCreate($new_organization);
    }

    public function isParent()
    {
        return ($this->parent_id === null ? true : false);
    }
}
