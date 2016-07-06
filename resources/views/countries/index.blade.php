<ul>
@foreach($countries as $country)
    <li>
        <a href="{{ url(route('location::country::show', ['country' => $country->id])) }}">{{ $country->name }}</a>
    </li>
@endforeach
</ul>