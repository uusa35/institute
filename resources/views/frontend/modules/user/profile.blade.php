@extends('frontend.layouts.app')

@section('content')
    <div class="col-lg-8 col-lg-push-2">
        <div class="col-lg-12">
            <div class="col-lg-8 text-center">
                <h1 class="text-center">{{ trans('general.'.$userTypeTrans) }}</h1>
                <hr>
            </div>
            <div class="col-lg-4 center-block">
                <div class="col-lg-6 center-block">
                    @if($user->ibh)
                        <img style="max-height:100px;" class="img-responsive center-block"
                             src="{{ asset('images/IBH.png')  }}" alt="{{ $user->type }}">
                    @endif
                </div>
                <div class="col-lg-6">
                    @if($user->ibnlp)
                        <img style="max-height:100px;" class="img-responsive center-block"
                             src="{{ asset('images/IBNLP.png')  }}" alt="{{ $user->type }}">
                    @endif
                </div>
            </div>
        </div>


        <div class="col-lg-12">
            {{-- CV + Youtube Video --}}
            <div class="col-lg-8 col-xs-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4>
                            {{trans('general.name') }} : {{ $user->name }}
                        </h4>
                    </div>
                    <div class="panel-body">
                        <p>
                            <i class="glyphicon glyphicon-flag"></i> {{ trans('general.country') }}
                            &nbsp;{{ $user->country }}
                            <br/>
                            <i class="glyphicon glyphicon-envelope"></i> {{ trans('general.email') }} :
                            &nbsp;{{ $user->email }}
                            </br>
                            <i class="glyphicon glyphicon-calendar"></i> &nbsp; {{ trans('general.graduation_year') }}  :
                            &nbsp;{{ $graduationYear }}
                            <br/>
                            @if(!empty($user->pdf))
                                <i class="glyphicon glyphicon-paperclip"></i> &nbsp; {{ trans('general.pdf') }} :
                                &nbsp;<a href="{{ asset('storage/'.$user->pdf) }}">{{ trans('general.pdf') }}</a>
                                <br/>
                            @endif
                            @if(!empty($user->other_link))
                                <i class="glyphicon glyphicon-globe"></i> &nbsp; <a href="{{ $user->other_link }}"
                                                                                    class="btn btn-xs">{{ trans('general.other_link') }}</a>
                                <br/>
                            @endif
                            @if(!empty($user->video_link))
                                <i class="glyphicon glyphicon-play-circle"></i> &nbsp; <a href="{{ $user->video_link }}"
                                                                                          class="btn btn-xs">{{ trans('general.video') }}</a>
                            @endif
                        </p>
                    </div>
                </div>
            </div>
            {{-- Porchore --}}
            <div class="col-lg-4">
                <div class="col-lg-12">
                    <img style="max-height:100px;" class="img-responsive center-block img-thumbnail"
                         src="{{ File::exists(storage_path('app/public/'.$user->avatar)) ? asset('storage/'.$user->avatar) : asset('images/profile.png') }}"
                         alt="{{ $user->name }}"/>
                </div>
                <div class="col-lg-12 text-center">
                    @if(!is_null($userCode) && strlen($userCode) > 1)
                        <h4 class="text-default">{{ trans('general.membership_id') }}
                            : {{ $userCode }}</h4>
                    @endif
                    @if(!session()->has('filter'))
                        @if(!is_null($userCodeIBH) && strlen($userCodeIBH) > 1)
                            <h4 class="text-default">{{ trans('general.ibh_membership_id') }}
                                : {{ $userCodeIBH }}</h4>
                        @endif
                        @if(!is_null($userCodeIBNLP) && strlen($userCodeIBNLP) > 1)
                            <h4 class="text-default">{{ trans('general.ibnlp_membership_id') }}
                                : {{ $userCodeIBNLP }}</h4>
                        @endif
                    @endif
                    @if(File::exists(storage_path('app/public/'.$user->pdf)) && !empty($user->pdf))
                        <a href="{{ asset('storage/'.$user->pdf) }}" class="btn btn-info">
                            <i class="fa fa-fw fa-file-pdf-o fa-lg"></i></a>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-lg-12 panel panel-default" style="margin : 10px;">
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
                @if(!empty($user->video_link) && count($user->video_link) > 5)
                    <div class="col-lg-12 hidden-sm text-center">
                        <h5>{{ trans('general.video') }}</h5>
                        <iframe width="350" height="241"
                                src="{{ url($user->video_link) }}" frameborder="0"
                                allowfullscreen></iframe>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection

