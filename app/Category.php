<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'parent_id', 'code', 'name', 'slug', 'content', 
    ];

    // RELATIONS

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
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
        return $this->hasManyThrough(Listing::class, Category::class, 'parent_id', 'category_id');
    }

    public function locations()
    {
        return $this->belongsToMany(Location::class);
    }

    // SCOPES

    public function scopeTopLevel($query)
    {
        return $query->whereNull('parent_id');
    }

    // FUNCTIONS

    /**
     * Create Category Model
     */
    public static function createCategory($code, $name, $parent_id=null)
    {
        $category = static::firstOrNew(compact('code'));

        if (! $category->exists)
        {
            $slug = str_slug($name);
            $slug = "{$code}-{$slug}";
            $category_data = compact('parent_id', 'code', 'name', 'slug');
            $category->fill($category_data)->save();
        }

        return $category;
    }

    public function isParent()
    {
        return ($this->parent_id === null ? true : false);
    }

}