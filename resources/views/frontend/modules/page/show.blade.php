@extends('frontend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-10 col-lg-push-1">
            <h1>{{ $page->title }}</h1>
            <hr>
            <h3 class="text-center">
                <img src="{{ File::exists('storage/'.$page->image) ? asset('storage/'.$page->image) : 'http://placehold.it/1000x300&text='.$page->title }}" alt="" class="img-responsive"
                     style="max-height: 250px; width: 100%;">
            </h3>
        </div>
        <div class="col-lg-10 col-lg-push-1">
            @foreach($page->sections as $section)
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
            @endforeach
            @if(!is_null($page->gallery->first()))
                <div class="row">
                    @include('frontend.partials._gallery',['element' => $page])
                </div>
            @endif
        </div>
    </div>
@endsection


