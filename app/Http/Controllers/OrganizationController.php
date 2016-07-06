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
            $listings = $organization->childrenListings()->orderBy('identifier', 'desc')->paginate(50);
        }
        else
        {
            $listings = $organization->listings()->orderBy('identifier', 'desc')->paginate(50);
        }

        $parent = $organization->parent;

        $children = $organization->children()->orderBy('name', 'asc')->get();

        $facilities = $organization->facilities()->orderBy('name', 'asc')->get();

        return view('organizations.show', compact('organization', 'parent', 'children', 'listings', 'facilities'));
    }
}