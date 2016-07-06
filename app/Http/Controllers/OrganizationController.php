<?php

namespace App\Http\Controllers;

use App\Organization;

class OrganizationController extends Controller
{
    /**
     * Index
     */
    public function index()
    {
        $organizations = Organization::topLevel()->with('children')->orderBy('name', 'asc')->get();

        return view('organizations.index', compact('organizations'));
    }

    /**
     * Show
     */
    public function show($organization)
    {
        $organization = Organization::find($organization);

        if ($organization->isParent() && $organization->children()->exists())
        {
            $listings = $organization->childrenListings()->paginate(50);
        }
        else
        {
            $listings = $organization->listings()->paginate(50);
        }

        $children = $organization->children;

        return view('organizations.show', compact('organization', 'children', 'listings'));
    }
}