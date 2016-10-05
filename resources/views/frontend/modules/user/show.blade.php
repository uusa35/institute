@extends('frontend.layouts.app')

@section('content')
    <div class="row" style="margin-top: 10px;">
        <div class="col-lg-8 col-lg-push-2">
            <h1>{{ trans('general.user_profile') }}</h1>
            <hr>
            <div class="col-xs-3">
                <img src="{{ File::exists('storage/'.$user->avatar) ? asset('storage/'.$user->avatar) : asset('images/profile.png') }}"
                     alt="" class="img-rounded img-responsive"/>
            </div>
            <div class="col-xs-7">
                <h1>
                    {{ $user->name }}
                </h1>
                <p>
                    <i class="glyphicon glyphicon-flag"></i> &nbsp;{{ $user->country }}
                    <br/>
                    <i class="glyphicon glyphicon-envelope"></i> {{ trans('general.email') }} : &nbsp;{{ $user->email }}
                    <br/>
                    <i class="glyphicon glyphicon-globe"></i> &nbsp;{{ $user->other_link }}
                    <br/>
                    <i class="glyphicon glyphicon-play-circle"></i> &nbsp;{{ $user->video_link }}
                    <br/>
                    <i class="glyphicon glyphicon-calendar"></i> &nbsp; {{ trans('general.member_sience') }} :
                    &nbsp;{{ $user->created_at->diffForHumans() }}

                    <br/>
                    <i class="glyphicon glyphicon-paperclip"></i> &nbsp; {{ trans('general.member_sience') }} :
                    &nbsp;<a href="{{ asset('storage/'.$user->pdf) }}">{{ trans('general.pdf') }}</a>
            </div>
            <div class="col-xs-12 panel panel-default">
                <div class="panel-heading">
                    <blockquote>
                        {{ trans('general.info') }}
                    </blockquote>
                </div>
                <div class="panel-body">
                    <blockquote>
                        {{ trans('general.description') }}
                        <p>
                            {!! $user->description !!}
                        </p>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
@endsection