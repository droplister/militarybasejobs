<h1>{{ $department->name }}</h1>

@if(count($listings))
    <ul>
        @foreach($listings as $listing)
            <li>{{ $listing->locations->count() }} <a href="{{ url(route('listing::show', ['listing' => $listing->identifier])) }}">{{ $listing->name }}</a></li>
        @endforeach
    </ul>
@endif