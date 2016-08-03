@extends('layouts.default')

@section('title', 'Installations - MilitaryBaseJobs.com')

@section('content')

    <div class="row">

        <div class="col-md-6 col-md-offset-3 listings">

            <div class="page-header">
                <h1>Installations</h1>
                <p>{{ App\Facility::count() }} military bases with {{ App\Listing::count() }} job listings.</p>
            </div>

            @foreach($states as $state)

                <h3><a href="{{ url(route('location::show', ['location' => $state->slug])) }}">{{ $state->name }}</a></h3>

                <ul>
                    @foreach($state->facilities()->orderBy('name', 'asc')->get() as $facility)
                        <li><a href="{{ url(route('facility::show', ['facility' => $facility->slug])) }}">{{ $facility->title() }}</a></li>
                    @endforeach
                </ul>

            @endforeach

        </div>

    </div>

@endsection