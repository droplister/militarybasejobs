<?php

namespace App\Http\Controllers;

use App\Facility;
use App\Location; 

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
    public function show($facility)
    {
        $facility = Facility::whereSlug($facility)->first();

        $listings = $facility->listings()->orderBy('identifier', 'desc')->paginate(10);

        $organizations = $facility->organizations()->orderBy('name', 'asc')->get();

        $state = $facility->state();

        $counties = $state->children()->orderBy('name', 'asc')->get();

        return view('facilities.show', compact('facility', 'listings', 'organizations', 'state', 'counties'));
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