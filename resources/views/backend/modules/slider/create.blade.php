@extends('backend.layouts.app');

@section('content')
    <div class="col-lg-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                create new slider
            </div>
            <div class="panel-body">
                {!! Form::open(['route' => 'backend.slider.store','method'=>'post', 'class' => 'form-horizontal','files' => true]) !!}
                <div class="form-group">
                    <div class="col-lg-5">
                        <label for="caption_ar">caption arabic</label>
                        {{ Form::text('caption_ar',old('caption_ar'),['class' => 'form-control', 'placeholder' => 'caption arabic', 'required']) }}
                    </div>
                    <div class="col-lg-5">
                        <label for="caption_en">caption english</label>
                        {{ Form::text('caption_en',old('caption_en'),['class' => 'form-control', 'placeholder' => 'caption english','required']) }}
                    </div>
                    <div class="col-lg-2">
                        <label for="type">Slide Type</label>
                        <span></br>
                        {{ Form::radio('type','image',['class' => 'form-control', 'required']) }} Image
                        </span></br>
                        <span>
                            {{ Form::radio('type','video',['class' => 'form-control', 'required']) }} Video
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-6">
                        <label for="image">image</label>
                        {!! Form::file('image',['class' => 'form-control']) !!}
                    </div>
                    <div class="col-lg-6">
                        <label for="url">Video URL
                            <small>Direct Youtube Video URL</small>
                        </label>
                        {!! Form::text('url',old('url'),['class' => 'form-control', 'placeholder' => 'youtube url']) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::submit('submit',['class' => 'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection