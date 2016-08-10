<?php

namespace App\Http\Controllers;

use App\Organization;

use Illuminate\Http\Request;

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
    public function show($organization, Request $request)
    {
        $organization = Organization::whereSlug($organization)->first();

        if ($organization->isParent() && $organization->children()->exists())
        {
            $listings = $organization->childrenListings();
        }
        else
        {
            $listings = $organization->listings();
        }

        if ($request->has('job_grade'))
        {
            $listings->whereJobGrade($request->job_grade);
        }

        if ($request->has('low_grade'))
        {
            $listings->where('low_grade', '>=', $request->low_grade);
        }

        if ($request->has('high_grade'))
        {
            $listings->where('high_grade', '<=', $request->high_grade);
        }

        if ($request->has('schedule'))
        {
            $listings->whereScheduleCode($request->schedule);
        }

        if ($request->has('q'))
        {
            foreach(explode(' ', $request->q) as $search)
            {
                $listings->where('summary', 'like', '%' . $search . '%');
            }
        }

        $listings = $listings->active()->orderBy('published_at', 'desc')->paginate(10);

        return view('organizations.show', compact('organization', 'listings', 'request'));
    }
}