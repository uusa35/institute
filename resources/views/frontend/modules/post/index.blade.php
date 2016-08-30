@extends('frontend.layouts.app')

@section('content')
    <div class="row">
        @foreach($posts as $post)
            <div class="col-lg-12">
                <div class="thumbnail">
                    <img src="{{ $post->image }}" alt="{{ $post->title }}">
                    <div class="caption">
                        <h3>{{ $post->title }}</h3>
                        <p>{{ str_limit($post->body,100,link_to_route('post.show','...more',$post->id)) }}</p>
                        {{--<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#"--}}
                                                                                           {{--class="btn btn-default"--}}
                                                                                           {{--role="button">Button</a></p>--}}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection