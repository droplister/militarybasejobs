<h1>{{ $organization->name }}</h1>

@if(count($listings))
    <ul>
        @foreach($listings as $listing)
            <li>{{ $listing->facilities->count() }} <a href="{{ url(route('listing::show', ['listing' => $listing->identifier])) }}">{{ $listing->name }}</a></li>
        @endforeach
    </ul>
@endif