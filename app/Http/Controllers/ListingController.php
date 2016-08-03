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

            $related = $facility->listings()->active()->whereNotIn('id', [$listing->id])->whereOrganizationId($listing->organization_id)->whereCategoryId($listing->category_id)->orderByRaw("RAND()")->take(3)->get();

            if (count($related) < 3)
            {
                $related = $facility->listings()->active()->whereNotIn('id', [$listing->id])->whereCategoryId($listing->category_id)->orderByRaw("RAND()")->take(3)->get();
            }

            if (count($related) < 3)
            {
                $related = $facility->listings()->active()->whereNotIn('id', [$listing->id])->whereCategoryId($listing->category->parent->id)->orderByRaw("RAND()")->take(3)->get();
            }

            if (count($related) < 3)
            {
                $related = $facility->listings()->active()->whereNotIn('id', [$listing->id])->whereOrganizationId($listing->organization_id)->orderByRaw("RAND()")->take(3)->get();
            }
        }

        if (count($related) < 3)
        {
           $related = Listing::active()->whereNotIn('id', [$listing->id])->whereOrganizationId($listing->organization_id)->whereCategoryId($listing->category_id)->orderByRaw("RAND()")->take(3)->get();
        }

        if (count($related) < 3)
        {
            $related = Listing::active()->whereNotIn('id', [$listing->id])->whereCategoryId($listing->category_id)->orderByRaw("RAND()")->take(3)->get();
        }

        if (count($related) < 3)
        {
            $related = Listing::active()->whereNotIn('id', [$listing->id])->whereCategoryId($listing->category->parent->id)->orderByRaw("RAND()")->take(3)->get();
        }

        if (count($related) < 3)
        {
            $related = Listing::active()->whereNotIn('id', [$listing->id])->whereOrganizationId($listing->organization_id)->orderByRaw("RAND()")->take(3)->get();
        }

        return view('listings.show', compact('listing', 'related'));
    }

    /**
     * Save
     */
    public function save($listing, Request $request)
    {
        $listing = Listing::whereCNumber($listing)->first();

        $request->user()->listings()->sync([$listing->id], false);

        return redirect($request->server('HTTP_REFERER'))->with('success', $listing->c_number);
    }

    /**
     * Remove
     */
    public function remove($listing, Request $request)
    {
        $listing = Listing::whereCNumber($listing)->first();

        $listings = $request->user()->listings()->detach([$listing->id]);

        return redirect()->route('user::listings');
    }
}