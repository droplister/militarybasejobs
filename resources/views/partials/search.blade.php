<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Quick Filter @if(! empty($request->all())) <span class="pull-right"><a href="{{ $request->url() }}"><i class="glyphicon glyphicon-refresh"></i></a></span> @endif</h3>
    </div>
    <div class="panel-body">

        <form method="get" action="{{ url(route('job::results')) }}" id="search">

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

                            @foreach($job_grades as $grade)
                                <option{{ $grade->job_grade == $request->job_grade ? ' selected' : '' }}>{{ $grade->job_grade }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="col-xs-4">
                    <div class="form-group">
                        <label>Above:</label>
                        <select class="form-control" name="low_grade">
                            <option></option>

                            @foreach($low_grades as $grade)
                                <option{{ $grade->low_grade == $request->low_grade ? ' selected' : '' }}>{{ $grade->low_grade }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="col-xs-4">
                    <div class="form-group">
                        <label>Below:</label>
                        <select class="form-control" name="high_grade">
                            <option></option>

                            @foreach($high_grades as $grade)
                                <option{{ $grade->high_grade == $request->high_grade ? ' selected' : '' }}>{{ $grade->high_grade }}</option>
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

                            @foreach($schedules as $schedule)
                                <option value="{{ $schedule->schedule_code }}"{{ $schedule->schedule_code == $request->schedule ? ' selected' : '' }}>{{ $schedule->schedule }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>

            </div>

            <button class="btn btn-success pull-right">Apply Filter</button>

        </form>

    </div>
</div>