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
        $facilities = Facility::get();

        return view('facilities.index', compact('facilities'));
    }

    /**
     * Show
     */
    public function show($facility)
    {
        $facility = Facility::find($facility);

        $listings = $facility->listings()->paginate(50);

        $state = $facility->state();

        $counties = $state->children;

        return view('facilities.show', compact('facility', 'listings', 'state', 'counties'));
    }
}