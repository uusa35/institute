<div class="row bg-circle hidden-xs hidden-sm">
    <div class="col-xs-6 col-xs-push-3 bg-article"
         style="background: url('../images/articles_{{ app()->getLocale() }}.png') no-repeat center center;">
        <div id="carousel-example-generic" class="carousel slide col-lg-10 col-lg-push-1" data-ride="carousel" data-pause="hover"
             style="">
            {{--<ol class="carousel-indicators" style="bottom: -30px;">--}}
            {{--@foreach($posts as $post)--}}
            {{--<li data-target="#carousel-example-generic" data-slide-to="{{ $loop->index }}" class="{{ $loop->index == 0 ? 'active' : null }}"></li>--}}
            {{--@endforeach--}}
            {{--</ol>--}}
                    <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox"
                 style="padding-top: 20px;">
                <h4 style="{{ app()->getLocale() === 'ar' ? 'padding-right : 30px;' : 'padding-left: 30px;' }}">{{ ucwords(trans('general.articles')) }}</h4>
                @foreach($posts as $post)
                    <article class="item {{ ($loop->first) ? 'active' : null }} articleElement">
                        <div class="col-xs-12">
                            <h5 text="text-center"><a
                                        href="{{ route('post.show',$post->id) }}">{{ $post->title }}</a>
                            </h5>
                        </div>
                        <div class="col-xs-12" style="min-height : 200px;">
                            <div class="col-xs-12">
                                {{ trans('general.created_at') }}
                                <a
                                        href="{{ route('post.show',$post->id) }}" target="_blank">
                                    {{ $post->created_at->diffForHumans() }}
                                </a>
                            </div>
                            <div class="col-xs-3 hidden-sm hidden-xs">
                                <img src="{{ File::exists('storage/'.$post->image) ? asset('storage/'.$post->image) : 'http://placehold.it/120x120&text=post'}}"
                                     alt="{{ $post->title }}"
                                     class="img-rounded img-responsive {!! (app()->getLocale() == 'ar' ? 'pull-right' : 'pull-left') !!}"
                                     style="max-width: 100px; max-height: 80px; padding : 5px;">
                            </div>
                            <div class="col-lg-9 col-md-9 col-xs-12">
                                <p class="text-justify" style="font-size: 12px; !important;">
                                    {!! str_limit(strip_tags($post->body) ,100,'...') !!}
                                    &nbsp;&nbsp; <a href="{{ url('post/'.$post->id) }}" class="btn btn-xs btn-info">{{ trans('general.more') }}</a>
                                </p>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>


            <!-- Controls -->
            {{--<a class="left carousel-control postCarousel" href="#carousel-example-generic" role="button" data-slide="prev">--}}
            {{--<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>--}}
            {{--<span class="sr-only">Previous</span>--}}
            {{--</a>--}}
            {{--<a class="right carousel-control postCarousel" href="#carousel-example-generic" role="button" data-slide="next">--}}
            {{--<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>--}}
            {{--<span class="sr-only">Next</span>--}}
            {{--</a>--}}
        </div>
    </div>
</div>
</div>

<div class="bg-circle hidden-lg hidden-md" style="width: 100%; min-height: 280px;">
    <div class="col-xs-6 col-xs-push-3 bg-article"
         style="background: url('../images/articles_{{ app()->getLocale() }}.png') no-repeat center center;">
        <article class="item 'active' articleElement">
            <div class="col-xs-12">
                <h5 text="text-center">
                    </br>
                    <h5>{{ ucwords(trans('general.articles')) }}</h5>
                    <a
                            href="{{ route('post.show',$posts->first()->id) }}">{{ $posts->first()->title }}</a>
                </h5>
            </div>
            <div class="col-xs-12" style="min-height : 184px;">
                <div class="col-xs-12">
                    {{ trans('general.created_at') }}
                    <a
                            href="{{ route('post.show',$posts->first()->id) }}" target="_blank">
                        {{ $posts->first()->created_at->diffForHumans() }}
                    </a>
                </div>
                <div class="col-xs-3 hidden-sm hidden-xs">
                    <img src="{{ File::exists('storage/'.$posts->first()->image) ? asset('storage/'.$posts->first()->image) : 'http://placehold.it/120x120&text=post'}}"
                         alt="{{ $posts->first()->title }}"
                         class="img-rounded img-responsive {!! (app()->getLocale() == 'ar' ? 'pull-right' : 'pull-left') !!}"
                         style="max-width: 100px; max-height: 80px; padding : 5px;">
                </div>
                <div class="col-lg-9 col-md-9 col-xs-12">
                    <p class="text-justify" style="font-size: 12px; !important;">
                        {!! str_limit(strip_tags($posts->first()->body) ,20,'...') !!}
                        &nbsp;&nbsp; <a href="{{ url('post/'.$post->id) }}" class="btn btn-xs btn-info">{{ trans('general.more') }}</a>
                        {{--&nbsp;&nbsp;{{ link_to_route('post.show',trans('general.more'), $posts->first()->id,['class' => 'btn btn-xs btn-info']) }}--}}
                    </p>
                </div>
            </div>
        </article>
    </div>
</div>
