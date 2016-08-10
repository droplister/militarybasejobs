@extends('layouts.default')

@section('title', 'Agencies - MilitaryBaseJobs.com')

@section('description',  App\Organization::count() . ' federal agencies hiring near ' . App\Facility::count() . ' military bases.')

@section('content')

    <div class="row static">

        <div class="col-md-6 col-md-offset-3 listings">

            <div class="page-header">
                <h1>Agencies</h1>
                <p>{{ App\Organization::count() }} federal agencies hiring near {{ App\Facility::count() }} military bases.</p>
            </div>

            @foreach($organizations as $organization)

                @if($organization->has_children)

                    <h3><a href="{{ url(route('organization::show', ['organization' => $organization->slug])) }}">{{ $organization->name }}</a></h3>

                    <ul>
                        @foreach($organization->children()->orderBy('name', 'asc')->get() as $organization)
                            <li><a href="{{ url(route('organization::show', ['organization' => $organization->slug])) }}">{{ $organization->name }}</a></li>
                        @endforeach
                    </ul>

                @endif

            @endforeach

            <h3>Additional Agencies</h3>

            <ul>
                @foreach($organizations as $organization)

                    @if(! $organization->has_children)
                        <li><a href="{{ url(route('organization::show', ['organization' => $organization->slug])) }}">{{ $organization->name }}</a></li>
                    @endif

                @endforeach
            </ul>

        </div>

    </div>

@endsection