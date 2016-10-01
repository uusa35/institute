@extends('frontend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-10 col-lg-push-1">
            <h1>{{ $post->title }}</h1>
            <h3 class="text-center">
                <img src="{{ asset('storage/'.$post->image) }}" alt="" class="img-responsive"
                     style="max-height: 250px; width: 100%;">
            </h3>
            <div class="well well-sm">
                <p class="text-justify">
                    {!! $post->body !!}
                </p>
            </div>
            @if($post->gallery->first())
                <hr>
                <div class="row">
                    @include('frontend.partials._gallery',['element' => $post->gallery->first()])
                </div>
            @endif
        </div>
    </div>
@endsection


