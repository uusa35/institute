<div class="col-lg-6">
    <div class="col-sm-12">
        <img src="{{ asset('storage/'.$section->image) }}" alt="{{ $section->header }}" class="img-responsive img-thumbnail center-block" style="max-height: 170px !important;">
        <h3 class="title text-center">{{ $section->header }}</h3>
        <p class="text-center">
            {!! $section->content !!}
        </p>
    </div>
    @if(!empty($section->pdf))
        <div class="col-sm-12 text-center">
            <a href="{{ asset('storage/'.$section->pdf) }}">
                <i class="fa fa-fw fa-file-pdf-o fa-3x"></i>
            </a>
        </div>
    @endif

    @if(File::exists(asset('storage/'.$section->image)))
        <div class="col-sm-12">
            <img src="{{ asset('storage/'.$section->image) }}"
                 class="img-responsive center-block">
        </div>
    @endif
</div>