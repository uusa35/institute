@extends('backend.layouts.app')

@section('content')
    <div class="col-lg-12">
        <div class="panel panel-info">
            <div class="panel-heading">Edit User</div>
            <div class="panel-body">
                {{ Form::model($user,['route' => ['backend.user.update',$user->id],'method' => 'patch','class' => 'form-horizontal','files' => true ]) }}
                {{ csrf_field() }}

                <div class="form-group">
                    <div class="col-md-6">
                        <label for="first_name" class="control-label">First Name</label>
                        <input id="first_name" type="text" class="form-control" name="first_name" placeholder="First Name" value="{{ $user->first_name }}"/>
                    </div>
                    <div class="col-md-6">
                        <label for="last_name" class="control-label">last name</label>
                        <input id="last_name" type="last_name" class="form-control" name="last_name" placeholder="Last Name" value="{{ $user->last_name }}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <label for="avatar" class="control-label">Avatar</label>
                        <input type="file" class="form-control" id="avatar"
                               name="avatar">
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="control-label">email</label>
                        <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6">
                        <label for="video_link" class="control-label">Video Link</label>
                        <input type="text" class="form-control"
                               name="video_link" value="{{ $user->video_link }}">
                    </div>
                    <div class="col-md-6">
                        <label for="pdf" class="control-label">pdf</label>
                        <input type="file" class="form-control" name="pdf">

                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6">
                        <label for="mobile" class="control-label">mobile</label>
                        <input type="text" class="form-control"
                               name="mobile" value="{{ $user->mobile }}">
                    </div>
                    <div class="col-md-6">
                        <label for="other_link" class="control-label">Other Link</label>
                        <input id="other_link" type="text" class="form-control" name="other_link">

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
