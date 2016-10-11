<div class="row">
    <div class="col-lg-12 logos_bg">
        <div class="col-lg-3">
            <div class="text-center searchMainTitle">
                <h5 class="text-center"><b>{{ trans('general.search_one') }}</b></h5>
                <a href="{{ route('user.index',['filter' => 'ibh']) }}">
                    <img src="{{ asset('/images/IBH.png') }}" alt="..." class="img-responsive">
                </a>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="caption col-lg-12">
                <h3 class="text-center">{{ trans('general.welcome_message_title') }}</h3>
                <hr>
                <p class="text-justify">
                    {{ trans('general.welcome_message') }}
                </p>
            </div>
            <hr>
            <div class="col-lg-12 searchMiddle">
                <div class="col-lg-2 text-center">
                    <button type="submit" href="#" style="border: none; background: transparent;">
                        <i class="arrowBtn glyphicon glyphicon-circle-arrow-{{ app()->getLocale() == 'en' ? 'left' : 'right' }}"
                           aria-hidden="true"></i>
                    </button>
                </div>
                <div class="col-lg-8">
                    {{ Form::open(['action' => 'Frontend\HomeController@searchByName','method' => 'GET']) }}
                    <div class="col-lg-12 text-center">
                        <div class="form-group">
                            <input name="first_name" class="input-lg searchInput" type="text" style="width: 100%;"
                                   placeholder="{{ trans('general.search_by_name') }}"/>
                        </div>
                    </div>
                    {{ Form::close() }}
                    {{ Form::open(['action' => 'Frontend\HomeController@searchById','method' => 'GET']) }}
                    <div class="col-lg-12 text-center">
                        <div class="form-group">
                            <input name="membership_id" class="input-lg searchInput" type="text" style="width: 100%;"
                                   placeholder="{{ trans('general.search_by_id') }}"/>
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
                <div class="col-lg-2 text-center">
                    <button type="submit" href="#" style="border: none; background: transparent;">
                        <i class="arrowBtn glyphicon glyphicon-circle-arrow-{{ app()->getLocale() == 'en' ? 'right' : 'left' }}"
                           aria-hidden="true"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="text-center"
                 style="display: flex; align-items: center; align-content: center; flex-direction: column">
                <h5 class="text-center"><b>{{ trans('general.search_tow') }}</b></h5>
                <a href="{{ route('user.index',['filter' => 'ibnlp']) }}">
                    <img src="{{ asset('/images/IBNLP.png') }}" alt="..." class="img-responsive">
                </a>
            </div>
        </div>
    </div>
</div>