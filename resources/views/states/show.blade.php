<h1>{{ $state->name }}</h1>

@if(count($listings))
    <ul>
        @foreach($listings as $listing)
            <li><a href="{{ url(route('listing::show', ['listing' => $listing->identifier])) }}">{{ $listing->name }}</a></li>
        @endforeach
    </ul>
@endif

@if(count($counties))
    <ul>
        @foreach($counties as $county)
            <li>{{ $county->name }}</li>
        @endforeach
    </ul>
@endif