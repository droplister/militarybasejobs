<h1>{{ $facility->name }}</h1>

@if(count($listings))
    <ul>
        @foreach($listings as $listing)
            <li><a href="{{ url(route('listing::show', ['listing' => $listing->identifier])) }}">{{ $listing->name }}</a></li>
        @endforeach
    </ul>
@endif

{!! $listings->render() !!}

<p>
    <a href="{{ url(route('location::state::show', ['state' => $state->id])) }}">{{ $state->name }}</a>
    &raquo;
    @if(count($counties))
        @foreach($counties as $county)
            <a href="{{ url(route('location::county::show', ['county' => $county->id])) }}">{{ $county->name }}</a>
        @endforeach
    @endif
</p>