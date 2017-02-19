@extends('frontend.layouts.app')

@section('content')
    <div class="col-lg-12" style="padding-bottom: 50px;">
        <div class="col-lg-10 col-lg-push-1">
            <h1 class="text-justify">{{ $page->title }}</h1>
            <hr>
            <h3 class="text-center">
                <img src="{{ File::exists('storage/'.$page->image) ? asset('storage/'.$page->image) : 'http://placehold.it/1000x300&text='.$page->title }}"
                     alt="" class="img-responsive"
                     style="max-height: 250px; width: 100%;">
            </h3>
        </div>
        <div class="col-lg-10 col-lg-push-1">
            @foreach($page->sections as $section)
                @include('frontend.modules.section._show_section_'.$section->type)
            @endforeach
            @if(!is_null($page->gallery->first()))
                <div class="col-lg-12">
                    @include('frontend.partials._gallery',['gallery' => $page->gallery->first()])
                </div>
            @endif
        </div>
    </div>
@endsection


