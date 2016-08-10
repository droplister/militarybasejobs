@extends('layouts.default')

@section('title', 'Watchlist - MilitaryBaseJobs.com')

@section('content')

    <div class="row static">

        <div class="col-md-7 col-md-offset-2">

            <div class="page-header">
                <h1>Active Watchlist <small class="hidden-xs">{{ count($listings) }} Jobs</small></h1>
            </div>

            @include('partials.listings', ['type' => 'saved', 'listings' => $listings])

        </div>

    </div>

@endsection