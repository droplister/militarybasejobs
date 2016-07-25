<ul>
@foreach($facilities as $facility)
    <li>        <a href="https://www.google.com/search?q={{ $facility->name }}">{{ $facility->name }}</a>

        <a href="{{ url(route('facility::show', ['facility' => $facility->id])) }}">{{ $facility->name }}</a>
        ({{ $facility->listings->count() }})
        - {{ $facility->code }}
    </li>
@endforeach
</ul>

{!! $facilities->render() !!}