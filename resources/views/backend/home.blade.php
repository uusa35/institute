@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat2">
                <div class="display">
                    <div class="number">
                        <h3 class="font-green-sharp">
                            <span data-counter="counterup" data-value="{{ $totalUsers }}">0</span>
                            <small class="font-green-sharp"></small>
                        </h3>
                        <small>TOTAL Users</small>
                    </div>
                    <div class="icon">
                        <i class="icon-users"></i>
                    </div>
                </div>
                <div class="progress-info">
                    <div class="progress">
                                        <span style="width: 100%;" class="progress-bar progress-bar-success green-sharp">
                                            <span class="sr-only">100% progress</span>
                                        </span>
                    </div>
                    {{--<div class="status">--}}
                        {{--<div class="status-title"> progress </div>--}}
                        {{--<div class="status-number"> 100% </div>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat2">
                <div class="display">
                    <div class="number">
                        <h3 class="font-green-sharp">
                            <span data-counter="counterup" data-value="{{ $totalSubscribed }}">0</span>
                            <small class="font-green-sharp"></small>
                        </h3>
                        <small>TOTAL SUBSCRIBED USERS</small>
                    </div>
                    <div class="icon">
                        <i class="icon-users"></i>
                    </div>
                </div>
                <div class="progress-info">
                    <div class="progress">
                                        <span style="width: 100%;" class="progress-bar progress-bar-info green-sharp">
                                            <span class="sr-only">100% progress</span>
                                        </span>
                    </div>
                    {{--<div class="status">--}}
                        {{--<div class="status-title"> progress </div>--}}
                        {{--<div class="status-number"> 76% </div>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat2">
                <div class="display">
                    <div class="number">
                        <h3 class="font-green-sharp">
                            <span data-counter="counterup" data-value="{{ $totalNotActive }}">0</span>
                            <small class="font-green-sharp"></small>
                        </h3>
                        <small>TOTAL NOT ACTIVE</small>
                    </div>
                    <div class="icon">
                        <i class="icon-users"></i>
                    </div>
                </div>
                <div class="progress-info">
                    <div class="progress">
                                        <span style="width: 100%;" class="progress-bar progress-bar-warning green-sharp">
                                            <span class="sr-only">100% progress</span>
                                        </span>
                    </div>
                    {{--<div class="status">--}}
                        {{--<div class="status-title"> progress </div>--}}
                        {{--<div class="status-number"> 76% </div>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </div>


@endsection
