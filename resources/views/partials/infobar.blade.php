<div class="side-ad">

    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- mbj-listing-sidebar -->
    <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-3402018973108947"
         data-ad-slot="9069600118"
         data-ad-format="auto"></ins>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>

</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Military Base(s)</h3>
    </div>
    <div class="panel-body">
        <ul>
            @foreach($listing->facilities()->orderByRaw("RAND()")->orderBy('name', 'asc')->take(4)->get() as $facility)
                <li><a href="{{ url(route('facility::show', ['facility' => $facility->slug])) }}">{{ $facility->name }}</a></li>
            @endforeach
            @if($listing->facilities->count() > 4)
                <li class="others">And {{ ($listing->facilities->count() - 4) }} other {{ $listing->facilities->count() - 4 == 1 ? 'facility' : 'facilities' }}...</li>
            @endif
        </ul>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Gov Agencies</h3>
    </div>
    <div class="panel-body">
        <ul>
            @if(! $listing->organization->isParent())
                <li>
                    <a href="{{ url(route('organization::show', ['organization' => $listing->organization->parent->slug])) }}">{{ $listing->organization->parent->name }}</a>
                    <ul>
                        <li><a href="{{ url(route('organization::show', ['organization' => $listing->organization->slug])) }}">{{ $listing->organization->name }}</a></li>
                    </ul>
                </li>
            @else
                <li><a href="{{ url(route('organization::show', ['organization' => $listing->organization->slug])) }}">{{ $listing->organization->name }}</a></li>
            @endif
        </ul>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Job Categories</h3>
    </div>
    <div class="panel-body">
        <ul>
            <li>
                <a href="{{ url(route('category::show', ['category' => $listing->category->parent->slug])) }}">{{ $listing->category->parent->name }}</a>
                <ul>
                    <li><a href="{{ url(route('category::show', ['category' => $listing->category->slug])) }}">{{ $listing->category->name }}</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>