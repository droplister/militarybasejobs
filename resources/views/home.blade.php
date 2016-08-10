@extends('layouts.default')

@section('title', 'Find a Military Base Job - MilitaryBaseJobs.com')

@section('description', 'There are ' . App\Listing::active()->count() . ' active listings near military bases in the United States. We\'ll help you locate employment with the federal government on our website.')


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

    <div class="row home">

        <div class="col-md-8 col-md-offset-2">

            <div class="page-header">
                <h1>Military Base Jobs <small>{{ App\Listing::active()->count() }} Found</small></h1>
            </div>

        </div>

        <div class="col-md-6 col-md-offset-2">

            @include('partials.search', compact('request', 'job_grades', 'low_grades', 'high_grades', 'schedules'))
 
        </div>

        <div class="col-md-2 states">

            <div class="panel panel-default">

                <div class="panel-heading">
                    United States
                </div>

                <div class="panel-body">

                    <ul>
                        @foreach($states as $state)
                            @if($state->name != 'Guam')
                                <li><a href="{{ url(route('location::show', ['location' => $state->slug])) }}">{{ $state->code }}</a></li>
                            @endif
                        @endforeach
                    </ul>

                </div>

            </div>

        </div>

    </div>

    <div class="row">

        <div class="col-md-10 col-md-offset-2">
            <div class="page-header">
                <h2>Recent Listings <small>Latest</small></h2>
            </div>
        </div>

        <div class="col-md-2 col-md-offset-2 home-ad">

            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- mbj-facility-sidebar -->
            <ins class="adsbygoogle"
                style="display:block"
                data-ad-client="ca-pub-3402018973108947"
                data-ad-slot="8797718516"
                data-ad-format="auto"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>

        </div>

        <div class="col-md-6 front">

            @include('partials.listings', ['type' => 'home', 'listings' => $latest, 'request' => $request])

            <div class="page-header">
                <h2>Highest Salary <small>Per Year</small></h2>
            </div>

            @include('partials.listings', ['type' => 'home', 'listings' => $salary, 'request' => $request])

            <div class="page-header">
                <h2>Highest Wages <small>Per Hour</small></h2>
            </div>

            @include('partials.listings', ['type' => 'home', 'listings' => $hourly, 'request' => $request])

        </div>

    </div>

@endsection
