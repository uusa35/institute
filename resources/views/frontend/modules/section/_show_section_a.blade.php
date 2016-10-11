<div class="col-sm-8">
    <h3 class="title">{{ $section->header }}</h3>
    <p class="text-justify">
        {!! $section->content !!}
    </p>
</div>
@if(Storage::disk('public')->exists($section->image))
    <div class="col-sm-4 {{ (($loop->index % 2) == 0) ? 'pull-right' : 'pull-left'}}">
        <img src="{{ asset('storage/'.$section->image) }}"
             class="img-responsive img-thumbnail text-center">
    </div>
@endif