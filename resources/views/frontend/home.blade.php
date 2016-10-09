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

    @if(!is_null($post))
        @include('frontend.partials._post_thumbnail')
    @endif
@show

@endsection

