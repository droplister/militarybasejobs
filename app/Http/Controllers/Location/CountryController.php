<?php

namespace App\Http\Controllers\Location;

use App\Location;

use App\Http\Controllers\Controller;

class CountryController extends Controller
{
    /**
     * Index
     */
    public function index()
    {
        $countries = Location::countries()->get();

        return view('countries.index', compact('countries'));
    }

    /**
     * Show
     */
    public function show($country)
    {
        $country = Location::find($country);

        $listings = $country->listings;

        $states = $country->children;

        return view('countries.show', compact('country', 'listings', 'states'));
    }
}