<div class="row bg-circle">
    <div class="col-md-6 col-lg-push-3 bg-article">
        <div class="col-lg-10 col-lg-push-1">
            <div class="row">
                <h3 class="col-lg-8 col-lg-push-2">{{ $post->title }}</h3>
            </div>
            <img src="{{ $post->image }}" alt="{{ $post->title }}" class="col-lg-3 {!! (app()->getLocale() == 'ar' ? 'pull-right' : 'pull-left') !!} img-responsive" style="width: 20%;">
            <em>{{ trans('general.created_at') }} <a href="{{ route('post.show',$post->id) }}" target="_blank">
                    {{ $post->created_at->diffForHumans() }}
                </a></em>
            <article>
                <p class="text-justify">
                    {{ str_limit($post->body ,200) }}
                    <a class="btn btn-info btn-xs {!! (app()->getLocale() == 'ar' ? 'pull-left' : 'pull-right') !!}" href="{{ route('post.show',$post->id) }}">{{ trans('general.more') }}</a>
                </p>
            </article>
        </div>
    </div>
</div>