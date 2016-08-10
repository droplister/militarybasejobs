<?php

namespace App\Http\Controllers;

use App\Listing;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Search
     */
    public function search(Request $request)
    {
        $job_grades = Listing::select('job_grade')->groupBy('job_grade')->orderBy('job_grade', 'asc')->get();
        $low_grades = Listing::select('low_grade')->groupBy('low_grade')->orderBy('low_grade', 'asc')->get();
        $high_grades = Listing::select('high_grade')->groupBy('high_grade')->orderBy('high_grade', 'desc')->get();
        $schedules = Listing::select(['schedule', 'schedule_code'])->groupBy('schedule_code')->orderBy('schedule', 'asc')->get();

        return view('search.form', compact('request', 'job_grades', 'low_grades', 'high_grades', 'schedules'));
    }

    /**
     * Search
     */
    public function results(Request $request)
    {
        if(empty($request->all()))
        {
            return redirect()->route('job::search');
        }

        $listings = Listing::query();

        $job_grades = Listing::select('job_grade')->groupBy('job_grade')->orderBy('job_grade', 'asc')->get();
        $low_grades = Listing::select('low_grade')->groupBy('low_grade')->orderBy('low_grade', 'asc')->get();
        $high_grades = Listing::select('high_grade')->groupBy('high_grade')->orderBy('high_grade', 'desc')->get();
        $schedules = Listing::select(['schedule', 'schedule_code'])->groupBy('schedule_code')->orderBy('schedule', 'asc')->get();

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

        return view('search.results', compact('listings', 'request', 'job_grades', 'low_grades', 'high_grades', 'schedules'));
    }
}