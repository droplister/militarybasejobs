<ul>
@foreach($states as $state)
    <li>
        <a href="{{ url(route('location::state::show', ['state' => $state->id])) }}">{{ $state->name }}</a>
    </li>
@endforeach
</ul>