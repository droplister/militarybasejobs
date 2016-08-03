@extends('layouts.default')

@section('title', "{$organization->name} - MilitaryBaseJobs.com")

@section('description', "The {$organization->name} is hiring military and civilian personnel, both part and full-time, for jobs on or near military bases. Learn more on our website!")

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
            @include('partials.sidebar', ['parent' => $organization, 'method' => ($organization->isParent() ? 'childrenListings' : 'listings'), 'request' => $request])
        </div>

        <div class="col-md-6 col-sm-8">

            <div class="page-header">
                <h1>{{ $organization->name }}</h1>
                <p>{{ $listings->total() }} {{ $listings->total() == 1 ? 'job' : 'jobs' }} listed by the {{ $organization->name }} on or near {{ $organization->facilities->count() == 1 || $organization->facilities->count() == 0 ? 'a' : $organization->facilities->count() }} military {{ $organization->facilities->count() == 1 || $organization->facilities->count() == 0 ? 'base' : 'bases' }}.</p>
            </div>

            @if(count($listings))
                @include('partials.listings', ['type' => 'organization', 'listings' => $listings, 'request' => $request])
            @endif

        </div>

        <div class="col-md-3 col-sm-8 col-md-offset-0 col-sm-offset-4 sidebar">

            @include('partials.ads')

            @if($organization->isParent())

                @if($organization->children()->count())

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><a href="{{ url(route('organization::show', ['organization' => $organization->slug])) }}">{{ $organization->name }}</a></h3>
                        </div>
                        <div class="panel-body">
                            <ul>
                                @foreach($organization->children()->orderBy('name', 'asc')->get() as $organization)
                                    <li><a href="{{ url(route('organization::show', ['organization' => $organization->slug])) }}">{{ $organization->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                @endif

            @else

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><a href="{{ url(route('organization::show', ['organization' => $organization->parent->slug])) }}">{{ $organization->parent->name }}</a></h3>
                    </div>
                    <div class="panel-body">
                        <ul>
                            @foreach($organization->parent->children()->orderBy('name', 'asc')->get() as $organization)
                                <li><a href="{{ url(route('organization::show', ['organization' => $organization->slug])) }}">{{ $organization->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>

            @endif

        </div>

    </div>

@endsection