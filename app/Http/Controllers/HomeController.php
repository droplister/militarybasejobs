<?php

namespace App\Http\Controllers;

use App\Listing;
use App\Location;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Home
     */
    public function index(Request $request)
    {
        $job_grades = Listing::select('job_grade')->groupBy('job_grade')->orderBy('job_grade', 'asc')->get();
        $low_grades = Listing::select('low_grade')->groupBy('low_grade')->orderBy('low_grade', 'asc')->get();
        $high_grades = Listing::select('high_grade')->groupBy('high_grade')->orderBy('high_grade', 'desc')->get();
        $schedules = Listing::select(['schedule', 'schedule_code'])->groupBy('schedule_code')->orderBy('schedule', 'asc')->get();

        $latest = Listing::active()->orderBy('published_at', 'desc')->take(5)->get();
        $salary = Listing::active()->where('pay_type', 'Per Year')->orderBy('max_pay', 'desc')->take(5)->get();
        $hourly = Listing::active()->where('pay_type', 'Per Hour')->orderBy('max_pay', 'desc')->take(5)->get();

        $states = Location::states()->orderBy('name', 'asc')->get();

        return view('home', compact('request', 'job_grades', 'low_grades', 'high_grades', 'schedules', 'latest', 'hourly', 'salary', 'states'));
    }
}