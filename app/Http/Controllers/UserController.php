<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Saved Jobs
     */
    public function listings(Request $request)
    {
        $listings = $request->user()->listings()->active()->get();

        return view('users.listings', compact('listings'));
    }
}