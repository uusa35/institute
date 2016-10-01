@extends('frontend.layouts.app')

@section('content')
    @include('frontend.partials._gallery')
    </hr>
    <div class="row article">
        <div class="col-lg-10 col-lg-push-2">
            <h1>Article name first</h1>
            <div class="col-lg-2">
                <img class="img-responsive" src="http://placehold.it/300x300" alt="">
            </div>
            <div class="col-lg-8">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dictum ex eget porttitor
                    sollicitudin. Morbi cursus tempor placerat. Pellentesque suscipit tortor in orci pretium, ac
                    facilisis ex pretium. Fusce hendrerit orci diam, vitae tristique quam porttitor eu. Donec ligula
                    orci, ultricies in sagittis non, porta sed lorem. Aenean interdum posuere mattis. Curabitur
                    dignissim dictum quam, vitae malesuada velit tristique a. </p>
                <div>
                    <div class="more label"><a href="#">Read more</a></div>
                    <div class="tags">
                        <span class="btn-info"><a href="#">energy</a></span><span class="btn-info"><a
                                    href="#">reality</a></span><span class="btn-info"><a href="#">world</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


