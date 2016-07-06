<ul>
@foreach($departments as $department)
    <li>
        <a href="{{ url(route('department::show', ['department' => $department->id])) }}">{{ $department->name }}</a>
        @if(count($department->children))
            <ul>
                @foreach($department->children()->orderBy('name', 'asc')->get() as $organization)
                    <li><a href="{{ url(route('department::organization::show', ['organization' => $organization->id])) }}">{{ $organization->name }}</a></li>
                @endforeach
            </ul>
        @endif
    </li>
@endforeach
</ul>