<?php

namespace App\Http\Controllers\Location;

use App\Location;

use App\Http\Controllers\Controller;

class CountyController extends Controller
{
    /**
     * Index
     */
    public function index()
    {
        $counties = Location::counties()->orderBy('name', 'asc')->get();

        return view('counties.index', compact('counties'));
    }

    /**
     * Show
     */
    public function show($county)
    {
        $county = Location::find($county);

        $state = $county->parent;

        $listings = $county->listings()->orderBy('identifier', 'desc')->paginate(50);

        $facilities = $county->facilities()->orderBy('name', 'asc')->get();

        return view('counties.show', compact('county', 'state', 'listings', 'facilities'));
    }
}