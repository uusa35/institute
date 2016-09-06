@extends('frontend.layouts.app')

@section('content')
    <div class="row">
        @foreach($pages as $page)
            <div class="col-lg-12">
                <div class="thumbnail">
                    <img src="{{ $page->image }}" alt="{{ $page->title }}">
                    <div class="caption">
                        <h3>{{ $page->title }}</h3>
                        <p>{{ str_limit($page->body,100,link_to_route('post.show','...more',$page->id)) }}</p>
                        {{--<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#"--}}
                                                                                           {{--class="btn btn-default"--}}
                                                                                           {{--role="button">Button</a></p>--}}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection