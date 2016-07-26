@foreach($listings as $listing)
    <div class="listing">
        <div class="listing-title">
            <a href="{{ url(route('listing::show', ['listing' => $listing->identifier])) }}">{{ $listing->name }}{{ ( strpos($listing->name, $listing->grade()) || strpos($listing->name, $listing->jobCategory()->code) || strpos($listing->name, $listing->jobGrade()->code) ? '' : ', ' . $listing->grade() ) }}</a>
        </div>
        <div class="listing-meta">
            <a href="{{ url(route('organization::show', ['organization' => $listing->organization->slug])) }}">{{ $listing->organization->name }}</a> - <span>{!! $listing->facilityTeaser($facility) !!}</span>
        </div>
        <div class="listing-pay">
            ${{ $listing->max_pay }} / {{ $listing->pay_interval }}
        </div>
        <div class="listing-details">
            <p>{{ (! empty($listing->summary) ? maxLength($listing->summary, 200) : maxLength($listing->qualifications, 200) ) }}</p>
            <span>{{ $listing->published_at->diffForHumans() }} - <a href="#">save job</a> - <a href="{{ $listing->url }}">more info</a></span>
        </div>
    </div>
@endforeach

{!! $listings->render() !!}
