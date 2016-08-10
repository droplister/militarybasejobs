<?php

namespace App\Http\Controllers;

use App\Location;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Index
     */
    public function index()
    {
        $states = Location::states()->with('children')->orderBy('name', 'asc')->get();

        return view('locations.index', compact('states'));
    }

    /**
     * Show
     */
    public function show($location,  Request $request)
    {
        $location = Location::whereSlug($location)->first();

        $listings = $location->listings();

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

        return view('locations.show', compact('location', 'listings', 'request'));
    }
}