@extends('layouts.default')

@section('title', "Search Jobs - MilitaryBaseJobs.com")

@section('description', 'Find employment near a military installation.')

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

    <div class="row search">

        <div class="col-md-6 col-md-offset-3">

            <div class="page-header">
                <h1>Search Jobs</h1>
            </div>

            @include('partials.search', compact('request', 'job_grades', 'low_grades', 'high_grades', 'schedules'))

        </div>

    </div>

@endsection