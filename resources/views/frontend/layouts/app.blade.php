<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    @section('styles')
        @include('frontend.partials.styles')
    @show
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}"/>
</head>
<body>

@section('header')
    @include('frontend.partials.nav')
    @include('frontend.partials.notifications')
@show

@section('body')
    <div class="container-fluid">
        <div class="content">
            @yield('content')
        </div>
    </div>
@show


@section('footer')
    @include('frontend.partials.footer')
@section('scripts')
    @include('frontend.partials.scripts')
@show
@show
</body>
</html>
