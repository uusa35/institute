@section('styles')
    @parent
    <link rel="stylesheet" href="http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
    <link rel="stylesheet" href="{{ asset('css/gallery.css') }}">
@endsection
@if(!is_null($element->gallery->first()))
    <div class="col-lg-8">
        <div id="links"
             style="display: flex; align-items: center; align-content: center; justify-content: center; justify-items: center; padding: 15px;">
            <div class="row">
                @foreach($element->gallery->first()->images->chunk(5) as $itemSet)
                    @foreach($itemSet as $item)
                        <div class="col-lg-6">
                            <a href="{{ asset('storage/'.$item->image_url) }}" data-gallery>
                                <img src="{{ asset('storage/'.$item->image_url) }}" alt="{{ $item->caption }}"
                                     class="img-responsive img-rounded gallery-thumb"/>
                            </a>
                        </div>
                    @endforeach
                @endforeach
            </div>
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
    </div>
@endif

@section('scripts')
    @parent
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
    <script src="{{ asset('js/gallery.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#links').onclick = function (event) {
                event = event || window.event;
                var target = event.target || event.srcElement,
                        link = target.src ? target.parentNode : target,
                        options = {index: link, event: event},
                        links = this.getElementsByTagName('a');
                blueimp.Gallery(links, options);
            };
        });
    </script>
@endsection