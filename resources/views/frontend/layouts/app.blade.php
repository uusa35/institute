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
@show

<div class="container-fluid">
    <div id="app">from app</div>
    @include('frontend.partials.notifications')
    @section('body')
        <div class="row">

            @yield('content')
            @show
        </div>
</div>
@section('footer')
    @include('frontend.partials.footer')
@show


@section('scripts')
    @include('frontend.partials.scripts')
@show
@section('customScripts')
@show
</body>
</html>
