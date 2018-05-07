@extends('frontend.layouts.app')

@section('content')
    <div class="col-xs-10 col-xs-push-1">
        <h1>{{ trans('general.albums') }}</h1>

        @if($albums->count() > 0)
            <div class='list-group gallery'>
                @foreach($albums as $album)
                    @if(!is_null($album->gallery->first()))
                        <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3' style="padding:4px; height : 450px;">
                            <a class="thumbnail fancybox" rel="ligthbox"
                               href="{{ route('album.show',$album->id) }}">
                                    <img class="img-responsive" alt="" src="{{ asset('storage/'.$album->cover) }}"/>
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
    <div class="col-xs-12 text-center">
        {{ $albums->links() }}
    </div>
@endsection
