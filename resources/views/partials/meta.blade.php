@if ($type == 'organization' || $type == 'category' || $type == 'location' || $type == 'home')
    <?php $facility = $listing->facilities()->orderByRaw("RAND()")->first(); ?>
    <a href="{{ url(route('facility::show', ['facility' => $facility->slug])) }}">{{ $facility->name }}</a> - <span>{{ $listing->schedule }}</span>
@elseif($type == 'facility')
    <a href="{{ url(route('organization::show', ['organization' => $listing->organization->slug])) }}">{{ $listing->organization->name }}</a> - <span>{{ $listing->schedule }}</span>
@else
    {{ $listing->facilities()->orderByRaw("RAND()")->first()->name }} - <span>{{ $listing->schedule }}</span>
@endif