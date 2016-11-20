@extends('frontend.layouts.app')

@section('content')
    <div class="col-xs-12" style="display: flex; align-items: center; justify-content: center;">
            <img src="{{ asset('images/'.strtoupper(request()->get('filter')).'.png') }}" alt="" class="img-responsive" style="width: 120px;">
    </div>
    <div class="col-lg-10 col-lg-push-1 userMainHeader">
        <div class="col-xs-7">
            <h3>{{ trans('general.users').' '.(strtoupper(request()->get('filter'))) }}</h3>
        </div>
        <div class="col-xs-5">
            {{ Form::open(['route' => 'user.index','method' => 'GET','class' => 'form-horizontal']) }}
            {{ Form::hidden('filter',request()->get('filter')) }}
            <div class="input-group">
                {{ Form::select('country', $countries,request()->get('country') ? request()->get('country') : 'Kuwait', ['class' => 'form-control']) }}
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
            @include('frontend.modules.user._featured',['elements' => $featuredTrainers, 'type' => 'featured'])
            @include('frontend.modules.user._featured',['elements' => $featuredMasters , 'type' => 'master'])
        </div>
    @endif
    <div class="col-lg-10 col-lg-push-1">
        <hr>
    </div>
    <div class="col-lg-10 col-lg-push-1">
        @include('frontend.modules.user._user_thumbnail')
    </div>
@endsection