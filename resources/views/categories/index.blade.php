@extends('layouts.default')

@section('title', 'Categories - MilitaryBaseJobs.com')

@section('description', App\Category::count() . ' categories for browsing jobs near military bases.')

@section('content')

    <div class="row static">

        <div class="col-md-6 col-md-offset-3 listings">

            <div class="page-header">
                <h1>Categories</h1>
                <p>{{ App\Category::count() }} categories for browsing jobs near military bases.</p>
            </div>

            @foreach($categories as $category)

                <h3><a href="{{ url(route('category::show', ['category' => $category->slug])) }}">{{ $category->code }} - {{ $category->name }}</a></h3>

                <ul>
                    @foreach($category->children()->orderBy('code', 'asc')->get() as $category)
                        <li><a href="{{ url(route('category::show', ['category' => $category->slug])) }}">{{ $category->code }} - {{ $category->name }}</a></li>
                    @endforeach
                </ul>

            @endforeach

        </div>

    </div>

@endsection