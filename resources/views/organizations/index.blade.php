@extends('layouts.default')

@section('title', 'Agency Directory - MilitaryBaseJobs.com')

@section('content')

    <div class="row">

        <div class="col-md-2 col-md-offset-1 sidebar">
        </div>

        <div class="col-md-6 listings">

            <div class="page-header">
                <h1>Federal Agencies</h1>
            </div>

            <ul>
                @foreach($organizations as $organization)
                    <li><a href="{{ url(route('organization::show', ['organization' => $organization->slug])) }}">{{ $organization->name }}</a>
                        @if(count($organization->children))
                            <ul>
                                @foreach($organization->children()->orderBy('name', 'asc')->get() as $child_organization)
                                    <li><a href="{{ url(route('organization::show', ['organization' => $child_organization->slug])) }}">{{ $child_organization->name }}</a></li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>

        </div>

    </div>

@endsection