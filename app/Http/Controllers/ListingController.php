<?php

namespace App\Http\Controllers;

use App\Listing;

class ListingController extends Controller
{
    /**
     * Index
     */
    public function index()
    {
        $listings = Listing::orderBy('identifier', 'desc')->paginate(50);

        return view('listings.index', compact('listings'));
    }

    /**
     * Show
     */
    public function show($listing)
    {
        $listing = Listing::whereCNumber($listing)->first();

        $related = '';

        if ($listing->facilities->count() == 1)
        {
            $facility = $listing->facilities()->first();

            $related = $facility->listings()->active()->whereOrganizationId($listing->organization_id)->whereCategoryId($listing->category_id)->orderByRaw("RAND()")->take(3)->get();

            if (count($related) < 3)
            {
                $related = $facility->listings()->active()->whereCategoryId($listing->category_id)->orderByRaw("RAND()")->take(3)->get();
            }

            if (count($related) < 3)
            {
                $related = $facility->listings()->active()->whereOrganizationId($listing->organization_id)->orderByRaw("RAND()")->take(3)->get();
            }
        }

        if (count($related) < 3)
        {
           $related = Listing::active()->whereOrganizationId($listing->organization_id)->whereCategoryId($listing->category_id)->orderByRaw("RAND()")->take(3)->get();
        }

        if (count($related) < 3)
        {
            $related = Listing::active()->whereCategoryId($listing->category_id)->orderByRaw("RAND()")->take(3)->get();
        }

        if (count($related) < 3)
        {
            $related = Listing::active()->whereOrganizationId($listing->organization_id)->orderByRaw("RAND()")->take(3)->get();
        }

        return view('listings.show', compact('listing', 'related'));
    }
}