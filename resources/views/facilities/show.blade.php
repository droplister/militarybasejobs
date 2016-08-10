@extends('layouts.default')

@section('title', "Military, Civilian Jobs on {$facility->title()} - MilitaryBaseJobs.com")

@section('description', "There are {$facility->listings->count()} job listings for open positions at {$facility->name}, {$facility->state()->name}. " . maxLength($facility->content, 200))

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

    <div class="row page">

        <div class="col-md-3 col-sm-4 sidebar">
            @include('partials.sidebar', ['parent' => $facility, 'method' => 'listings', 'request' => $request])
        </div>

        <div class="col-md-6 col-sm-8">

            <div class="page-header">
                <h1>{{ $facility->title() }} Jobs</h1>
                <p>{{ $listings->total() }} {{ $listings->total() == 1 ? 'job' : 'jobs' }} listed by {{ $facility->organizations->count() }} federal {{ $facility->organizations->count() == 1 ? 'agency' : 'agencies' }} near {{ str_replace('AFB', 'Air Force Base', $facility->name) }} in {{ $facility->state()->code == 'DC' ? $facility->state()->name : $facility->state()->name . '.' }}</p>
            </div>

            @include('partials.listings', ['type' => 'facility', 'listings' => $listings, 'request' => $request])

            <div class="content">

                <div class="page-header">
                    <h2>About {{ $facility->title() }}, {{ $facility->state()->code }}</h2>
                </div>

                {!! wpautop($facility->content) !!}

            </div>

        </div>

        <div class="col-md-3 col-sm-8 col-md-offset-0 col-sm-offset-4 sidebar">

            @include('partials.ads')

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><a href="{{ url(route('location::show', ['location' => $facility->state()->slug])) }}">{{ $facility->state()->name }}</a></h3>
                </div>
                <div class="panel-body">
                    <ul>
                        @foreach($facility->state()->facilities()->orderBy('name', 'asc')->get() as $facility)
                            <li><a href="{{ url(route('facility::show', ['facility' => $facility->slug])) }}">{{ $facility->title() }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>

    </div>

@endsection