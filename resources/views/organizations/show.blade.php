@extends('layouts.default')

@section('title', "{$organization->name} - MilitaryBaseJobs.com")

@section('description', "There are {$organization->listings->count()} jobs with the {$organization->name} on military bases in the United States. Find employment on a military base near you today!")

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
            @if(count($children))
                <ul>
                    @foreach($children as $child_organization)
                        <li><a href="{{ url(route('organization::show', ['organization' => $child_organization->id])) }}">{{ $child_organization->name }}</a></li>
                    @endforeach
                </ul>
            @endif
            <h3>Facilities</h3>
            @if(count($facilities))
                <ul>
                    @foreach($facilities as $facility)
                        <li><a href="{{ url(route('facility::show', ['facility' => $facility->id])) }}">{{ $facility->name }}</a></li>
                    @endforeach
                </ul>
            @endif
        </div>

        <div class="col-md-6 listings">

            <div class="page-header">
                <h1>{{ $organization->name }}</h1>
                <p>The {{ $organization->name }} is hiring personnel for {{ $listings->total() }} positions on {{ $organization->facilities->count() }} military installations.</p>
            </div>

            @if(count($listings))
                @include('partials.listings', ['facility' => null, 'listings' => $listings])
            @endif

        </div>

    </div>

@endsection