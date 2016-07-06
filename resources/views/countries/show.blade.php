<h1>{{ $country->name }}</h1>

@if(count($listings))
    <ul>
        @foreach($listings as $listing)
            <li><a href="{{ url(route('listing::show', ['listing' => $listing->identifier])) }}">{{ $listing->name }}</a></li>
        @endforeach
    </ul>
@endif

@if(count($states))
    <ul>
        @foreach($states as $state)
            <li><a href="{{ url(route('location::state::show', ['state' => $state->id])) }}">{{ $state->name }}</a></li>
        @endforeach
    </ul>
@endif