<?php

namespace App\Http\Controllers;

use App\Facility;

class FacilityController extends Controller
{
    /**
     * Index
     */
    public function index()
    {
        $facilities = Facility::orderBy('name', 'asc')->paginate(30);

        return view('facilities.index', compact('facilities'));
    }

    /**
     * Show
     */
    public function show($facility)
    {
        $facility = Facility::find($facility);

        $listings = $facility->listings()->orderBy('identifier', 'desc')->paginate(15);

        $organizations = $facility->organizations()->orderBy('name', 'asc')->get();

        $state = $facility->state();

        $counties = $state->children()->orderBy('name', 'asc')->get();

        return view('facilities.show', compact('facility', 'listings', 'organizations', 'state', 'counties'));
    }
}