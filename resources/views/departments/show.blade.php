<h1>{{ $department->name }}</h1>

@if(count($listings))
    <ul>
        @foreach($listings as $listing)
            <li><a href="#">{{ $listing->name }}</a></li>
        @endforeach
    </ul>
@endif