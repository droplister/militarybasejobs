@extends('layouts.default')

@section('title', 'Watchlist - MilitaryBaseJobs.com')

@section('content')

    <div class="row">

        <div class="col-md-7 col-md-offset-1">

            <div class="page-header">
                <h1>My Watchlist <small>Saved Jobs</small></h1>
            </div>

            @include('partials.listings', ['type' => 'saved', 'listings' => $listings])

        </div>

    </div>

@endsection