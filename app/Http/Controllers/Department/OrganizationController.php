<?php

namespace App\Http\Controllers\Department;

use App\Department;

use App\Http\Controllers\Controller;

class OrganizationController extends Controller
{
    /**
     * Index
     */
    public function index()
    {
        $organizations = Department::organizations()->get();

        return view('organizations.index', compact('organizations'));
    }

    /**
     * Show
     */
    public function show($organization)
    {
        $organization= Department::find($organization);

        $listings = $organization->listings;

        return view('organizations.show', compact('organization', 'listings'));
    }
}