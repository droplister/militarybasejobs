@extends('layouts.default')

@section('title', 'Disclaimer - MilitaryBaseJobs.com')

@section('description', "Family Media, LLC can not guarantee the accuracy of information posted on MilitaryBaseJobs.com. Whether it was posted by our company or third party content providers. We try our best to offer the most up-to-date information, but make sure to double check. Don't rely solely on the information found on our website.")

@section('content')

    <div class="row">

        <div class="col-md-7 col-md-offset-1">

            <div class="page-header">
                <h1>Disclaimer</h1>
            </div>

            <p><strong>You Should Know...</strong> This website is privately owned by <a href="http://familymediallc.com/">Family Media, LLC</a> and has absolutely no affiliation with any government agencies. Any indication otherwise is purely coincidental and actively avoided.</p>
            <p>Family Media, LLC can not guarantee the accuracy of information posted on MilitaryBaseJobs.com. Whether it was posted by our company or third party content providers. We try our best to offer the most up-to-date information, but make sure to double check. Don't rely solely on the information found on our website.</p>
            <p>In regards to new FTC regulations, and in the interest of full disclosure and transparency, you should know that every page on this site has been created to generate revenue (and help military families at the same time). This site generates income through banner advertisements and affiliate links.</p>
            <p>Anyone can submit a comment to our website. Comments are moderated and edited for slander and SPAM. We can not verify the claims made in any comments however each IP is logged.</p>
            <p>If you have any questions or concerns, please feel free to contact us through our <a href="{{ url(route('static::support')) }}">support page</a>.</p>

        </div>

    </div>

@endsection