<?php

namespace App\Http\Controllers\Location;

use App\Location;

use App\Http\Controllers\Controller;

class StateController extends Controller
{
    /**
     * Index
     */
    public function index()
    {
        $states = Location::states()->orderBy('name', 'asc')->get();

        return view('states.index', compact('states'));
    }

    /**
     * Show
     */
    public function show($state)
    {
        $state = Location::find($state);

        $listings = $state->listings()->paginate(50);

        $counties = $state->children;

        return view('states.show', compact('state', 'listings', 'counties'));
    }
}