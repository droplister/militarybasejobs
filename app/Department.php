<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'parent_id', 'name', 
    ];

    // RELATIONS

    public function children()
    {
        return $this->hasMany(Department::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(Department::class, 'parent_id');
    }

    public function listings()
    {
        return $this->hasMany(Listing::class);
    }

    public function departmentListings()
    {
        return $this->hasManyThrough(Listing::class, Department::class, 'parent_id', 'organization_id');
    }

    // RELATIONS

    public function scopeDepartments($query)
    {
        return $query->whereNull('parent_id');
    }

    public function scopeOrganizations($query)
    {
        return $query->whereNotNull('parent_id');
    }

    // FUNCTIONS

    /**
     * Create Department Model
     */
    public static function createDepartment($name, $parent_id=null)
    {
        $new_department = compact('parent_id', 'name');
        return static::firstOrCreate($new_department);
    }
}
