@extends('layouts.default')

@section('title', 'Installation Directory - MilitaryBaseJobs.com')

@section('content')

    <div class="row">

        <div class="col-md-2 col-md-offset-1 sidebar">
        </div>

        <div class="col-md-6 listings">

            <div class="page-header">
                <h1>Installations</h1>
            </div>

            @foreach($states as $state)
                <h3>{{ $state->name }}</h3>
                <ul>
                    @foreach($state->facilities()->orderBy('name', 'asc')->get() as $facility)
                        <li><a href="{{ url(route('facility::show', ['facility' => $facility->slug])) }}">{{ $facility->title() }}</a></li>
                    @endforeach
                </ul>
            @endforeach

        </div>

    </div>

@endsection