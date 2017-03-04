<footer>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer text-center">
        {{--<div class="col-lg-3 col-xs-12 col-sm-12">--}}
        {{--<h3>{{ trans('general.contactus') }}</h3>--}}
        {{--<p>--}}
        {{--@if(!is_null(trim($contactusInfo->address)))--}}
        {{--<span class="glyphicon glyphicon-home"></span> {{ $contactusInfo->address }}<br/>--}}
        {{--@endif--}}
        {{--@if(trim($contactusInfo->phone))--}}
        {{--<span class="glyphicon glyphicon-earphone"></span> {{ $contactusInfo->phone }}<br/>--}}
        {{--@endif--}}
        {{--@if(trim($contactusInfo->mobile))--}}
        {{--<span class="glyphicon glyphicon-phone"></span> {{ $contactusInfo->mobile }}<br/>--}}
        {{--@endif--}}
        {{--@if($contactusInfo->email)--}}
        {{--<span class="glyphicon glyphicon-inbox"></span>--}}
        {{--<a href="mailto:{{ $contactusInfo->email }}"> {{ $contactusInfo->email }}</a> <br/>--}}
        {{--@endif--}}
        {{--@if(trim($contactusInfo->twitter_url))--}}
        {{--<span class="glyphicon glyphicon-globe"></span>--}}
        {{--<a href="http://twitter.com/{{ $contactusInfo->twitter_url }}">{{ trans('general.twitter') }}</a>--}}
        {{--<br/>--}}
        {{--@endif--}}
        {{--@if(trim($contactusInfo->instagram_url))--}}
        {{--<span class="glyphicon glyphicon-globe"></span>--}}
        {{--<a href="http://instagram.com/{{ $contactusInfo->instagram_url }}"> {{ $contactusInfo->instagram_url }}</a>--}}
        {{--<br/>--}}
        {{--@endif--}}
        {{--@if(trim($contactusInfo->youtube_channel))--}}
        {{--<span class="glyphicon glyphicon-globe"></span>--}}
        {{--<span><a href="http://youtube.com/{{ $contactusInfo->youtube_channel }}">--}}
        {{--{{ $contactusInfo->youtube_channel }}--}}
        {{--</a>--}}
        {{--</span>--}}
        {{--@endif--}}
        {{--</p>--}}
        {{--</div>--}}
                <!-- col -->

        <!-- Instagram -->
        <div class="col-lg-3 col-xs-12 col-sm-12">
            <h3>{{ trans('general.instagram') }}</h3>
            <hr>
            @if(app()->environment() !== 'local')
            <!-- InstaWidget -->
            <a href="https://instawidget.net/v/user/inter_t_i"
               id="link-7da1028c58d17edacf850860bb521f2954b0988c4c1a1fb4a095f3edfbf374d9"></a>
            <script src="https://instawidget.net/js/instawidget.js?u=7da1028c58d17edacf850860bb521f2954b0988c4c1a1fb4a095f3edfbf374d9&width=300px"></script>
            @endif
        </div>
        <!-- Icons -->
        <div class="col-lg-3 col-xs-12 col-sm-12">
            <h3>{{ trans('general.social_media') }}</h3>
            <hr>
            <div class="col-lg-4 col-lg-push-4 text-center">
                <div class="col-lg-6">
                    <a href="http://facebook.com/{{ $contactusInfo->facebook_url }}">
                        <i class="fa fa-fw fa-facebook-official fa-2x"></i>
                    </a>
                </div>
                <div class="col-lg-6">
                    <a href="http://twitter.com/{{ $contactusInfo->twitter_url }}">
                        <i class="fa fa-fw fa-twitter-square fa-2x"></i>
                    </a>
                </div>
            </div>
            </p>
        </div>

        <div class="col-lg-3 col-xs-12 col-sm-12">
            <h3>{{ trans('general.newsletter') }}</h3>
            </hr>
            {!! Form::open(['url' => ['/newsletter'], 'method' => 'post'],['class'=>'form-vertical','role'=>'form']) !!}
            <div class="form-group">
                <div class="col-lg-10 col-lg-push-1">
                    <label for="name" class="control-label"></label>
                    <input type="text" name="name" class="form-control" placeholder="{{ trans('general.name') }}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-10 col-lg-push-1">
                    <label for="email" class="control-label"></label>
                    <input type="email" name="email" class="form-control"
                           placeholder="{{ trans('general.email') }}">
                </div>
            </div>

            <div class="form-group text-center">
                <button style="margin: 10px;" type="submit"
                        class="btn btn-primary">{{ trans('general.subscribe') }}</button>
            </div>
            {!! Form::close() !!}
                    <!-- form -->
        </div>
        <!-- col -->
        <!-- Youtube  -->
        <div class="col-lg-3 col-xs-12 col-sm-12" style="overflow: hidden !important;">
            <h3>{{ trans('general.youtube') }}</h3>
            <hr>
            <p style="max-width: 330px;">
                <iframe width="320" height="235"
                        src="https://www.youtube.com/embed/{{ $contactusInfo->youtube_channel }}" frameborder="0"
                        allowfullscreen></iframe>
            </p>
        </div>
        <!-- col -->
        <div class="col-xs-12 text-center text-default" style="font-size: smaller;">
            {{ trans('messages.allrights') }} - {{ trans('messages.designed_developed') }} -
            <a href="http://ideasowners.net">{{ trans('general.ideasowners') }}</a>
            <br>
        </div>
    </div>
</footer>

