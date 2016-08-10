<?php

namespace App\Http\Controllers;
  
use App\Listing;  
use App\Category;
use App\Facility;
use App\Location;
use App\Organization;

class StaticController extends Controller
{
    /**
     * About
     */
    public function getAbout()
    {
        return view('static.about');
    }

    /**
     * Data
     */
    public function getData()
    {
        return view('static.data');
    }

    /**
     * Disclaimer
     */
    public function getDisclaimer()
    {
        return view('static.disclaimer');
    }

    /**
     * Listings
     */
    public function getListings()
    {
        $listings = Listing::active()->get();

        return view('static.listings', compact('listings'));
    }

    /**
     * Privacy
     */
    public function getPrivacy()
    {
        return view('static.privacy');
    }

    /**
     * Sitemap
     */
    public function getSitemap()
    {
        $categories = Category::get();
        $facilities = Facility::get();
        $locations = Location::get();
        $organizations = Organization::get();

        return view('static.sitemap', compact('categories', 'facilities', 'locations', 'organizations'));
    }

    /**
     * Support
     */
    public function getSupport()
    {
        return view('static.support');
    }

    /**
     * Terms
     */
    public function getTerms()
    {
        return view('static.terms');
    }
}