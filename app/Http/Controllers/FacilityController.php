<?php

namespace App\Http\Controllers;

use App\Facility;
use App\Location; 

use Illuminate\Http\Request;

class FacilityController extends Controller
{
    /**
     * Index
     */
    public function index()
    {
        $states = Location::states()->orderBy('name', 'asc')->with('facilities')->get();

        return view('facilities.index', compact('states'));
    }

    /**
     * Show
     */
    public function show($facility, Request $request)
    {
        $facility = Facility::whereSlug($facility)->first();

        $listings = $facility->listings();

        if ($request->has('job_grade'))
        {
            $listings->whereJobGrade($request->job_grade);
        }

        if ($request->has('low_grade'))
        {
            $listings->where('low_grade', '>=', $request->low_grade);
        }

        if ($request->has('high_grade'))
        {
            $listings->where('high_grade', '<=', $request->high_grade);
        }

        if ($request->has('schedule'))
        {
            $listings->whereScheduleCode($request->schedule);
        }

        if ($request->has('q'))
        {
            foreach(explode(' ', $request->q) as $search)
            {
                $listings->where('summary', 'like', '%' . $search . '%');
            }
        }

        $listings = $listings->active()->orderBy('published_at', 'desc')->paginate(10);

        return view('facilities.show', compact('facility', 'listings', 'request'));
    }

    /**
     * Delete
     */
    public function delete($facility)
    {
        $facility = Facility::whereSlug($facility)->first();

        $facility->delete();

        return redirect()->route('facility::index');
    }
}