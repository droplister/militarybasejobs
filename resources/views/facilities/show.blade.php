@extends('layouts.default')

@section('title', "Military, Civilian Jobs at {$facility->title()} - MilitaryBaseJobs.com")

@section('description', "There are {$facility->listings->count()} job listings for open positions at {$facility->name}, {$facility->state()->name}. Find employment on a military base near you today!")

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
            @include('partials.sidebar', ['parent' => $facility, 'method' => 'listings', 'request' => $request])
        </div>

        <div class="col-md-6 col-sm-8">

            <div class="page-header">
                <h1>{{ $facility->h1() }}</h1>
                <p>{{ $listings->total() }} {{ $listings->total() == 1 ? 'job' : 'jobs' }} listed by {{ $facility->organizations->count() }} federal {{ $facility->organizations->count() == 1 ? 'agency' : 'agencies' }} near {{ $facility->title() }} in {{ $facility->state()->name }}.</p>
            </div>

            @if(count($listings))
                @include('partials.listings', ['type' => 'facility', 'listings' => $listings, 'request' => $request])
            @endif

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