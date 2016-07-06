<h1>{{ $state->name }}</h1>

@if(count($listings))
    <ul>
        @foreach($listings as $listing)
            <li><a href="{{ url(route('listing::show', ['listing' => $listing->identifier])) }}">{{ $listing->name }}</a></li>
        @endforeach
    </ul>
@endif

{!! $listings->render() !!}

@if(count($counties))
    <ul>
        @foreach($counties as $county)
            <li><a href="{{ url(route('location::county::show', ['county' => $county->id])) }}">{{ $county->name }}</a></li>
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