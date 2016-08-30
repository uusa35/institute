<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>

    @section('styles')
        @include('frontend.partials.styles')
    @show

</head>
<body>

@include('frontend.partials.nav')


<div class="container">
    <div class="row">
        @yield('content')
    </div>
</div>

@section('scripts')
    @include('frontend.partials.scripts')
@show
</body>
</html>
