@extends('frontend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-10 col-lg-push-1">
            <h1>{{ trans('general.albums') }}</h1>

            @if($albums->count() > 0)
                <div class='list-group gallery'>
                    @foreach($albums as $album)
                        @if(!is_null($album->gallery->first()))
                            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3' style="padding:4px;">
                                <a class="thumbnail fancybox" rel="ligthbox"
                                   href="{{ route('album.show',$album->id) }}">
                                    @if(!is_null($album->cover))
                                        <img class="img-responsive" alt="" src="{{ asset('storage/'.$album->cover) }}"/>
                                    @else
                                        <img class="img-responsive" alt=""
                                             src="{{ asset('storage/'.$album->gallery->first()->images->first()) }}"/>
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
                        @endif
                    @endforeach
                </div>
            @else
                <div class="alert alert-warning"><p>{{ trans('general.no_albums') }}</p></div>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-lg-push-3 text-center">
            {{ $albums->links() }}
        </div>
    </div>
@endsection
