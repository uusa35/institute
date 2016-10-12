<div class="row footer">
    <div class="col-lg-12 text-center">
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
            <!-- LightWidget WIDGET -->
            <script src="//lightwidget.com/widgets/lightwidget.js"></script>
            <iframe src="//lightwidget.com/widgets/c56f1a5058e5526485ea592914428bed.html" id="lightwidget_c56f1a5058"
                    name="lightwidget_c56f1a5058" scrolling="no" allowtransparency="true" class="lightwidget-widget"
                    style="width: 100%; border: 0; overflow: hidden;"></iframe>


        </div>
        <!-- Icons -->
        <div class="col-lg-3 col-xs-12 col-sm-12">
            <h3>{{ trans('general.social_media') }}</h3>

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
            {!! Form::open(['url' => ['/newsletter'], 'method' => 'post'],['class'=>'row form-vertical','role'=>'form']) !!}
            <h3>{{ trans('general.newsletter') }}</h3>
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
        <div class="col-lg-3 col-xs-12 col-sm-12">
            <h3>{{ trans('general.youtube') }}</h3>
            <p style="max-width: 330px;">
                <iframe width="330" height="241"
                        src="https://www.youtube.com/embed/{{ $contactusInfo->youtube_channel }}" frameborder="0"
                        allowfullscreen></iframe>
            </p>
        </div>
        <!-- col -->
    </div>
    <div class="col-lg-12 text-center text-default">
        {{ trans('messages.allrights') }} - {{ trans('messages.designed_developed') }} -
        <a href="http://ideasowners.net">{{ trans('general.ideasowners') }}</a>
        </br>
    </div>
</div><!-- row -->
