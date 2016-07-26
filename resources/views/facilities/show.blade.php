@extends('layouts.default')

@section('title', "Military, Civilian Jobs at {$facility->title()} - MilitaryBaseJobs.com")

@section('description', "There are {$facility->listings->count()} job listings for open positions at {$facility->name}, {$facility->state()->name}. Find employment on a military base near you today!")

@section('javascript')
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
@endsection

@section('content')

    <div class="row">

        <div class="col-md-2 col-md-offset-1 sidebar">
            <h3>Agency</h3>
            @if(count($organizations))
                <ul>
                    @foreach($organizations as $child_organization)
                        <li><a href="{{ url(route('organization::show', ['organization' => $child_organization->id])) }}">{{ $child_organization->name }}</a></li>
                    @endforeach
                </ul>
            @endif
            <h3>County</h3>
            @if(count($counties))
                <ul>
                    @foreach($counties as $county)
                        <li><a href="{{ url(route('location::county::show', ['county' => $county->id])) }}">{{ $county->name }}</a></li>
                   @endforeach
                </ul>
            @endif
        </div>

        <div class="col-md-6 listings">

            <div class="page-header">
                <h1>{{ $facility->h1() }}</h1>
                <p>There are {{ $facility->organizations->count() }} federal agencies with {{ $listings->total() }} job listings near {{ $facility->title() }}, {{ $facility->state()->name }}.</p>
            </div>

            @if(count($listings))
                @include('partials.listings', ['facility' => $facility->name, 'listings' => $listings])
            @endif

        </div>

    </div>

@endsection