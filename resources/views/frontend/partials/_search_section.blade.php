<div class="row">
    <div class="col-lg-12 logos_bg">
        <div class="col-lg-3">
            <div class="text-center"
                 style="display: flex; align-items: center; align-content: center; flex-direction: column">
                <h3 class="text-center">{{ trans('general.search_one') }}</h3>
                <img src="{{ asset('/images/logo_right.png') }}" alt="..." class="img-responsive">
            </div>
        </div>
        <div class="col-lg-6">
            <div>
                <div class="caption">
                    <h3 class="text-center">{{ trans('general.welcome_message_title') }}</h3>
                    <p class="text-justify">
                        {{ trans('general.welcome_message') }}
                    </p>
                </div>
                <hr>
                <div class="col-lg-12 text-center">
                    {{ Form::open(['action' => 'Frontend\HomeController@searchByName','method' => 'GET']) }}
                    <div class="col-lg-6"
                         style="display: flex; flex-direction: column; flex: 0.5; align-content: center; justify-items: center; justify-content: center">
                        <div class="form-group">
                            <input name="first_name" class="input-lg" type="text" size="15"
                                   placeholder="{{ trans('general.search_by_name') }}"/>
                        </div>
                        <button type="submit" href="#" style="border: none; background: transparent;">
                            <i class="glyphicon glyphicon-circle-arrow-{{ app()->getLocale() == 'en' ? 'left' : 'right' }}" aria-hidden="true"
                               style="color : #1976b7; font-size: 250%"></i>
                        </button>
                    </div>
                    {{ Form::close() }}
                    {{ Form::open(['action' => 'Frontend\HomeController@searchById','method' => 'GET']) }}
                    <div class="col-lg-6"
                         style="display: flex; flex-direction: column; flex: 0.5; align-content: center; justify-items: center; justify-content: center">
                        <div class="form-group">
                            <input name="membership_id" class="input-lg" type="text" size="15"
                                   placeholder="{{ trans('general.search_by_id') }}"/>
                        </div>
                        <button type="submit" href="#" style="border: none; background: transparent;">
                            <i class="glyphicon glyphicon-circle-arrow-{{ app()->getLocale() == 'en' ? 'right' : 'left' }}" aria-hidden="true"
                               style="color : #1976b7; font-size: 250%"></i>
                        </button>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="text-center"
                 style="display: flex; align-items: center; align-content: center; flex-direction: column">
                <h3 class="text-center">{{ trans('general.search_tow') }}</h3>
                <img src="{{ asset('/images/logo_left.png') }}" alt="..." class="img-responsive">
            </div>
        </div>
    </div>
</div>