<nav class="navbar navbar-default navbar-static-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ url('img/logo.png') }}" alt="Military Base Jobs Logo" /></a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Browse <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ url(route('organization::index')) }}">By Agency</a></li>
            <li><a href="{{ url(route('facility::index')) }}">By Installation</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Keyword">
          <button type="submit" class="btn btn-default"><small><i class="glyphicon glyphicon-search"></i></small></button>
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../navbar-fixed-top/">Login</a></li>
        <li><a href="../navbar/">Register</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>