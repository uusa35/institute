@extends('frontend.layouts.app')

@section('content')
    <div class="row bootstrap snippet">
        <div class="col-lg-10 col-lg-push-1">
            <h1>{{ trans('general.posts') }}</h1>
            <hr>
            @if($posts->count() > 0)
                @foreach($posts as $post)
                    @include('frontend.modules.post._post_thumbnail')
                @endforeach
            <div class="row text-center">
                <p class="text-center">{{ $posts->links() }}</p>
            </div>
            @else
                <div class="alert alert-danger">{{ trans('general.no_posts') }}</div>
            @endif
        </div>
    </div>
@endsection