<div class="row bg-circle">

    <div class="col-lg-6 col-lg-push-3  bg-article" style="min-height : 190px;">
        <div id="carousel-example-generic" class="carousel slide col-lg-10 col-lg-push-1" data-ride="carousel"
             style="">
            <ol class="carousel-indicators" style="bottom: -30px;">
                @foreach($posts as $post)
                    <li data-target="#carousel-example-generic" data-slide-to="{{ $loop->index }}" class="{{ $loop->index == 0 ? 'active' : null }}"></li>
                @endforeach
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                @foreach($posts as $post)

                    <article class="item {{ ($loop->first) ? 'active' : null }}">
                        <h5><a href="{{ route('post.show',$post->id) }}">{{ $post->title }}</a></h5>
                        <em class="hidden-sm hidden-xs">{{ trans('general.created_at') }} <a
                                    href="{{ route('post.show',$post->id) }}" target="_blank">
                                {{ $post->created_at->diffForHumans() }}
                            </a>
                            <img src="{{ File::exists('storage/'.$post->image) ? asset('storage/'.$post->image) : 'http://placehold.it/120x120&text=post'}}"
                                 alt="{{ $post->title }}"
                                 class="img-rounded img-responsive {!! (app()->getLocale() == 'ar' ? 'pull-right' : 'pull-left') !!}"
                                 style="max-width: 100px; padding : 10px;">
                        </em>
                        <p class="text-justify" style="font-size: 12px;">
                            {!! str_limit($post->body ,120) !!}
                            &nbsp;&nbsp;{{ link_to_route('post.show',trans('general.more'), $post->id,['class' => 'btn btn-xs btn-info']) }}
                        </p>
                    </article>
                @endforeach
            </div>


            <!-- Controls -->
            <a class="left carousel-control postCarousel" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control postCarousel" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

</div>
