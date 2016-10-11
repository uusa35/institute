<div class="col-lg-6">
    <div class="col-sm-12">
        <h3 class="title text-center">{{ $section->header }}</h3>
        <p class="text-center">
            {!! $section->content !!}
        </p>
    </div>
    @if(File::exists($section->pdf))
        <div class="col-sm-12 text-center">
            <a href="{{ asset('storage/'.$section->pdf) }}">
                <i class="fa fa-fw fa-file-pdf-o fa-lg"></i>
            </a>
        </div>
    @endif
    @if(File::exists($section->image))
        <div class="col-sm-12 text-center">
            <img src="{{ asset('storage/'.$section->image) }}"
                 class="img-responsive text-center">
        </div>
    @endif
</div>