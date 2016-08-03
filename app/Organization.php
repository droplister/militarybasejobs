<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'parent_id', 'code', 'name', 'slug', 'content', 'has_children'
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

    public function facilities()
    {
        return $this->belongsToMany(Facility::class);
    }

    public function listings()
    {
        return $this->hasMany(Listing::class);
    }

    public function childrenListings()
    {
        return $this->hasManyThrough(Listing::class, Organization::class, 'parent_id', 'organization_id');
    }

    // SCOPES

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
        $code = $name;

        $organization = static::firstOrNew(compact('code'));

        $name = str_replace('U. S. ', 'U.S. ', $name);
        $name = str_replace(' The ', ' the ', $name);
        $name = str_replace(' And ', ' and ', $name);
        $name = str_replace(' Of ', ' of ', $name);
        $name = str_replace('/', ' / ', $name);

        if (! $organization->exists)
        {
            $slug = str_slug($name);
            $organization_data = compact('parent_id', 'code', 'name', 'slug');
            $organization->fill($organization_data)->save();
        }

        return $organization;
    }

    public function isParent()
    {
        return ($this->parent_id === null ? true : false);
    }
}
