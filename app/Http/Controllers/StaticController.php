<?php

namespace App\Http\Controllers;

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
     * Privacy
     */
    public function getPrivacy()
    {
        return view('static.privacy');
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