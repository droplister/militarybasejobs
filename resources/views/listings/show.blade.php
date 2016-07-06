<p>
    @if($organization->parent()->exists())
        <a href="{{ url(route('organization::show', ['organization' => $organization->parent->id])) }}">{{ $organization->parent->name }}</a>
        &raquo;
    @endif
    <a href="{{ url(route('organization::show', ['organization' => $organization->id])) }}">{{ $organization->name }}</a>
    &raquo;
    @foreach($facilities as $facility)
        <a href="{{ url(route('facility::show', ['facility' => $facility->id])) }}">{{ $facility->name }}</a>
    @endforeach
</p>
<p>
    @if(count($states))
        @foreach($states as $state)
            <a href="{{ url(route('location::state::show', ['state' => $state->id])) }}">{{ $state->name }}</a>
            &raquo;
            @if(count($state->children))
                @foreach($state->children as $county)
                    <a href="{{ url(route('location::county::show', ['county' => $county->id])) }}">{{ $county->name }}</a>
                @endforeach
            @endif
            <br />
        @endforeach
    @endif
</p>
<h1>{{ $listing->name }}</h1>
<p>{{ $listing->announcement }}</p>
<p>{{ $listing->url }}</p>
<p>{{ $listing->summary }}</p>
<p>{{ $listing->qualifications }}</p>
<p>{{ $listing->low_grade }}-{{ $listing->high_grade }}</p>
<p>${{ $listing->min_pay }} to ${{ $listing->max_pay }} {{ $listing->pay_interval }}</p>
<p>{{ $who_may_apply->name }} ({{ $who_may_apply->code }})</p>
<p>
    @if(count($job_categories))
        @foreach($job_categories as $job_category)
            {{ $job_category->name }} ({{ $job_category->code }})
        @endforeach
    @endif
</p>
<p>
    @if(count($job_grades))
        @foreach($job_grades as $job_grade)
            {{ $job_grade->name }} ({{ $job_grade->code }})
        @endforeach
    @endif
</p>
<p>
    @if(count($position_schedules))
        @foreach($position_schedules as $position_schedule)
            {{ $position_schedule->name }} ({{ $position_schedule->code }})
        @endforeach
    @endif
</p>
<p>
    @if(count($position_types))
        @foreach($position_types as $position_type)
            {{ $position_type->name }} ({{ $position_type->code }})
        @endforeach
    @endif
</p>