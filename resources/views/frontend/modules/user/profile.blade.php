@extends('frontend.layouts.app')

@section('content')
    <div class="col-lg-8 col-lg-push-2">
        <div class="col-lg-12">
            <div class="col-lg-2">
                <img style="max-height:100px;" class="img-resopnsive"
                     src="{{ asset('images/'.$user->type.'.png')  }}" alt="{{ $user->type }}">
            </div>
            <div class="col-lg-10">
                <h1 class="text-center">{{ trans('general.trainer_card') }} {{ $user->type }}</h1>
                <hr>
            </div>
        </div>


        <div class="col-lg-12">
            {{-- CV + Youtube Video --}}
            <div class="col-lg-9 col-xs-12">
                <h4>
                    {{trans('general.name') }} : {{ $user->name }}
                </h4>
                <p>
                    <i class="glyphicon glyphicon-flag"></i> {{ trans('general.country') }}
                    &nbsp;{{ $user->country }}
                    <br/>
                    <i class="glyphicon glyphicon-envelope"></i> {{ trans('general.email') }} :
                    &nbsp;{{ $user->email }}
                    </br>
                    <i class="glyphicon glyphicon-calendar"></i> &nbsp; {{ trans('general.graduation_year') }} :
                    &nbsp;{{ $user->graduation_year }}
                    <br/>
                    <i class="glyphicon glyphicon-paperclip"></i> &nbsp; {{ trans('general.pdf') }} :
                    &nbsp;<a href="{{ asset('storage/'.$user->pdf) }}">{{ trans('general.pdf') }}</a>
                    <br/>
                    <i class="glyphicon glyphicon-globe"></i> &nbsp;{{ $user->other_link }}
                    <br/>
                    <i class="glyphicon glyphicon-play-circle"></i> &nbsp;{{ $user->video_link }}
                </p>
            </div>
            {{-- Porchore --}}
            <div class="col-lg-3">
                <div class="col-lg-12">
                    <img style="max-height:100px;" class="img-responsive"
                         src="{{ File::exists('storage/'.$user->avatar) ? asset('storage/'.$user->avatar) : asset('images/profile.png') }}"
                         alt="" class="img-rounded img-responsive"/>
                </div>
                <div class="col-lg-12">
                    <h3 class="text-default">{{ trans('general.membership_id') }} : {{ $user->membership_id }}</h3>
                </div>
                <div class="col-lg-12">
                    @if(File::exists('storage/'.$user->pdf))
                        <a href="{{ asset('storage/'.$user->pdf) }}"><i
                                    class="fa fa-fw fa-file-pdf-o fa-lg"></i></a>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-lg-12 panel panel-default">
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