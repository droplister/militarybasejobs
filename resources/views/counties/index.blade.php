<ul>
@foreach($counties as $county)
    <li>
        <a href="{{ url(route('location::county::show', ['county' => $county->id])) }}">{{ $county->name }}</a>
    </li>
@endforeach
</ul>