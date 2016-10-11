<div class="row footer">
    <div class="col-lg-12">
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
        <!-- Instagram -->
        {{--<div class="col-lg-3 col-xs-12 col-sm-12">--}}
        {{--<h3>{{ trans('general.instagram') }}</h3>--}}

        {{--<p>--}}
        {{--<!-- SnapWidget -->--}}
        {{--<script src="http://snapwidget.com/js/snapwidget.js"></script>--}}
        {{--<iframe src="http://snapwidget.com/in/?u=N29yb2ZfY29tfGlufDcwfDJ8Mnx8bm98MnxmYWRlSW58b25TdGFydHx5ZXN8eWVz&ve=241115"--}}
        {{--title="Instagram Widget" class="snapwidget-widget" allowTransparency="true" frameborder="0"--}}
        {{--scrolling="no" style="border:none; overflow:hidden; width:100%;">--}}
        {{--</iframe>--}}
        {{--</p>--}}
        {{--</div>--}}
                <!-- twitter -->
        <div class="col-lg-3 col-xs-12 col-sm-12">
            <h3>{{ trans('general.twitter') }}</h3>

            <p>
                <a class="twitter-timeline" href="https://twitter.com/{{ $contactusInfo->twitter_url }}"
                   data-widget-id="669172461506863104">Tweets
                    by {{ $contactusInfo->twitter_url }}</a>
                <script>!function (d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                        if (!d.getElementById(id)) {
                            js = d.createElement(s);
                            js.id = id;
                            js.src = p + "://platform.twitter.com/widgets.js";
                            fjs.parentNode.insertBefore(js, fjs);
                        }
                    }(document, "script", "twitter-wjs");</script>
            </p>
        </div>
        <!-- col -->
        <!-- Youtube  -->
        <div class="col-lg-3 col-xs-12 col-sm-12">
            <h3>{{ trans('general.youtube') }}</h3>
            <p>
                <iframe width="350" height="241"
                        src="https://www.youtube.com/embed/videoseries?list={{ $contactusInfo->youtube_channel }}"
                        frameborder="0" allowfullscreen></iframe>
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
