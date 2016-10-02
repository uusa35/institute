<article class="well well-sm">
    <div class="line-item hf-item-odd clearfix">
        <div class="content-image col-lg-1">
            <a class="image-link article-link" href="{{ route('post.show',$post->id) }}">
                <img class="img-thumbnail img-responsive" src="{{ asset('storage/'.$post->image) }}">
                <span class="overlay article-overlay"></span>
            </a>
        </div>
        <div class="hf-info">
            <h2 class="post-title">
                <a class="article-link" href="#">
                    Post title Bootstrap Html Css Js Snippet
                    <span class="overlay article-overlay"></span>
                </a>
            </h2>
            <div class="hf-category small">
                <a href="#" class="text-default">{{ $post->created_at->diffForHumans() }}</a>
            </div>
            <div class="summary">
                <p>
                    <div class="col-lg-10 col-lg-push-1">
                    {!! str_limit($post->body,150) !!}
                </div>
                </p>
            </div>
            <div class="summary">
                <p><a href="{{ route('post.show',$post->id) }}" class="btn btn-md btn-primary pull-left"
                      role="button">{{ trans('general.more') }}</a></p>
            </div>
        </div>
    </div>
</article>