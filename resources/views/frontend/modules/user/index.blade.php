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
    <div class="col-lg-8 col-lg-push-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                {{ trans('general.featured_users') }}
            </div>
            <div class="panel-body"
                 style="display: flex; justify-content: center; align-items: center; align-content: flex-start; margin-top: auto;">
                @if($featuredUsers->count() > 0)
                    @foreach($featuredUsers as $user)
                        <div class="col-lg-3">
                            <div class="col-lg-10 col-lg-push-1">
                                <img src="{{ File::exists('storage/'.$user->avatar) ? asset('storage/'.$user->avatar) : asset('images/profile.png') }}"
                                     alt="{{ $user->first_name }}"
                                     class="img-responsive img-circle">
                            </div>
                            <div class="col-lg-12 text-center">
                                <small>
                                    <a href="{{ route('user.show',$user->id) }}"
                                       class="">{{ str_limit($user->first_name,30) }}</a>
                                </small>

                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="alert alert-danger">{{ trans('general.no_users') }}</div>
                @endif
            </div>
        </div>
    </div>
    <div class="col-lg-10 col-lg-push-1">
        <hr>
    </div>
    <div class="col-lg-10 col-lg-push-1">
        @if($users->count() > 0)
            @foreach($users as $user)
                <div class="col-lg-3" style="height : 400px;">
                    <div class="col-lg-12 text-center">
                        <img src="{{ File::exists('storage/'.$user->avatar) ? asset('storage/'.$user->avatar) : asset('images/profile.png') }}"
                             alt="{{ $user->first_name }}"
                             class="img-responsive">
                    </div>
                    <div class="col-lg-12">
                        <blockquote>
                            <p><a href="{{ route('user.show',$user->id) }}" class="">{{ $user->name }}</a></p>
                            {{--<small><cite title="Source Title">{{ $user->address }}<i class="icon-map-marker"></i></cite>--}}
                            </small>
                        </blockquote>
                        <p>
                            <i class="glyphicon glyphicon-inbox"></i> {{ $user->email }}<br>
                            <i class="glyphicon glyphicon-phone"></i> {{ $user->mobile }} <br>
                            <i class="glyphicon glyphicon-flag"></i> {{ $user->country }} <br>
                            <i class="glyphicon glyphicon-calendar"></i> {{ trans('general.member_since') }}
                            : {{ $user->created_at->diffForHumans() }}
                        </p>
                    </div>
                </div>
            @endforeach
        @else
            <div class="alert alert-danger">{{ trans('general.no_users') }}</div>
        @endif
    </div>
    <div class="col-lg-6 col-lg-push-3 text-center">
        {{ $users->links() }}

    </div>
@endsection