@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-10 col-lg-push-1">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="panel panel-info ">
                <div class="panel-heading">
                    Contact Us Information
                    <div class="btn-group pull-right">
                        <button class="btn btn-md green dropdown-toggle" type="button"
                                data-toggle="dropdown" aria-expanded="false"> Actions
                            <i class="fa fa-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('backend.contactus.edit',$contactusInfo->id) }}">
                                    <i class="fa fa-edit"></i> edit contact us</a>
                            </li>
                            <li>
                                <a href="{{ url('/contactus') }}">
                                    <i class="fa fa-eye"></i> view contact us</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="panel-body">
                    <p style="line-height: 25px;">
                        <i class="fa fa-arrow-right"></i> <strong>company_name_en :  {{ $contactusInfo->company_name_en }}</strong></br>
                        <i class="fa fa-arrow-right"></i> <strong>company_name_ar :  {{ $contactusInfo->company_name_ar }}</strong></br>
                        <i class="fa fa-arrow-right"></i> <strong>facebook_url :  {{ $contactusInfo->facebook_url }}</strong></br>
                        <i class="fa fa-arrow-right"></i> <strong>twitter_url :  {{ $contactusInfo->twitter_url }}</strong></br>
                        <i class="fa fa-arrow-right"></i> <strong>instagram_url :  {{ $contactusInfo->instagram_url }}</strong></br>
                        <i class="fa fa-arrow-right"></i> <strong>youtube_channel :  {{ $contactusInfo->youtube_channel }}</strong></br>
                        <i class="fa fa-arrow-right"></i> <strong>phone : {{ $contactusInfo->phone }}</strong>
                        <i class="fa fa-arrow-right"></i> <strong>mobile : {{ $contactusInfo->mobile }}</strong>
                        <i class="fa fa-arrow-right"></i> <strong>email : {{ $contactusInfo->email }}</strong>
                        <i class="fa fa-arrow-right"></i> <strong>address_ar :  {{ $contactusInfo->address_ar }}</strong></br>
                        <i class="fa fa-arrow-right"></i> <strong>address_en :  {{ $contactusInfo->address_en }}</strong></br>
                        <i class="fa fa-arrow-right"></i> <strong>latitude :  {{ $contactusInfo->latitude }}</strong></br>
                    </p>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
@endsection