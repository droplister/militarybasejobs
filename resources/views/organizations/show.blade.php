@extends('layouts.default')

@section('title', "{$organization->name} - MilitaryBaseJobs.com")

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
                        <li><a href="{{ url(route('organization::show', ['organization' => $child_organization->slug])) }}">{{ $child_organization->name }}</a></li>
                    @endforeach
                </ul>
            @endif
            <h3>Facilities</h3>
            @if(count($facilities))
                <ul>
                    @foreach($facilities as $facility)
                        <li><a href="{{ url(route('facility::show', ['facility' => $facility->slug])) }}">{{ $facility->name }}</a></li>
                    @endforeach
                </ul>
            @endif
        </div>

        <div class="col-md-6 listings">

            <div class="page-header">
                <h1>{{ $organization->name }}</h1>
            </div>

            @if(count($listings))
                @include('partials.listings', ['facility' => null, 'listings' => $listings])
            @endif

        </div>

    </div>

@endsection