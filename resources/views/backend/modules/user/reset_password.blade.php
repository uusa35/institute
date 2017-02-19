@extends('backend.layouts.app')
@section('content')
    {{ Form::open(['route' => ['backend.user.reset',$id],'class' => 'form-horizontal']) }}
    <div class="panel panel-primary col-lg-8 col-lg-push-2">
        <div class="panel-heading">
            reset password
        </div>
        <div class="panel-body">
            <div class="form-group">
                <div class="col-md-6">
                    <label for="password" class="control-label">password</label>
                    <input id="password" type="password" class="form-control" name="password">
                </div>
                <div class="col-md-6">
                    <label for="password-confirm" class="control-label">Password confirmation</label>
                    <input id="password-confirm" type="password" class="form-control"
                           name="password_confirmation">
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-4">
                    <button class="btn-outline btn-primary">save</button>
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
@endsection