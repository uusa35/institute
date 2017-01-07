@extends('frontend.layouts.app')

@section('content')
    <div class="col-lg-10 col-lg-push-1">
        <h1>{{ $post->title }}</h1>
        <hr>
        <h3 class="text-center">
            <img src="{{ File::exists('storage/'.$post->image) ? asset('storage/'.$post->image) : 'http://placehold.it/1000x300&text='.$post->title }}"
                 alt="" class="img-responsive"
                 style="max-height: 250px; width: 100%;">
        </h3>
        <div class="well well-sm">
            <p class="text-justify">
                {!! $post->body !!}
            </p>
        </div>
        @if(!is_null($post->gallery->first()))
            <div class="col-lg-12">
                @include('frontend.partials._gallery',['element' => $post->gallery->first()])
            </div>
        @endif
    </div>
@endsection


