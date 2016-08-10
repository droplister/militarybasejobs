<?php

namespace App\Http\Controllers;

use App\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Index
     */
    public function index()
    {
        $categories = Category::topLevel()->with('children')->orderBy('code', 'asc')->get();

        return view('categories.index', compact('categories'));
    }

    /**
     * Show
     */
    public function show($category, Request $request)
    {
        $category = Category::whereSlug($category)->first();

        if ($category->isParent() && $category->children()->exists())
        {
            $listings = $category->childrenListings();
        }
        else
        {
            $listings = $category->listings();
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

        return view('categories.show', compact('category', 'listings', 'request'));
    }
}