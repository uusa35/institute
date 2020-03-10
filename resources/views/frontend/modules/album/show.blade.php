@extends('frontend.layouts.app')

@section('content')
    <div class="col-lg-12" style="margin-bottom : 3%; margin-top: 5%;">
        <div class="col-lg-5 col-lg-push-1 article">
            <div class="col-lg-12">
                <p>{!! $album->description !!}</p>
            </div>
            <div class="col-lg-12">
                @if(!is_null($album->cover))
                    <img class="img-responsive" style="max-width: 150px;"
                         src="{{ File::exists('storage/'.$album->cover) ? asset('storage/'.$album->cover) : 'http://placehold.it/200x200&text=not available'}}"
                         alt="{{ $album->description }}">
                @else
                    <img class="img-responsive" style="max-width: 150px;"
                         src="{{ asset('storage/'.$album->gallery->first()->images->first()->image_url) }}"
                         alt="{{ $album->description }}">
                @endif
            </div>
        </div>
        <div class="col-lg-6">
            @include('frontend.partials._gallery',['gallery' => $album->gallery->first()])
        </div>
    </div>
@endsection


