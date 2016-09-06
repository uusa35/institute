@extends('frontend.layouts.app')


@section('body')
@section('content')
    @include('frontend.partials.slider')
    @include('frontend.partials._search_section')

    @include('frontend.partials._random_avatars')

    @include('frontend.partials._post_thumbnail')


    {{--<div class="row">--}}
        {{--<div class="col-lg-12 header"></div>--}}
    {{--</div>--}}
@show
@endsection

