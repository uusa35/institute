@extends('backend.layouts.app');

@section('content')
    <div class="col-lg-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                create new slider
            </div>
            <div class="panel-body">
                {!! Form::model($slider,['route' => ['backend.slider.update',$slider->id],'method'=>'PATCH', 'class' => 'form-horizontal','files' => true]) !!}
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
                        <label for="type">type</label></br>
                        <input type="radio" name="type" value="image" {{ ($slider->type == 'image') ? 'checked' : '' }}> Image<br>
                        <input type="radio" name="type" value="video" {{ ($slider->type == 'video') ? 'checked' : '' }}> Video<br>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-6">
                        <label for="image">image <small>best fit 1350px*423px</small></label>
                        {!! Form::file('image',['class' => 'form-control']) !!}
                    </div>
                    <div class="col-lg-6">
                        <label for="url">Video ID
                            <small>Direct Youtube Video ID</small>
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