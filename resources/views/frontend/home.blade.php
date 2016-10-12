@extends('frontend.layouts.app')


@section('body')

@section('content')
    @if(!is_null($sliders) && app()->environment() != 'local')
        @include('frontend.partials.slider')
    @endif

    @include('frontend.partials._search_section')

    @if(!is_null($users))
        @include('frontend.partials._random_avatars')
    @endif

    @if(!is_null($posts) && $posts->count() > 0)
        @include('frontend.partials._post_slider')
    @endif
@show

@endsection

