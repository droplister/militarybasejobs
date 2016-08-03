<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">

        <div class="navbar-header">

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ url('img/logo.png') }}" alt="Military Base Jobs" width="170" height="20" /></a>

        </div>

        <div id="navbar" class="navbar-collapse collapse">

            <ul class="nav navbar-nav">
                <li><a href="{{ url(route('facility::index')) }}"><small><i class="glyphicon glyphicon-list-alt"></i></small> Browse</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if(Auth::guest())
                    <li><a href="{{ url(route('auth::login')) }}"><small><i class="glyphicon glyphicon-log-in"></i></small> Login</a></li>
                    <li><a href="{{ url(route('auth::register')) }}"><small><i class="glyphicon glyphicon-user"></i></small> Register</a></li>
                @else
                    <li><a href="{{ url(route('auth::logout')) }}"><small><i class="glyphicon glyphicon-log-out"></i></small> Logout</a></li>
                @endif
            </ul>

        </div>

    </div>
</nav>
