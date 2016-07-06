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

        $listings = $state->listings()->orderBy('identifier', 'desc')->paginate(50);

        $counties = $state->children()->orderBy('name', 'asc')->get();

        $facilities = $state->facilities()->orderBy('name', 'asc')->get();

        return view('states.show', compact('state', 'listings', 'counties', 'facilities'));
    }
}