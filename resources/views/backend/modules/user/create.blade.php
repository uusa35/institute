@extends('backend.layouts.app')

@section('content')
    <div class="col-lg-12">
        <div class="panel panel-info">
            <div class="panel-heading">Create New User</div>
            <div class="panel-body">
                {{ Form::open(['route' => 'backend.user.store','method' => 'post','class' => 'form-horizontal','files' => true ]) }}
                {{ csrf_field() }}
                <div class="form-group">

                    <div class="col-md-4">
                        <label for="first_name" class="control-label">First Name</label>
                        <input id="first_name" type="text" class="form-control" name="first_name"
                               placeholder="First Name"/>
                    </div>
                    <div class="col-md-4">
                        <label for="last_name" class="control-label">last name</label>
                        <input id="last_name" type="last_name" class="form-control" name="last_name"
                               placeholder="Last Name">
                    </div>
                    <div class="col-md-4">
                        <label for="membership_id" class="control-label">Membership ID</label>
                        <input id="membership_id" type="last_name" class="form-control" name="membership_id"
                               placeholder="membership Id">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6">
                        <label for="password" class="control-label">password</label>
                        <input id="password" type="password" class="form-control" name="password">

                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="col-md-6">
                        <label for="password-confirm" class="control-label">Password confirmation</label>
                        <input id="password-confirm" type="password" class="form-control"
                               name="password_confirmation">

                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-4">
                        <label for="avatar" class="control-label">Avatar *best fit (100*115)</label>
                        <input type="file" class="form-control"
                               name="avatar">
                    </div>
                    <div class="col-md-4">
                        <label for="email" class="control-label">email</label>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                    </div>
                    <div class="col-md-4">
                        <label for="video_link" class=" control-label">Video Link</label>
                        <input type="text" class="form-control"
                               name="video_link">
                    </div>


                </div>

                <div class="form-group">
                    <div class="col-md-1">
                        <label for="pdf" class="control-label">pdf</label>
                        <input type="file" class="form-control" name="pdf">
                    </div>
                    <div class="col-md-2">
                        <label for="graduation_year" class="control-label">graduation year</label>
                        <input type="text" class="form-control" name="graduation_year">
                    </div>
                    <div class="col-md-3">
                        <label for="mobile" class="ontrol-label">mobile</label>
                        <input type="text" class="form-control"
                               name="mobile">
                    </div>
                    <div class="col-md-3">
                        <label for="country" class="control-label">country</label>
                        {{ Form::select('country', $countries, 0, ['class' => 'form-control']) }}
                    </div>
                    <div class="col-md-3">
                        <label for="other_link" class="control-label">Other Link</label>
                        <input id="other_link" type="text" class="form-control" name="other_link">
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-lg-1">
                        <label for="type">User Active</label></br>
                        {{ Form::radio('active', 1 , true  , ['class' => 'form-input']) }} Yes</br>
                        {{ Form::radio('active', 0, false , ['class' => 'form-input']) }} No
                    </div>
                    <div class="col-lg-1">
                        <label for="type">featured User</label></br>
                        {{ Form::radio('featured',1, false , ['class' => '', 'required']) }} Yes</br>
                        {{ Form::radio('featured',0, true , ['class' => '', 'required']) }} No
                    </div>
                    <div class="col-lg-2">
                        <label for="type">IBH Certificate</label></br>
                        {{ Form::radio('ibh', 1 , false , ['class' => 'form-input']) }} Yes -
                        {{ Form::radio('ibh', 0, true , ['class' => 'form-input']) }} No
                    </div>
                    <div class="col-lg-2">
                        <label for="type">IBNLP Certificate</label></br>
                        {{ Form::radio('ibnlp', 1 , false , ['class' => 'form-input']) }} Yes -
                        {{ Form::radio('ibnlp', 0, true , ['class' => 'form-input']) }} No
                    </div>
                    <div class="col-lg-2">
                        <label for="type">User Type</label></br>
                        {{ Form::radio('type', 'trainer' , true , ['class' => 'form-input']) }} trainer </br>
                        {{ Form::radio('type', 'assistant', false , ['class' => 'form-input']) }} assistant </br>
                        {{ Form::radio('type', 'master', false , ['class' => 'form-input']) }} master
                    </div>
                    <div class="col-lg-2">
                        <label for="type">Gender</label></br>
                        {{ Form::radio('gender','male', true, ['class' => '', 'required']) }} male -
                        {{ Form::radio('gender','female',false, ['class' => '', 'required']) }} female
                    </div>

                    <div class="col-lg-2">
                        <label for="type">User Subscribed</label></br>
                        {{ Form::radio('subscribed',1, false , ['class' => '', 'required']) }} Yes -
                        {{ Form::radio('subscribed',0, true , ['class' => '', 'required']) }} No
                    </div>
                </div>

                <div class="form-group">

                    <div class="col-md-10 col-lg-push-1">
                        <label for="description_ar" class="control-label">Description ar</label>
                            <textarea id="description_ar" class="form-control"
                                      name="description_ar"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-10 col-lg-push-1">
                        <label for="description_en" class="control-label">Description en</label>
                            <textarea id="description_en" class="form-control"
                                      name="description_en"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-1">
                        <button type="submit" class="btn btn-primary">
                            Register
                        </button>
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
@endsection
