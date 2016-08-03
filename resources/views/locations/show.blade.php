@extends('layouts.default')

@section('title', "Military Base Jobs in {$location->name} - MilitaryBaseJobs.com")

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
            @include('partials.sidebar', ['parent' => $location, 'method' => 'listings', 'request' => $request])
        </div>

        <div class="col-md-6 col-sm-8">

            <div class="page-header">
                <h1>{{ $location->name }}</h1>
                @if($location->isParent())
                    <p>{{ $listings->total() }} {{ count($listings) == 1 ? 'job' : 'jobs' }} near {{ $location->facilities()->count() }} military {{ $location->facilities()->count() == 1 ? 'base' : 'bases' }} in {{ $location->children->count() }} {{ $location->children->count() == 1 ? 'county' : 'counties' }} in {{ $location->name }}.</p>
                @else
                    <p>{{ $listings->total() }} {{ count($listings) == 1 ? 'job' : 'jobs' }} near {{ $location->facilities()->count() }} military {{ $location->facilities()->count() == 1 ? 'base' : 'bases' }} in {{ $location->name }}, {{ $location->parent->name }}.</p>
                @endif
            </div>

            @if(count($listings))
                @include('partials.listings', ['type' => 'location', 'listings' => $listings, 'request' => $request])
            @endif

        </div>

        <div class="col-md-3 col-sm-8 col-md-offset-0 col-sm-offset-4 sidebar">

            @include('partials.ads')

            @if($location->isParent())

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><a href="{{ url(route('location::show', ['location' => $location->slug])) }}">{{ $location->name }}</a></h3>
                    </div>
                    <div class="panel-body">
                        @if($location->children->count())
                            <ul>
                                @foreach($location->children()->orderBy('name', 'asc')->get() as $location)
                                    <li><a href="{{ url(route('location::show', ['location' => $location->slug])) }}">{{ $location->name }}</a></li>
                                @endforeach
                            </ul>
                        @else
                            <ul>
                                @foreach($location->facilities()->orderBy('name', 'asc')->get() as $facility)
                                    <li><a href="{{ url(route('facility::show', ['facility' => $facility->slug])) }}">{{ $facility->name }}</a></li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>

            @else

                <div class="panel panel-default">
                     <div class="panel-heading">
                        <h3 class="panel-title"><a href="{{ url(route('location::show', ['location' => $location->parent->slug])) }}">{{ $location->parent->name }}</a></h3>
                    </div>
                    <div class="panel-body">
                        <ul>
                            @foreach($location->parent->children()->orderBy('name', 'asc')->get() as $location)
                                <li><a href="{{ url(route('location::show', ['location' => $location->slug])) }}">{{ $location->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>

            @endif

        </div>

    </div>

@endsection