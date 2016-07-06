<ul>
@foreach($departments as $department)
    <li>
        {{ $department->departmentListings->count() }} <a href="{{ url(route('department::show', ['department' => $department->id])) }}">{{ $department->name }}</a>
        @if(count($department->children))
            <ul>
                @foreach($department->children as $organization)
                    <li>{{ $organization->listings->count() }} <a href="{{ url(route('department::show', ['department' => $organization->id])) }}">{{ $organization->name }}</a></li>
                @endforeach
            </ul>
        @endif
    </li>
@endforeach
</ul>