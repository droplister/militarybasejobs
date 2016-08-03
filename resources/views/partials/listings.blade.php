<div class="listings">

    @foreach($listings as $listing)

        <div class="listing">
            <div class="listing-title">
                <a href="{{ url(route('listing::show', ['listing' => $listing->c_number])) }}">{{ $listing->name }}{{ ( strpos($listing->name, $listing->grade()) || strpos($listing->name, $listing->category->code) || strpos($listing->name, $listing->job_grade) ? '' : ', ' . $listing->grade() ) }}</a>
            </div>
            <div class="listing-meta">
                @include('partials.meta', compact('type', 'listings'))
            </div>
            <div class="listing-pay">
                ${{ $listing->max_pay }} / {{ $listing->pay_type }}
            </div>
            <div class="listing-details">
                <p>{{ (! empty($listing->summary) ? maxLength($listing->summary, 200) : maxLength($listing->qualifications, 200) ) }}</p>
                @if ($type !== 'related')
                    <span>{{ $listing->published_at->diffForHumans() }} - <a href="#">save job</a> - <a href="{{ $listing->url }}">more info</a></span>
                @endif
           </div>
        </div>

    @endforeach

    @if (isset($request))
        {!! $listings->appends($request->except('page'))->render() !!}
    @endif
</div>