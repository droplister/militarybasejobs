<footer>
    <div class="container-fluid">

        <div class="row">

            <div class="col-sm-5 left-side">

                <ol class="footer-nav">
                    <li class="hidden-sm"><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url(route('static::about')) }}">About Us</a></li>
                    <li><a href="{{ url(route('static::support')) }}">Support</a></li>
                    <li><a href="{{ url(route('static::data')) }}">Job Data</a></li>
                </ol>

                <img src="{{ url('img/logo.png') }}" alt="Footer Logo" />

            </div>

            <div class="col-sm-7 right-side">

                <ol class="footer-nav hidden-xs">
                    <li class="hidden-sm">Browse by:</li>
                    <li><a href="{{ url(route('organization::index')) }}">Gov Agency</a></li>
                    <li><a href="{{ url(route('category::index')) }}">Job Category</a></li>
                    <li><a href="{{ url(route('location::index')) }}">United States</a></li>
                </ol>

                <div class="copyright">
                    <p>Copyright &copy; 2016 Family Media LLC. All Rights Reserved. <a href="{{ url(route('static::terms')) }}">Terms</a> <a href="{{ url(route('static::privacy')) }}">Privacy</a> <a href="{{ url(route('static::disclaimer')) }}">Disclaimer</a></p>
                </div>

            </div>

        </div>

    </div>
</footer>