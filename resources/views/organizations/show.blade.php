<h1>{{ $organization->name }}</h1>

@if(count($listings))
    <ul>
        @foreach($listings as $listing)
            <li><a href="{{ url(route('listing::show', ['listing' => $listing->identifier])) }}">{{ $listing->name }}</a></li>
        @endforeach
    </ul>
@endif

{!! $listings->render() !!}

@if($parent)
        <p><a href="{{ url(route('organization::show', ['organization' => $parent->id])) }}">{{ $parent->name }}</a></p>
@endif

@if(count($children))
    <ul>
        @foreach($children as $child_organization)
            <li><a href="{{ url(route('organization::show', ['organization' => $child_organization->id])) }}">{{ $child_organization->name }}</a></li>
        @endforeach
    </ul>
@endif

@if(count($facilities))
    <ul>
        @foreach($facilities as $facility)
            <li><a href="{{ url(route('facility::show', ['facility' => $facility->id])) }}">{{ $facility->name }}</a></li>
        @endforeach
    </ul>
@endif