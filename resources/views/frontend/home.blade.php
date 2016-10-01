@extends('frontend.layouts.app')


@section('body')

@section('content')

    @include('frontend.partials.slider')

    @include('frontend.partials._search_section')

    @include('frontend.partials._random_avatars')

    @include('frontend.partials._post_thumbnail')

@show

@endsection

