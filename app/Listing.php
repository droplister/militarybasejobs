<?php

namespace App;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'category_id', 'organization_id', 'a_number', 'c_number', 'name', 'url', 'summary', 'qualifications', 'open_to', 'open_to_code', 'schedule', 'schedule_code', 'position', 'position_code', 'job_grade', 'low_grade', 'high_grade', 'pay_type', 'min_pay', 'max_pay', 'published_at', 'ends_at', 'linked', 
    ];

    protected $dateFormat = 'Y-m-d';

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

    // RELATIONS

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

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

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    // SCOPES

    public function scopeActive($query)
    {
        return $query->where('ends_at', '>', Carbon::now()->toDateString());
    }

    public function scopeWithoutLinks($query)
    {
        return $query->where('linked', '0');
    }

    // FUNCTIONS

    /**
     * Create Listing Model
     */
    public static function createListing($category_id, $organization_id, $c_number, $a_number, $name, $url, $summary, $qualifications, $open_to, $open_to_code, $schedule, $schedule_code, $position, $position_code, $job_grade, $low_grade, $high_grade, $pay_type, $min_pay, $max_pay, $published_at, $ends_at)
    {
        $listing = static::firstOrNew(compact('c_number'));

        if (! $listing->exists)
        {
            $listing_data = compact('category_id', 'organization_id', 'c_number', 'a_number', 'name', 'url', 'summary', 'qualifications', 'open_to', 'open_to_code', 'schedule', 'schedule_code', 'position', 'position_code', 'job_grade', 'low_grade', 'high_grade', 'pay_type', 'min_pay', 'max_pay', 'published_at', 'ends_at');
            $listing->fill($listing_data)->save();
        }

        return $listing;
    }

    public function grade()
    {
        $grade = ($this->low_grade == $this->high_grade ? $this->low_grade : "{$this->low_grade}/{$this->high_grade}");
        return "{$this->job_grade}-{$this->category->code}-{$grade}";
    }

    public function states()
    {
        return $this->locations()->states()->orderBy('name', 'asc')->get();
    }

    public function isActive()
    {
        return ($this->ends_at > Carbon::now()->toDateString() ? 'true' : 'false');
    }
}
