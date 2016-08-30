@extends('frontend.layouts.app')


@section('body')
    {{--@include('frontend.partials.slider')--}}
    @parent
@endsection


@section('content')
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Dashboard</div>

            <div class="panel-body">
                You are logged in!
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 header" id="app"></div>
    </div>
@endsection
