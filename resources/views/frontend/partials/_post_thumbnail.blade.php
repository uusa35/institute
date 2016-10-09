<div class="row bg-circle">
    <div class="col-lg-6 col-lg-push-3 ">
        <div class="row bg-article">
            <div class="col-xs-8 col-xs-push-2">
                <h3><a href="{{ route('post.show',$post->id) }}">{{ $post->title }}</a></h3>
            </div>
            <div class="col-xs-10 col-xs-push-1" style="padding-bottom: 50px;">
                <article>
                    <em class="hidden-sm hidden-xs">{{ trans('general.created_at') }} <a
                                href="{{ route('post.show',$post->id) }}" target="_blank">
                            {{ $post->created_at->diffForHumans() }}
                        </a>
                        <img src="{{ File::exists('storage/'.$post->image) ? asset('storage/'.$post->image) : 'http://placehold.it/120x120&text=post'}}" alt="{{ $post->title }}"
                             class="img-rounded img-responsive {!! (app()->getLocale() == 'ar' ? 'pull-right' : 'pull-left') !!}"
                             style="max-width: 100px; padding : 10px;">
                    </em>
                    <p class="text-justify" style="font-size: 12px;">
                        {!! str_limit($post->body ,200) !!}
                        </br>
                        {{ link_to_route('post.show',trans('general.more'), $post->id,['class' => 'btn btn-xs btn-info']) }}
                        {{--<a class="btn btn-info btn-xs {{ (app()->getLocale() == 'ar' ? 'pull-left' : 'pull-right') }}"--}}
                           {{--href="{{ route('post.show',$post->id) }}">{{ trans('general.more') }}</a>--}}
                    </p>
                </article>
            </div>
        </div>
    </div>
</div>