<div class="row">
    <div class="col-lg-12 logos_bg"
         style="background: url({{ asset('/images/logos_bg_'.app()->getLocale().'.png') }}) no-repeat center center;">
        <div class="col-lg-3 col-xs-12 ibhElement">
            <div class="text-center searchMainTitle">
                <h5 class="text-center"><b>{{ trans('general.search_one') }}</b></h5>
                <a href="{{ route('user.index',['filter' => 'ibh']) }}">
                    <img src="{{ asset('/images/IBH_'.app()->getLocale().'.png') }}" alt="..." class="img-responsive">
                </a>
            </div>
        </div>
        <div class="col-lg-6 col-xs-12 welcomeElement">
            <div class="caption col-lg-12">
                <h3 class="text-center">{{ ucwords(trans('general.welcome_message_title')) }}</h3>
                <hr>
                <p class="text-justify">
                    {{ trans('general.welcome_message') }}
                </p>
            </div>
            <hr>
            <div class="col-lg-12 searchMiddle">
                <div class="col-lg-1 text-center">
                    <a id="searchName" style="border: none; background: transparent;" class="btn">
                        <i class="arrowBtn glyphicon glyphicon-circle-arrow-{{ app()->getLocale() == 'en' ? 'left' : 'right' }}"
                           aria-hidden="true"></i>
                    </a>
                </div>
                <div class="col-lg-10">
                    {{ Form::open(['action' => 'Frontend\HomeController@searchByName','method' => 'GET','id' =>'searchByName']) }}
                    <div class="col-lg-12 text-center">
                        <div class="form-group">
                            <input name="first_name" class="input-lg searchInput" type="text" style="width: 100%;"
                                   placeholder="{{ trans('general.search_by_name') }}"/>
                        </div>
                    </div>
                    {{ Form::close() }}
                    {{ Form::open(['action' => 'Frontend\HomeController@searchById','method' => 'GET','id' => 'searchById']) }}
                    <div class="col-lg-12 text-center">
                        <div class="form-group">
                            <input name="membership_id" class="input-lg searchInput" type="text" style="width: 100%;"
                                   placeholder="{{ trans('general.search_by_id') }}"/>
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
                <div class="col-lg-1 text-center">
                    <a id="searchId" style="border: none; background: transparent;" class="btn">
                        <i class="arrowBtn glyphicon glyphicon-circle-arrow-{{ app()->getLocale() == 'en' ? 'right' : 'left' }}"
                           aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-xs-12 ibnlpElement">
            <div class="text-center"
                 style="display: flex; align-items: center; align-content: center; flex-direction: column">
                <h5 class="text-center"><b>{{ ucwords(trans('general.search_tow')) }}</b></h5>
                <a href="{{ route('user.index',['filter' => 'ibnlp']) }}">
                    <img src="{{ asset('/images/IBNLP_'.app()->getLocale().'.png') }}" alt="..." class="img-responsive">
                </a>
            </div>
        </div>
    </div>
</div>

@section('scripts')
    @parent
    <script>
        $('#searchId').on('click',function () {
            $('#searchById').submit();
        });
        $('#searchName').on('click',function () {
            $('#searchByName').submit();
        });
    </script>
@endsection
