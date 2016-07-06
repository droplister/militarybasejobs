<h1>{{ $organization->name }}</h1>

@if(count($listings))
    <ul>
        @foreach($listings as $listing)
            <li><a href="{{ url(route('listing::show', ['listing' => $listing->identifier])) }}">{{ $listing->name }}</a></li>
        @endforeach
    </ul>
@endif

{!! $listings->render() !!}

@if(count($children))
    <ul>
        @foreach($children as $child_organization)
            <li><a href="{{ url(route('organization::show', ['organization' => $child_organization->id])) }}">{{ $child_organization->name }}</a></li>
        @endforeach
    </ul>
@endif