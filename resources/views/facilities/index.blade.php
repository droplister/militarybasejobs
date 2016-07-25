<ul>
@foreach($facilities as $facility)
    <li>
        <a href="{{ url(route('facility::show', ['facility' => $facility->id])) }}">{{ $facility->name }}</a>
        ({{ $facility->listings->count() }})
    </li>
@endforeach
</ul>

{!! $facilities->render() !!}