<ul>
@foreach($organizations as $organization)
    <li>
        <a href="{{ url(route('organization::show', ['organization' => $organization->id])) }}">{{ $organization->name }}</a>
        @if(count($organization->children))
            <ul>
                @foreach($organization->children()->orderBy('name', 'asc')->get() as $child_organization)
                    <li><a href="{{ url(route('organization::show', ['organization' => $child_organization->id])) }}">{{ $child_organization->name }}</a></li>
                @endforeach
            </ul>
        @endif
    </li>
@endforeach
</ul>