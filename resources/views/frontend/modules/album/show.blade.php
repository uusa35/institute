@extends('frontend.layouts.app')

@section('content')
    <div class="row">
        @include('frontend.partials._gallery',['element' => $album])
        <div class="col-lg-3 col-lg-pull-1 article">
        <h4>{{ trans('general.gallery') }} {!! $album->description !!}</h4>
        <div class="col-lg-12">
        <img class="img-responsive" src="{{ asset('storage/'.$album->cover) }}" alt="">
        </div>
        <div class="col-lg-12">
        <p>{!! $album->description !!}</p>
        </div>
        </div>
    </div>
@endsection


