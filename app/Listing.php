<?php

namespace App;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'organization_id', 'identifier', 'announcement', 'name', 'url', 'summary', 'qualifications', 'low_grade', 'high_grade', 'min_pay', 'max_pay', 'pay_interval', 
    ];

    protected $dates = [
        'published_at', 'ends_at',
    ];

    // MUTATORS

    public function setMinPayAttribute($value)
    {
        $this->attributes['min_pay'] = $value * 100;
    }

    public function getMinPayAttribute($value)
    {
        $value = $value / 100;
        $value = number_format($value, 2);
        $value = str_replace('.00', '', $value);

        return $value;
    }

    public function setMaxPayAttribute($value)
    {
        $this->attributes['max_pay'] = $value * 100;
    }

    public function getMaxPayAttribute($value)
    {
        $value = $value / 100;
        $value = number_format($value, 2);
        $value = str_replace('.00', '', $value);

        return $value;
    }

    public function setPublishedAtAttribute($value)
    {
        $value = substr($value, 0, 10);
        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $value);
    }

    public function setEndsAtAttribute($value)
    {
        $value = substr($value, 0, 10);
        $this->attributes['ends_at'] = Carbon::createFromFormat('Y-m-d', $value);
    }

    // RELATIONS

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }

    public function facilities()
    {
        return $this->belongsToMany(Facility::class);
    }

    public function locations()
    {
        return $this->belongsToMany(Location::class);
    }

    public function filters()
    {
        return $this->morphToMany(Filter::class, 'filterable');
    }

    // FUNCTIONS

    /**
     * Create Listing Model
     */
    public static function createListing($organization_id, $identifier, $announcement, $name, $url, $summary, $qualifications, $low_grade, $high_grade, $min_pay, $max_pay, $pay_interval, $published_at, $ends_at)
    {
        $listing = static::firstOrNew(compact('identifier'));

        if (! $listing->exists)
        {
            $listing_data = compact('organization_id', 'identifier', 'announcement', 'name', 'url', 'summary', 'qualifications', 'low_grade', 'high_grade', 'min_pay', 'max_pay', 'pay_interval', 'published_at', 'ends_at');
            $listing->fill($listing_data)->save();
        }

        return $listing;
    }

    public function states()
    {
        return $this->locations()->states()->orderBy('name', 'asc')->get();
    }

    public function whoMayApply()
    {
        return $this->filters()->whoMayApply()->first();
    }

    public function jobCategories()
    {
        return $this->filters()->jobCategory()->get();
    }

    public function jobGrades()
    {
        return $this->filters()->jobGrade()->get();
    }

    public function positionSchedules()
    {
        return $this->filters()->positionSchedule()->get();
    }

    public function positionTypes()
    {
        return $this->filters()->positionType()->get();
    }
}
