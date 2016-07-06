<?php

namespace App\Http\Controllers;

use App\Listing;

use Illuminate\Http\Request;

class ListingController extends Controller
{
    /**
     * Index
     */
    public function index()
    {
        $listings = Listing::get();

        return view('listings.index', compact('listings'));
    }

    /**
     * Show
     */
    public function show($listing)
    {
        $listing = Listing::whereIdentifier($listing)->first();

        return view('listings.show', compact('listing'));
    }
}