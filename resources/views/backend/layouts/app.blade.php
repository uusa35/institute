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
        @include('backend.partials.styles')
    @show
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}"/>
</head>
<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">

@section('header')


@show

@section('body')
    @include('backend.partials.nav')
    <div class="page-container">
        @include('backend.partials.sidebar')

        <div class="page-content-wrapper">
            <div class="page-content">
                <!-- BEGIN PAGE HEADER-->

                <!-- BEGIN PAGE BAR -->
                @section('pageBar')
                    @include('backend.partials._page_bar')
                            <!-- BEGIN PAGE TITLE-->
                    @section('title')
                        <h3 class="page-title"> Dashboard
                            <small>dashboard & statistics</small>
                        </h3>
                    @show
                    <!-- END PAGE TITLE-->
                @show
                    <!-- END PAGE BAR -->

                <div class="row">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    @include('backend.partials.footer')
@show


@section('scripts')
    @include('backend.partials.scripts')
@show
</body>
</html>
