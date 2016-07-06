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
        $listing = Listing::whereIdentifier($listing)->first();

        $facilities = $listing->facilities()->orderBy('name', 'asc')->get();
        $organization = $listing->organization;

        $states = $listing->states();

        $who_may_apply = $listing->whoMayApply();

        $job_categories = $listing->jobCategories();
        $job_grades = $listing->jobGrades();

        $position_schedules = $listing->positionSchedules();
        $position_types = $listing->positionTypes();

        return view('listings.show',
            compact(
                'listing',
                'facilities',
                'organization',
                'states',
                'who_may_apply',
                'job_categories',
                'job_grades',
                'position_schedules',
                'position_types'
            )
        );
    }
}