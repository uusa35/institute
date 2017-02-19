@extends('backend.layouts.app')

@section('content')

    <div class="col-lg-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                edit contact us
            </div>
            <div class="panel-body">
                {{ Form::model($contactusInfo,['route' => ['backend.contactus.update',$contactusInfo->id], 'method'=>'PATCH','class' => 'form-horizontal','files' => true]) }}

                <div class="form-group">
                    <div class="col-sm-5">
                        <label for="company_name_ar" class="control-label">company name arabic</label>
                        <input type="text" class="form-control" name="company_name_ar"
                               required="" value="{{ $contactusInfo->company_name_ar }}">

                    </div>
                    <div class="col-sm-5">
                        <label for="company_name_en" class="control-label">company name english</label>
                        <input type="text" class="form-control" name="company_name_en"
                               required="" value="{{ $contactusInfo->company_name_en }}">
                    </div>
                    <div class="col-sm-2">
                        <label for="logo" class="control-label">l
                            ogo</label>
                        <input type="file" class="form-control" name="logo"/>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-3">
                        <label for="facebook_url" class="control-label">facebook_url</label>
                        <input type="text" class="form-control" name="facebook_url"
                               value="{{ $contactusInfo->facebook_url }}">

                    </div>
                    <div class="col-sm-3">
                        <label for="twitter_url" class="control-label">twitter_url</label>
                        <input type="text" class="form-control" name="twitter_url"
                               value="{{ $contactusInfo->twitter_url }}">
                    </div>
                    <div class="col-sm-3">
                        <label for="instagram_url" class="control-label">instagram_url</label>
                        <input type="text" class="form-control" name="instagram_url"
                               value="{{ $contactusInfo->instagram_url }}">
                    </div>
                    <div class="col-sm-3">
                        <label for="youtube_channel" class="control-label">youtube_channel</label>
                        <input type="text" class="form-control" name="youtube_channel"
                              value="{{ $contactusInfo->youtube_channel }}">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="phone" class="control-label">phone</label>
                        <input type="text" class="form-control" name="phone"
                               value="{{ $contactusInfo->phone }}">

                    </div>
                    <div class="col-sm-4">
                        <label for="email" class="control-label">email</label>
                        <input type="text" class="form-control" name="email"
                               required="" value="{{ $contactusInfo->email }}">
                    </div>
                    <div class="col-sm-4">
                        <label for="mobile" class="control-label">mobile</label>
                        <input type="text" class="form-control" name="mobile"
                                value="{{ $contactusInfo->mobile }}">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-3">
                        <label for="address_ar" class="control-label">address_ar</label>
                        <input type="text" class="form-control" name="address_ar"
                               value="{{ $contactusInfo->address_ar }}">

                    </div>
                    <div class="col-sm-3">
                        <label for="address_en" class="control-label">address_en</label>
                        <input type="text" class="form-control" name="address_en"
                               value="{{ $contactusInfo->address_en }}">
                    </div>
                    <div class="col-sm-3">
                        <label for="latitude" class="control-label">latitude</label>
                        <input type="text" class="form-control" name="latitude"
                                value="{{ $contactusInfo->latitude }}">
                    </div>
                    <div class="col-sm-3">
                        <label for="longitude" class="control-label">longitude</label>
                        <input type="text" class="form-control" name="longitude"
                               value="{{ $contactusInfo->longitude }}">
                    </div>
                </div>

                <!-- Button http://getbootstrap.com/css/#buttons -->
                <div class="form-group">
                    <div class="text-right col-sm-12">
                        <button type="submit" class="btn btn-primary">
                            submit
                        </button>

                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
@endsection
