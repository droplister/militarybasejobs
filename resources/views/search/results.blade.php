@extends('layouts.default')

@section('title', "Search Results - MilitaryBaseJobs.com")

@section('javascript')
    <script>
        $(function() {
           $("form").submit(function() {
              $(this).find(":input").filter(function(){ return !this.value; }).attr("disabled", "disabled");
                  return true; // ensure form still submits
            });
        });
    </script>
@endsection

@section('content')

    <div class="row">

        <div class="col-md-3 col-sm-4 sidebar">
            @include('partials.search', compact('request', 'job_grades', 'low_grades', 'high_grades', 'schedules'))
        </div>

        <div class="col-md-6 col-sm-8">

            <div class="page-header">
                <h1>Search Results</h1>
                <p class="hidden-xs">{{ $listings->total() }} military base {{ $listings->total() == 1 ? 'job' : 'jobs' }} match the search criteria you provided.</p>
            </div>

            @include('partials.listings', ['type' => 'search', 'listings' => $listings, 'request' => $request])

        </div>

    </div>

@endsection