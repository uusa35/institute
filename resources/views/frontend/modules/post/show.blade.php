@extends('frontend.layouts.app')
@section('styles')
    @parent
    <link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
    <link rel="stylesheet" href="css/bootstrap-image-gallery.min.css">
@endsection
@section('scripts')
    @parent
    <script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
    <script src="js/bootstrap-image-gallery.min.js"></script>
@endsection
@section('content')
    <div class="row">
        <div class="col-xs-12 col-md-10 well">
            title_ar : {{ $post->title_ar }}
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-10 well">
            title_en : {{ $post->title_en }}
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-10 well">
            body_ar : {{ $post->body_ar }}
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-10 well">
            body_en : {{ $post->body_en }}
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-10 well">
            user_id : {{ $post->user_id }}
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-10 well">
            <a href="{{ asset('storage/'.$post->image) }}" data-gallery>
                <img src="{{ asset('storage/'.$post->image) }}"/>
            </a>
        </div>
    </div>


    <div id="links">
        @foreach($post->gallery->first()->images as $item)
            <a href="{{ asset('storage/'.$item->image_url) }}" data-gallery>
            <img src="{{ asset('storage/'.$item->image_url) }}" alt="{{ $item->caption }}"/>
            </a>
        @endforeach
    </div>
    <!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
    <div id="blueimp-gallery" class="blueimp-gallery">
        <!-- The container for the modal slides -->
        <div class="slides"></div>
        <!-- Controls for the borderless lightbox -->
        <h3 class="title"></h3>
        <a class="prev">‹</a>
        <a class="next">›</a>
        <a class="close">×</a>
        <a class="play-pause"></a>
        <ol class="indicator"></ol>
        <!-- The modal dialog, which will be used to wrap the lightbox content -->
        <div class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" aria-hidden="true">&times;</button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body next"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left prev">
                            <i class="glyphicon glyphicon-chevron-left"></i>
                            Previous
                        </button>
                        <button type="button" class="btn btn-primary next">
                            Next
                            <i class="glyphicon glyphicon-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection