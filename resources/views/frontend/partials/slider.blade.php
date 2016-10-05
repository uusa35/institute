<div class="row slider-main">
    <div id="carousel-example-generic" class="carousel slide col-lg-10 col-lg-push-1" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            @foreach($sliders as $slider)
                @if($slider->type == 'image')
                    <div class="item {{ ($loop->first) ? 'active' : null }}">
                        <img src="{{ File::exists('storage/'.$slider->image) ? asset('storage/'.$slider->image ) : 'http://placehold.it/1180X350&text='.$slider->caption }}" alt="title of the image"/>
                        <div class="carousel-caption">
                            <h4>{{ $slider->caption }}</h4>
                        </div>
                    </div>
                @elseif($slider->type == 'video')
                    <div class="item {{ ($loop->first) ? 'active' : null }} text-center">
                        <iframe width="700" height="315" src="{!! $slider->url !!}"
                                frameborder="0" allowfullscreen></iframe>
                        <div class="carousel-caption">
                            <h4 class="text-center">{{ $slider->caption }}</h4>
                        </div>c
                    </div>
                @endif
            @endforeach
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>


