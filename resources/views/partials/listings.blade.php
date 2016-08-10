<div class="listings">

    @if(! count($listings))
        <div class="alert alert-warning"><small><i class="glyphicon glyphicon-exclamation-sign"></i></small> No active job listings found for this search.</div>
    @endif

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
                @if(! empty($listing->summary))
                    <p>{{ maxLength($listing->summary, 200) }}</p>
                @elseif(! empty($listing->qualifications))
                    <p>{{ maxLength($listing->qualifications, 200) }}</p>
                @else
                    <p>{{ maxLength($listing->open_to, 200) }}</p>
                @endif
                @if($type == 'saved')
                    <span>Apply by: {{ $listing->ends_at->toDateString() }} - <a href="{{ url(route('listing::remove', ['listing' => $listing->c_number])) }}">unwatch</a> - <a href="{{ $listing->url }}" target="_blank">more info</a></span>
                @elseif($type !== 'related')
                    <span>{{ $listing->published_at->diffForHumans() }} - <a href="{{ Auth::guest() ? url(route('auth::register')) : url(route((Auth::user()->listings->contains($listing->id) ? 'listing::remove' : 'listing::save'), ['listing' => $listing->c_number])) }}">{{ ! Auth::guest() && Auth::user()->listings->contains($listing->id) ? 'unwatch' : 'save job' }}</a> - <a href="{{ $listing->url }}" target="_blank">more info</a></span>
                @endif
           </div>
        </div>

    @endforeach

    @if (isset($request) && $type !== 'home')
        {!! $listings->appends($request->except('page'))->render() !!}
    @endif
</div>