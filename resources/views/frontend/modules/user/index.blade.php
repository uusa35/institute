@extends('frontend.layouts.app')

@section('content')
    <div class="col-lg-10 col-lg-push-1 userMainHeader">
        <div class="col-lg-4">
            <h1>{{ trans('general.users').' '.(request()->get('filter')) }}</h1>
        </div>
        <div class="col-lg-4 col-lg-pull-1">
            {{ Form::open(['route' => 'user.index','method' => 'GET','class' => 'form-horizontal']) }}
            {{ Form::hidden('filter',request()->get('filter')) }}
            <div class="input-group">
                {{ Form::select('country', $countries,request()->get('country'), ['class' => 'form-control']) }}
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-sm btn-primary"
                            type="button">{{ trans('general.search') }}</button>
                </span>
            </div><!-- /input-group -->
            {{ Form::close() }}
        </div>
    </div>
    <div class="col-lg-10 col-lg-push-1">
        <hr>
    </div>
    @if(isset($featuredTrainers,$featuredMasters))
        <div class="col-lg-10 col-lg-push-1">
            @include('frontend.modules.user._featured',['elements' => $featuredTrainers])
            @include('frontend.modules.user._featured',['elements' => $featuredMasters])
        </div>
    @endif
    <div class="col-lg-10 col-lg-push-1">
        <hr>
    </div>
    <div class="col-lg-10 col-lg-push-1">
        @include('frontend.modules.user._user_thumbnail')
    </div>
@endsection