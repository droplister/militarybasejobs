<div class="panel panel-default hidden-xs">
    <div class="panel-heading">
        <h3 class="panel-title">Quick Filter @if(! empty($request->all())) <span class="pull-right"><a href="{{ $request->url() }}"><i class="glyphicon glyphicon-refresh"></i></a></span> @endif</h3>
    </div>
    <div class="panel-body">

        <form method="get" action="" id="search">

            <div class="row">

                <div class="col-md-12">
                    <div class="form-group">
                        <label>Keyword(s):</label>
                        <input class="form-control" type="text" name="q" value="{{ $request->q }}">
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-xs-4">
                    <div class="form-group">
                        <label>Grade:</label>
                        <select class="form-control" name="job_grade">
                            <option></option>

                            @foreach($parent->$method()->select('job_grade')->groupBy('job_grade')->orderBy('job_grade', 'asc')->select('job_grade')->get() as $grade)
                                <option @if($grade->job_grade == $request->job_grade) selected @endif >{{ $grade->job_grade }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="col-xs-4">
                    <div class="form-group">
                        <label>Above:</label>
                        <select class="form-control" name="low_grade">
                            <option></option>

                            @foreach($parent->$method()->select('low_grade')->groupBy('low_grade')->orderBy('low_grade', 'asc')->select('low_grade')->get() as $grade)
                                <option @if($grade->low_grade == $request->low_grade) selected @endif >{{ $grade->low_grade }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="col-xs-4">
                    <div class="form-group">
                        <label>Below:</label>
                        <select class="form-control" name="high_grade">
                            <option></option>

                            @foreach($parent->$method()->select('high_grade')->groupBy('high_grade')->orderBy('high_grade', 'desc')->select('high_grade')->get() as $grade)
                                <option @if($grade->high_grade == $request->high_grade) selected @endif >{{ $grade->high_grade }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-md-12">
                    <div class="form-group">
                        <label>Schedule:</label>
                        <select class="form-control" name="schedule">
                            <option></option>

                            @foreach($parent->$method()->groupBy('schedule_code')->orderBy('schedule', 'asc')->select(['schedule', 'schedule_code'])->get() as $schedule)
                                <option value="{{ $schedule->schedule_code }}" @if($schedule->schedule_code == $request->schedule) selected @endif >{{ $schedule->schedule }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>

            </div>

            <button class="btn btn-success pull-right">Apply Filter</button>

        </form>

    </div>
</div>

<div class="side-links">
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- mbj-category-links -->
    <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-3402018973108947"
         data-ad-slot="1406732519"
         data-ad-format="link"></ins>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
</div>