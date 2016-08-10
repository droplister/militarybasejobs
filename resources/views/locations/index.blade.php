@extends('layouts.default')

@section('title', 'Locations - MilitaryBaseJobs.com')

@section('description', (App\Location::count() - App\Location::topLevel()->count()) . ' counties with ' . App\Listing::active()->count() . ' jobs on military bases.')

@section('content')

    <div class="row static">

        <div class="col-md-6 col-md-offset-3 listings">

            <div class="page-header">
                <h1>Locations</h1>
                <p>{{ App\Location::count() - App\Location::topLevel()->count() }} counties with {{ App\Listing::active()->count() }} jobs on military bases.</p>
            </div>

            @foreach($states as $state)

                <h3><a href="{{ url(route('location::show', ['location' => $state->slug])) }}">{{ $state->name }}</a></h3>

                @if($state->children()->orderBy('name', 'asc')->count())

                    <ul>
                        @foreach($state->children()->orderBy('name', 'asc')->get() as $county)
                            <li><a href="{{ url(route('location::show', ['location' => $county->slug])) }}">{{ $county->name }}</a></li>
                        @endforeach
                    </ul>
                @endif

            @endforeach

        </div>

    </div>

@endsection