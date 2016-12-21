<div class="row slider-main">
    <div id="carousel-example-generic" class="carousel slide col-lg-10 col-lg-push-1" data-ride="carousel"
         data-interval="false" data-pause="hover">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            @foreach($sliders as $slider)
                <li data-target="#carousel-example-generic" data-slide-to="{{ $loop->index }}"
                    class="{{ $loop->index == 0 ? 'active' : null }}"></li>
            @endforeach
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            @foreach($sliders as $slider)
                @if($slider->type == 'image')
                    <div class="item {{ ($loop->first) ? 'active' : null }}">
                        <img src="{{ File::exists('storage/'.$slider->image) ? asset('storage/'.$slider->image ) : 'http://placehold.it/1180X350&text='.$slider->caption }}"
                             alt="title of the image"/>
                        <div class="carousel-caption">
                            <h4><a href="{{ url($slider->url) }}" target="_blank">{{ $slider->caption }}</a></h4>
                        </div>
                    </div>
                @elseif($slider->type == 'video')
                    <div class="item {{ ($loop->first) ? 'active' : null }} text-center">
                        <iframe class="youtube_frame" width="800" height="429"
                                src="{{ url('https://www.youtube.com/embed/'.$slider->url.'?enablejsapi=1&version=3&playerapiid=ytplayer') }}"
                                frameborder="0" allowfullscreen allowscriptaccess="always"></iframe>
                        <div class="carousel-caption">
                            <h4 class="text-center"><a href="{{ url($slider->url) }}" class=""
                                                       target="_blank">{{ $slider->caption }}</a></h4>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"
           id="leftCarousel">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"
           id="rightCarousel">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
@section('customScripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#leftCarousel').click(function () {
                $('.youtube_frame')[0].contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');
            });
            $('#rightCarousel').click(function () {
                $('.youtube_frame')[0].contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');
            });
            {{--$('#rightCarousel').click(function () {--}}
            {{--$('#youtube-' + '{!! $slider->id !!}')[0].contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');--}}
            {{--});--}}
        });
    </script>
@endsection

