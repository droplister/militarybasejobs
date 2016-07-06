<ul>
@foreach($facilities as $facility)
    <li>
        {{ $facility->listings->count() }} <a href="{{ url(route('facility::show', ['facility' => $facility->id])) }}">{{ $facility->name }}</a>
    </li>
@endforeach
</ul>