<div class="row bg-circle">
    <div class="col-lg-6 col-lg-push-3 ">
        <div class="row bg-article">
            <div class="col-xs-8 col-xs-push-2">
                <h3>{{ $post->title }}</h3>
            </div>
            <div class="col-xs-10 col-xs-push-1" style="padding-bottom: 50px;">
                <article>
                    <em class="hidden-sm hidden-xs">{{ trans('general.created_at') }} <a
                                href="{{ route('post.show',$post->id) }}" target="_blank">
                            {{ $post->created_at->diffForHumans() }}
                        </a>
                        <img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->title }}"
                             class="img-rounded img-responsive {!! (app()->getLocale() == 'ar' ? 'pull-right' : 'pull-left') !!}"
                             style="max-width: 100px; padding : 10px;">
                    </em>
                    <p class="text-justify">
                        {!! str_limit($post->body ,200) !!}
                        <a class="btn btn-info btn-xs {{ (app()->getLocale() == 'ar' ? 'pull-left' : 'pull-right') }}"
                           href="{{ route('post.show',$post->id) }}">{{ trans('general.more') }}</a>
                    </p>
                </article>
            </div>
        </div>
    </div>
</div>