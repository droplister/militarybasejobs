<?php

namespace App\Http\Controllers;

use App\Facility;

use Illuminate\Http\Request;

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

        $listings = $facility->listings;

        return view('facilities.show', compact('facility', 'listings'));
    }
}