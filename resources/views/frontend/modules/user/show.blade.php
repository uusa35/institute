@extends('frontend.layouts.app')

@section('content')
    <div class="col-lg-12">
        <div class="col-sm-4 col-md-4">
            <img src="{{ asset('storage/'.$user->avatar) }}"
                 alt="" class="img-rounded img-responsive"/>
        </div>
        <div class="col-sm-8 col-md-8">
            <blockquote>
                {{ $user->name }}
            </blockquote>
            <p><i class="glyphicon glyphicon-envelope"></i> &nbsp;{{ $user->email }}
                <br/>
                <i class="glyphicon glyphicon-globe"></i> &nbsp;{{ $user->other_link }}
                <br/>
                <i class="glyphicon glyphicon-play-circle"></i> &nbsp;{{ $user->video_link }}
                <br/>
                <i class="glyphicon glyphicon-calendar"></i> &nbsp; {{ trans('general.member_sience') }} :
                &nbsp;{{ $user->created_at->diffForHumans() }}

                <br/>
                <i class="glyphicon glyphicon-paperclip"></i> &nbsp; {{ trans('general.member_sience') }} :
                &nbsp;<a href="{{ $user->pdf }}">{{ trans('general.pdf') }}</a>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="panel panel-default">
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

@endsection