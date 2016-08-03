<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php if (isset($_GET['q']) || isset($_GET['job_grade']) || isset($_GET['low_grade']) || isset($_GET['high_grade']) || isset($_GET['schedule']) || isset($_GET['page'])) { ?>
    <meta name="robots" content="NOINDEX, NOFOLLOW">
<?php } ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('description')">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">

</head>

<body>

@include('partials.header')

<div class="container-fluid">
    @yield('content')
</div>

@include('partials.footer')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
@yield('javascript')

</body>
</html>