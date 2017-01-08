@extends('backend.layouts.app')

@section('content')
    <div class="col-lg-12">
        <div class="panel panel-info">
            <div class="panel-heading">Edit User</div>
            <div class="panel-body">
                {{ Form::model($user,['route' => ['backend.user.update',$user->id],'method' => 'patch','class' => 'form-horizontal','files' => true ]) }}
                {{ csrf_field() }}

                <div class="form-group">
                    <div class="col-md-3">
                        <label for="first_name" class="control-label">First Name</label>
                        <input id="first_name" type="text" class="form-control" name="first_name"
                               placeholder="First Name" value="{{ $user->first_name }}"/>
                    </div>
                    <div class="col-md-3">
                        <label for="last_name" class="control-label">last name</label>
                        <input id="last_name" type="last_name" class="form-control" name="last_name"
                               placeholder="Last Name" value="{{ $user->last_name }}">
                    </div>
                    <div class="col-md-3">
                        <label for="ibh_membership_id" class="control-label">IBH Membership ID</label>
                        <input id="ibh_membership_id" type="last_name" class="form-control" name="ibh_membership_id"
                               placeholder="membership Id" value="{{ $user->ibh_membership_id }}">
                    </div>
                    <div class="col-md-3">
                        <label for="ibnlp_membership_id" class="control-label">IBNLP Membership ID</label>
                        <input id="ibnlp_membership_id" type="last_name" class="form-control" name="ibnlp_membership_id"
                               placeholder="membership Id" value="{{ $user->ibnlp_membership_id }}">
                    </div>
                </div>


                {{--<div class="form-group">--}}
                {{--<div class="col-md-6">--}}
                {{--<label for="password" class="control-label">password</label>--}}
                {{--<input id="password" type="password" class="form-control" name="password">--}}

                {{--@if ($errors->has('password'))--}}
                {{--<span class="help-block">--}}
                {{--<strong>{{ $errors->first('password') }}</strong>--}}
                {{--</span>--}}
                {{--@endif--}}
                {{--</div>--}}
                {{--<div class="col-md-6">--}}
                {{--<label for="password-confirm" class="control-label">Password confirmation</label>--}}
                {{--<input id="password-confirm" type="password" class="form-control"--}}
                {{--name="password_confirmation">--}}

                {{--@if ($errors->has('password_confirmation'))--}}
                {{--<span class="help-block">--}}
                {{--<strong>{{ $errors->first('password_confirmation') }}</strong>--}}
                {{--</span>--}}
                {{--@endif--}}
                {{--</div>--}}
                {{--</div>--}}

                <div class="form-group">
                    <div class="col-md-3">
                        <label for="email" class="control-label">email</label>
                        <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}">
                    </div>
                    <div class="col-md-2">
                        <label for="avatar" class="control-label">Avatar</label>
                        <input type="file" class="form-control" id="avatar"
                               name="avatar">
                    </div>
                    <div class="col-md-2">
                        <label for="pdf" class="control-label">pdf</label>
                        <input type="file" class="form-control" name="pdf">
                    </div>
                    <div class="col-md-2">
                        <label for="video_link" class="control-label">Video Link</label>
                        <input type="text" class="form-control"
                               name="video_link" value="{{ $user->video_link }}">
                    </div>
                    <div class="col-md-2">
                        <label for="mobile" class="control-label">mobile</label>
                        <input type="text" class="form-control"
                               name="mobile" value="{{ $user->mobile }}">
                    </div>
                    <div class="col-md-2">
                        <label for="other_link" class="control-label">Other Link</label>
                        <input id="other_link" type="text" class="form-control" name="other_link">

                    </div>
                    <div class="col-md-2">
                        <label for="country" class="control-label">country</label>
                        {{ Form::select('country', $countries, $user->country, ['class' => 'form-control']) }}
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-1">
                        <label for="type">User Active</label></br>
                        {{ Form::radio('active', 1 , $user->active  , ['class' => 'form-input']) }} Yes</br>
                        {{ Form::radio('active', 0, $user->active , ['class' => 'form-input']) }} No
                    </div>
                    <div class="col-lg-1">
                        <label for="type">featured User</label></br>
                        {{ Form::radio('featured',1, $user->featured , ['class' => '', 'required']) }} Yes</br>
                        {{ Form::radio('featured',0, $user->featured , ['class' => '', 'required']) }} No
                    </div>
                    <div class="col-lg-2">
                        <label for="type">IBH Certificate</label></br>
                        {{ Form::radio('ibh', 1 , $user->ibh  , ['class' => 'form-input']) }} Yes -
                        {{ Form::radio('ibh', 0, $user->ibh , ['class' => 'form-input']) }} No
                    </div>
                    <div class="col-lg-2">
                        <label for="type">IBNLP Certificate</label></br>
                        {{ Form::radio('ibnlp', 1 , $user->ibnlp  , ['class' => 'form-input']) }} Yes -
                        {{ Form::radio('ibnlp', 0, $user->ibnlp , ['class' => 'form-input']) }} No
                    </div>
                    <div class="col-lg-2">
                        <label for="type">User Type</label></br>
                        {{ Form::radio('type', 'trainer' , $user->ibnlp === 'trainer' ? true : false, ['class' => 'form-input']) }}
                        trainer </br>
                        {{ Form::radio('type', 'assistant', $user->ibnlp === 'assistant' ? true : false, ['class' => 'form-input']) }}
                        assistant </br>
                        {{ Form::radio('type', 'master', $user->ibnlp === 'master' ? true : false, ['class' => 'form-input']) }}
                        master
                    </div>
                    <div class="col-lg-2">
                        <label for="type">Gender</label></br>
                        {{ Form::radio('gender','male', $user->gender == 'male' ? true : false, ['class' => '', 'required']) }}
                        male -
                        {{ Form::radio('gender','female',$user->gender  == 'female' ? true : false, ['class' => '', 'required']) }}
                        female
                    </div>

                    <div class="col-lg-2">
                        <label for="type">User Subscribed</label></br>
                        {{ Form::radio('subscribed',1, $user->subscribed , ['class' => '', 'required']) }} Yes -
                        {{ Form::radio('subscribed',0, $user->subscribed , ['class' => '', 'required']) }} No
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        <label for="description_ar" class="control-label">Description ar</label>
                            <textarea id="description_ar" class="form-control"
                                      name="description_ar">{{ $user->description_ar }}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="description_en" class=" control-label">Description en</label>
                            <textarea id="description_en" class="form-control"
                                      name="description_en">{{ $user->description_en }}</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            save
                        </button>
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
@endsection
