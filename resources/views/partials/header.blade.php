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
                <li><a href="#"><small><i class="glyphicon glyphicon-search"></i></small> Search</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><small><i class="glyphicon glyphicon-edit"></i></small> Articles</a></li>
                <li><a href="#"><small><i class="glyphicon glyphicon-log-in"></i></small> Login</a></li>
                <li><a href="#"><small><i class="glyphicon glyphicon-user"></i></small> Register</a></li>
            </ul>

        </div>

    </div>
</nav>
