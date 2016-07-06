<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filter extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'type', 'code', 'name', 
    ];

    // RELATIONS

    public function listings()
    {
        return $this->morphedByMany(Listing::class, 'filterable');
    }

    // SCOPES

    public function scopeWhoMayApply($query)
    {
        return $query->whereType('who_may_apply');
    }

    public function scopeJobCategory($query)
    {
        return $query->whereType('job_category');
    }

    public function scopeJobGrade($query)
    {
        return $query->whereType('job_grade');
    }

    public function scopePositionSchedule($query)
    {
        return $query->whereType('position_schedule');
    }

    public function scopePositionType($query)
    {
        return $query->whereType('position_type');
    }

    // FUNCTIONS

    /**
     * Create Filter Model
     */
    public static function createFilter($type, $code, $name=null)
    {
        $new_filter = compact('type', 'code', 'name');
        return static::firstOrCreate($new_filter);
    }
}
