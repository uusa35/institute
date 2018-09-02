@extends('frontend.layouts.app')

@section('content')
    <div class="col-xs-10 col-xs-push-1">
        <h1>{{ trans('general.albums') }}</h1>
        @if($albums->count() > 0)
            <div class='list-group gallery'>
                @foreach($albums as $album)
                        <div class='col-lg-3 col-xs-6' style="padding:4px; height : 400px;">
                            <a class="thumbnail fancybox" rel="ligthbox"
                               href="{{ route('album.show',$album->id) }}">
                                @if(!is_null($album->cover))
                                    <img class="img-responsive" alt="" src="{{ asset('storage/'.$album->cover) }}" style="width : 90%;"/>
                                @else
                                    <img class="img-responsive" alt=""
                                         src="{{ asset('storage/'.$album->gallery->first()->images->first()->image_url) }}" style="width: 80%;"/>
                                @endif
                                <div class='text-center'>
                                    <small class='text-muted text-justify'>
                                        <p>
                                            {!! $album->description !!}
                                        </p>
                                    </small>
                                </div> <!-- text-right / end -->
                            </a>
                        </div> <!-- col-6 / end -->
                @endforeach
            </div>
        @else
            <div class="alert alert-warning"><p>{{ trans('general.no_albums') }}</p></div>
        @endif
    </div>
    <div class="col-lg-12 text-center">
        {{ $albums->links() }}
    </div>
@endsection
