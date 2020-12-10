@extends('frontend.layouts.app')

@section('content')

        <!-- Contact page body start -->
<div class="contact-page-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!--maps-area start-->
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2140.8929464727016!2d48.07622139590436!3d29.34425838022287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fcf9d87e6bdc835%3A0xa397ca18643da6f5!2sAbud%20Al-wahaab%20Mall%20(Galleria%202000)!5e0!3m2!1sen!2skw!4v1607593635109!5m2!1sen!2skw" style="margin-top: 50px; width : 100%; height : 400px; border: 2px solid lightgrey
                        ;" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
                <!--maps-area end-->

                <!--contact-body-area start-->
                <div class="row">
                    <!-- contact info -->
                    <div class="col-lg-3 col-xs-12 col-sm-12">
                        <h3>{{ trans('general.contactus') }}</h3>
                        <p>
                            @if(!is_null(trim($contactusInfo->address)))
                                <span class="glyphicon glyphicon-home"></span> {{ $contactusInfo->address }}<br/>
                            @endif
                            @if(trim($contactusInfo->phone))
                                <span class="glyphicon glyphicon-earphone"></span> {{ $contactusInfo->phone }}<br/>
                            @endif
                            @if(trim($contactusInfo->mobile))
                                <span class="glyphicon glyphicon-phone"></span> {{ $contactusInfo->mobile }}<br/>
                            @endif
                            @if($contactusInfo->email)
                                <span class="glyphicon glyphicon-inbox"></span>
                                <a href="mailto:{{ $contactusInfo->email }}"> {{ $contactusInfo->email }}</a> <br/>
                            @endif
                            @if(trim($contactusInfo->twitter_url))
                                <span class="glyphicon glyphicon-globe"></span>
                                <a href="http://twitter.com/{{ $contactusInfo->twitter_url }}">{{ trans('general.twitter') }}</a>
                                <br/>
                            @endif
                            @if(trim($contactusInfo->instagram_url))
                                <span class="glyphicon glyphicon-globe"></span>
                                <a href="http://instagram.com/{{ $contactusInfo->instagram_url }}"> {{ $contactusInfo->instagram_url }}</a>
                                <br/>
                            @endif
                            @if(trim($contactusInfo->youtube_channel))
                                <span class="glyphicon glyphicon-globe"></span>
                                <span><a href="http://youtube.com/{{ $contactusInfo->youtube_channel }}">
                                        {{ $contactusInfo->youtube_channel }}
                                    </a>
                        </span>
                            @endif
                        </p>
                    </div>

                    {{--contact us form--}}
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <div class="contact-form">
                            <h3><i class="fa fa-envelope-o"></i> {{ trans('general.leave_message') }}</h3>

                            {!! Form::open(['url' => '/contactus', 'method' => 'post','class'=>'form-vertical']) !!}
                            <div class="form-group">
                                <div class="col-lg-4">
                                    <label class="control-label" for="name">{{ trans('general.name') }}</label>
                                    {!! Form::text('name', null, ['class' => 'form-control','placeholder'=> trans('general.name') , 'required']) !!}
                                </div>
                                <div class="col-lg-4">
                                    <label class="control-label" for="email">{{ trans('general.email') }}</label>
                                    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder'=> trans('general.email') , 'required' ]) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-4">
                                    <label class="control-label" for="subject">{{ trans('general.subject') }}</label>
                                    {!! Form::text('subject', null, ['class' => 'form-control','placeholder'=> trans('general.subject') , 'required' ]) !!}
                                </div>
                                <div class="col-lg-4">
                                    <label class="control-label" for="phone">{{ trans('general.phone') }}</label>
                                    {!! Form::text('phone', null, ['class' => 'form-control','placeholder'=> trans('general.phone') , 'required' ]) !!}
                                </div>
                                <div class="col-lg-4">
                                    <label class="col-lg-12 control-label" for="country">{{ trans('general.country') }}</label>
                                    {{ Form::select('country', $countries, ['class' => 'form-control','required' ]) }}
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <label class="control-label" for="content">{{ trans('general.content') }}</label>
                                    {!! Form::textarea('content', null, ['class'=>'form-control','cols'=>30,'rows'=>5,'placeholder'=> trans('general.content') , 'required']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-3 col-lg-push-9">
                                    <label class="control-label" for="submit"></label>
                                    <input type="submit" class="btn btn-info form-control" value="{{ trans('general.send') }}"/>
                                    <label class="control-label" for="submit"></label>
                                </div>
                            </div>
                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>
                <!--contact-body-area end-->
            </div>
        </div>
    </div>
</div>
<!-- Contact page body end -->

@endsection
