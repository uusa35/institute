@extends('frontend.layouts.app')

@section('content')
    <div class="col-lg-8 col-lg-push-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h1>{{ trans('general.register_membership') }}</h1>
            </div>
            <div class="panel-body">
                <div class="col-lg-8 col-lg-push-2">
                    {{ Form::open(['route' => 'register.membership','method' => 'post', 'class' => 'form-vertical']) }}
                    <div class="form-group">
                        <label for="name">{{ trans('general.name') }}</label>
                        {{ Form::text('name',null,['class' => 'form-control','required']) }}
                    </div>
                    <div class="form-group">
                        <label for="country">{{ trans('general.country') }}</label></br>
                        {{ Form::select('country',config('app.countriesList'),['class' => 'form-control','required']) }}
                    </div>
                    <div class="form-group">
                        <label for="email">{{ trans('general.email') }}</label>
                        {{ Form::text('email',null, ['class' => 'form-control','required','email']) }}
                    </div>
                    <div class="form-group">
                        <label for="address">{{ trans('general.address') }}</label>
                        {{ Form::text('address',null, ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        <label for="phone">{{ trans('general.phone') }}</label>
                        {{ Form::text('phone',null, ['class' => 'form-control text-center','required','number', 'placeholder' => '00956 - 0000000']) }}
                    </div>
                    <div class="form-group">
                        <label for="id">{{ trans('general.id') }}</label>
                        {{ Form::text('id',null, ['class' => 'form-control','required','placeholder' => 'civil Id or Passport No.']) }}
                    </div>
                    <div class="form-group">
                        <label for="date_attendance">{{ trans('general.date_of_attendance') }}</label>
                        {{ Form::text('date_attendance',null, ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        <label for="graduation_year">{{ trans('graduation_year') }}</label>
                        {{ Form::text('graduation_year',null, ['class' => 'form-control','required']) }}
                    </div>
                    <div class="form-group">
                        <label for="training_center">{{ trans('general.training_center') }}</label>
                        {{ Form::text('training_center',null, ['class' => 'form-control','required']) }}
                    </div>
                    <div class="form-group">
                        <label for="membership_type">{{ trans('general.membership_type') }}</label></br>
                        {{ Form::select('membership_type',['IBNP', 'IBH'],['class' => 'form-control']) }}
                    </div>
                    <div class="form-group col-lg-12 col-lg-push-10">
                        {{ Form::submit(trans('general.send_info'),['class' => 'btn btn-primary']) }}
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

    @endsection