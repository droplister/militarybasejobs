@extends('layouts.default')

@section('title', "{$listing->name} - MilitaryBaseJobs.com")

@section('description', ($listing->summary ? maxLength($listing->summary, 200) : maxLength($listing->qualifications, 200)))

@section('content')

    <div class="row">

        <div class="col-md-10 col-md-offset-1 job">

            <div class="page-header">

                <div class="row">

                    <div class="col-sm-8">
                        <h1>{{ $listing->name }}</h1>
                        <p>{{ $listing->schedule == 'Full Time' || $listing->schedule == 'Full-Time' || $listing->schedule == 'Part Time' || $listing->schedule == 'Part-Time' ? $listing->schedule : '' }} {{ $listing->category->name }} Job for the {{ $listing->organization->name }}</p>
                    </div>

                    <div class="col-sm-2 col-xs-6">
                        <a href="{{ $listing->url }}" class="btn btn-block btn-success" target="_blank">Apply Now</a>
                    </div>

                    <div class="col-sm-2 col-xs-6">
                        <a href="#" class="btn btn-block btn-primary">Save Job</a>
                        <div class="share hidden-xs hidden-sm">
                            <small><i class="glyphicon glyphicon-share"></i></small> 
                            <a class="a2a_dd" href="https://www.addtoany.com/share">Share Listing</a>
                            <script async src="https://static.addtoany.com/menu/page.js"></script>
                        </div>
                    </div>

                </div>

            </div>

            <div class="row">

                <div class="col-md-8 result">

                    <div class="link-ad">
                        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- mjb-listing-links -->
                        <ins class="adsbygoogle"
                             style="display:block"
                             data-ad-client="ca-pub-3402018973108947"
                             data-ad-slot="7651742514"
                             data-ad-format="link"></ins>
                        <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div>

                    <div class="row">

                        <div class="col-sm-6">
                            @include('partials.panel', ['heading' => 'Pay Range:', 'body' => '$' . $listing->min_pay . ' to $' . $listing->max_pay . ' / ' . $listing->pay_type])
                            @include('partials.panel', ['heading' => 'Job Grade:', 'body' => $listing->grade()])
                        </div>

                        <div class="col-sm-6">
                            @include('partials.panel', ['heading' => 'Schedule:', 'body' => $listing->schedule])
                            @include('partials.panel', ['heading' => 'Duration:', 'body' => $listing->position])
                        </div>

                    </div>

                    <div class="row timestamps">

                        <div class="col-sm-6">
                            <span><b>Apply by:</b> {{ $listing->ends_at->toDateString() }}</span>
                            <b>Published:</b> {{ $listing->published_at->diffForHumans() }}
                        </div>

                        <div class="col-sm-6 hidden-xs text-right">
                            <b>USAJobs.gov:</b> <a href="{{ $listing->url }}" target="_blank">{{ $listing->a_number }}</a>
                        </div>

                    </div>

                    <div class="job-tabs">

                        <ul class="nav nav-tabs" role="tablist">
                            @if($listing->summary)
                                <li class="active"><a href="#summary" aria-controls="summary" role="tab" data-toggle="tab">Job Summary</a></li>
                            @endif
                            @if($listing->qualifications)
                                <li><a href="#qualifications" aria-controls="qualifications" role="tab" data-toggle="tab">Qualifications</a></li>
                            @endif
                            @if($listing->open_to)
                                <li><a href="#apply" aria-controls="apply" role="tab" data-toggle="tab"><span class="hidden-xs">Who May</span> Apply</a></li>
                            @endif
                        </ul>

                        <div class="tab-content">
                            @if($listing->summary)
                                <div role="tabpanel" class="tab-pane active" id="summary">
                                        @foreach(chunkParagraphs($listing->summary, 1) as $paragraph)
                                            <p>{!! $paragraph !!}</p>
                                        @endforeach
                                </div>
                            @endif
                            @if($listing->qualifications)
                                <div role="tabpanel" class="tab-pane" id="qualifications">
                                        @foreach(chunkParagraphs($listing->qualifications, 1) as $paragraph)
                                            <p>{!! $paragraph !!}</p>
                                        @endforeach
                                </div>
                            @endif
                            @if($listing->open_to)
                                <div role="tabpanel" class="tab-pane" id="apply">
                                        @foreach(chunkParagraphs($listing->open_to, 1) as $paragraph)
                                            <p>{!! $paragraph !!}</p>
                                        @endforeach
                                </div>
                            @endif
                        </div>

                    </div>

                    <div class="row take-action">

                        <div class="col-sm-4 col-xs-6">
                            <a href="#" class="btn btn-block btn-primary">Save Job</a>
                        </div>

                        <div class="col-sm-4 col-xs-6">
                            <a href="{{ $listing->url }}" class="btn btn-block btn-success" target="_blank">Apply Now</a>
                        </div>

                        <div class="col-sm-4 hidden-xs">
                            <a href="https://www.addtoany.com/share" class="btn btn-block btn-default a2a_dd"><small><i class="glyphicon glyphicon-share"></i></small> Share Listing</a>
                            <script async src="https://static.addtoany.com/menu/page.js"></script>
                        </div>

                    </div>

                    @if(count($related))

                        <div class="related">

                            <div class="page-header">
                                <h3>Related Listings</h3>
                            </div>

                            @include('partials.listings', ['type' => 'related', 'listings' => $related])

                        </div>

                    @endif

                </div>

                <div class="col-md-4 infobar">
                    @include('partials.infobar', compact('listing'))
                </div>

            </div>

        </div>

    </div>

@endsection