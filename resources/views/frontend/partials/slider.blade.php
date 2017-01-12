<div class="row slider-main">
    <div id="carousel-example-generic" class="carousel slide col-lg-10 col-lg-push-1" data-ride="carousel"
         data-interval="30000" data-pause="hover">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            @foreach($sliders as $slider)
                <li data-target="#carousel-example-generic" data-slide-to="{{ $loop->index }}"
                    class="{{ $loop->index == 0 ? 'active' : null }}"></li>
            @endforeach
        </ol>

        <div id="video_count" class="hidden">{!! $sliders->where('type','video')->count() !!}</div>
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
                        <iframe class="youtube_frame" id="frame-{!! $slider->id !!}"
                                width="800" height="429"
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
            var count = $('#video_count').text();
            var youtubeFrameList = $('[class^="youtube_frame"]');
            var list = [];
            youtubeFrameList.each(function () {
                var frameId = $(this).attr('id');
                list.push(frameId);
            });
            $('#leftCarousel').click(function () {
                for (var i = 0; i < list.length; i++) {
                    $('#' + list[i])[0].contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');
                }
            });
            $('#rightCarousel').click(function () {
                for (var i = 0; i < list.length; i++) {
                    $('#' + list[i])[0].contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');
                }
            });
        });
    </script>
@endsection
