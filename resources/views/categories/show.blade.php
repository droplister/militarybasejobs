@extends('layouts.default')

@section('title', (is_null($category->parent_id) ? $category->name : "{$category->name} Jobs") . ' - MilitaryBaseJobs.com')

@section('description', "Looking for a {$category->name} job on or near a military base? There are at least {$listings->total()} employment opportunities that fit your needs in the United States. Find out more on our website!")

@section('javascript')
    <script>
        $(function() {
           $("form").submit(function() {
              $(this).find(":input").filter(function(){ return !this.value; }).attr("disabled", "disabled");
                  return true; // ensure form still submits
            });
        });
    </script>
@endsection

@section('content')

    <div class="row page">

        <div class="col-md-3 col-sm-4 sidebar">
            @include('partials.sidebar', ['parent' => $category, 'method' => ($category->isParent() ? 'childrenListings' : 'listings'), 'request' => $request])
        </div>

        <div class="col-md-6 col-sm-8">

            <div class="page-header">
                @if($category->isParent())
                    <h1>{{ $category->name }}</h1>
                @else
                    <h1>{{ $category->name }} Jobs</h1>
                @endif
                <p class="hidden-xs">{{ $listings->total() }} {{ $category->name }} {{ $listings->total() == 1 ? 'job' : 'jobs' }} available on or near military bases.</p>
            </div>

            @include('partials.listings', ['type' => 'category', 'listings' => $listings, 'request' => $request])

        </div>

        <div class="col-md-3 col-sm-8 col-md-offset-0 col-sm-offset-4 sidebar">

            @include('partials.ads')

            @if($category->isParent())

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><a href="{{ url(route('category::show', ['category' => $category->slug])) }}">{{ $category->code }} - {{ $category->name }}</a></h3>
                    </div>
                    <div class="panel-body">
                        <ul>
                            @foreach($category->children()->orderBy('name', 'asc')->get() as $category)
                                <li><a href="{{ url(route('category::show', ['category' => $category->slug])) }}">{{ $category->code }} - {{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>

            @else

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><a href="{{ url(route('category::show', ['category' => $category->parent->slug])) }}">{{ $category->parent->code }} - {{ $category->parent->name }}</a></h3>
                    </div>
                    <div class="panel-body">
                        <ul>
                            @foreach($category->parent->children()->orderBy('name', 'asc')->get() as $category)
                                <li><a href="{{ url(route('category::show', ['category' => $category->slug])) }}">{{ $category->code }} - {{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>

            @endif

        </div>

    </div>

@endsection