<div class="listings">

    @foreach($listings as $listing)

    @if($type == 'saved')
        <div class="listing">
    @elseif(@session('success') == $listing->c_number)
        <div class="listing new-saved-job">
    @elseif(! Auth::guest() && Auth::user()->listings->contains($listing->id))
        <div class="listing saved-job">
    @else
        <div class="listing">
    @endif
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
                @if($type == 'saved')
                    <span>Apply by: {{ $listing->ends_at->toDateString() }} - <a href="{{ url(route('listing::remove', ['listing' => $listing->c_number])) }}">remove job</a> - <a href="{{ $listing->url }}" target="_blank">more info</a></span>
                @elseif($type !== 'related')
                    <span>{{ $listing->published_at->diffForHumans() }} - <a href="{{ Auth::guest() ? url(route('auth::register')) : url(route('listing::save', ['listing' => $listing->c_number])) }}">save job</a> - <a href="{{ $listing->url }}" target="_blank">more info</a></span>
                @endif
           </div>
        </div>

    @endforeach

    @if (isset($request))
        {!! $listings->appends($request->except('page'))->render() !!}
    @endif
</div>