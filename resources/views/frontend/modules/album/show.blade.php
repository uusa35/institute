@extends('frontend.layouts.app')

@section('content')
    <div class="row">
        @include('frontend.partials._gallery',['element' => $album])
        <div class="col-lg-3 col-lg-pull-1 article">
            <h4>{{ trans('general.gallery') }} {!! $album->description !!}</h4>
            <div class="col-lg-12">
                @if(!is_null($album->cover))
                    <img class="img-responsive"
                         src="{{ File::exists('storage/'.$album->cover) ? asset('storage/'.$album->cover) : 'http://placehold.it/200x200&text=not available'}}"
                         alt="{{ $album->description }}">
                @else
                    <img class="img-responsive" src="{{ asset('storage/'.$album->gallery->first()->images->first()) }}"
                         alt="{{ $album->description }}">
                @endif
            </div>
            <div class="col-lg-12">
                <p>{!! $album->description !!}</p>
            </div>
        </div>
    </div>
@endsection


