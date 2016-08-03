@extends('layouts.default')

@section('title', 'About Us - MilitaryBaseJobs.com')

@section('description', 'Owned and operated by Family Media LLC, a private company, MilitaryBaseJobs.com makes it easier to explore federal government jobs on or near military bases.')

@section('content')

    <div class="row">

        <div class="col-md-7 col-md-offset-1">

            <div class="page-header">
                <h1>About Us</h1>
            </div>

            <p>Owned and operated by <a href="http://familymediallc.com/">Family Media LLC</a>, a private company, MilitaryBaseJobs.com makes it easier to explore federal government jobs on or near military bases.</p>
            <p>These jobs are generally sought out by active military, military veterans, military spouses, and civilians who  live near a military base and wish to find stable employment with the federal government.</p>
            <p>Ultimately, all of our job listings are pulled from <a href="https://www.usajobs.gov/">USAJobs.gov</a> (subject to change), and we cannot accept any applications ourselves, but we noticed there was no websites like ours which breaks out USAJobs.gov listings by military base. And that's what led us to create this website.</p>
            <p>Our site is broken down into four major taxonomies: <a href="{{ url(route('facility::index')) }}">facilities</a>, <a href="{{ url(route('organization::index')) }}">agencies</a>, <a href="{{ url(route('location::index')) }}">locations</a>, and <a href="{{ url(route('category::index')) }}">categories</a>. From any one of these sections, you can narrow your search down by job grade, schedule, and keyword with more filters to come soon.</p>
            <p>If the location or job or both result in no matches for you, consider subscribing to new job listings by email, so you will receive a notification as soon as matching jobs are published.</p>
            <p>We hope that you have found our website useful and that it has acted as a good resource to you during your job search, but please don't hestitate to <a href="{{ url(route('static::support')) }}">send feedback</a>, if you have any comment, questions, or suggestions.</p>

        </div>

    </div>

@endsection