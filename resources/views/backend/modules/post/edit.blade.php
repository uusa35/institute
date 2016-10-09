@extends('backend.layouts.app')

@section('content')

    <div class="col-lg-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                edit post
            </div>
            <div class="panel-body">
                {{ Form::model($post,['route' => ['backend.post.update',$post->id], 'method'=>'PATCH','class' => 'form-horizontal','files' => true]) }}
                        <!-- Text input http://getbootstrap.com/css/#forms -->
                {{ Form::hidden('user_id',Auth::id()) }}
                <div class="form-group">
                    <div class="col-sm-5">
                        <label for="title_ar" class="control-label">title_ar</label>
                        <input type="text" class="form-control" name="title_ar"
                               required="" value="{{ $post->title_ar }}">

                    </div>
                    <div class="col-sm-5">
                        <label for="title_en" class="control-label">title_en</label>
                        <input type="text" class="form-control" name="title_en"
                               required="" value="{{ $post->title_en }}">

                    </div>
                    <div class="col-lg-2">
                        <img src="{{ asset('storage/'.$post->image) }}" alt="" class="img-responsive">
                    </div>
                </div>

                <!-- File Button http://getbootstrap.com/css/#forms -->
                <div class="form-group">
                    <div class="col-sm-6">
                        <label for="image" class="control-label">first image <small>best fit 1150px*310px</small></label>
                        <input type="file" name="image" name="image" >
                    </div>
                    <div class="col-sm-6">
                        <label for="gallery" class="control-label">gallery</label>
                        <input type="file" name="gallery[]" multiple >

                    </div>
                </div>

                <!-- Textarea http://getbootstrap.com/css/#textarea -->
                <div class="form-group">
                    <div class="col-sm-12">
                        <label class="control-label" for="body_ar">body_ar</label>
                            <textarea class="form-control" name="body_ar" id="body_ar" rows="6"
                                      required="">{{ $post->body_ar }}</textarea>

                    </div>
                </div>

                <!-- Textarea http://getbootstrap.com/css/#textarea -->
                <div class="form-group">
                    <div class="col-sm-12">
                        <label class="control-label" for="body_en">body_en</label>
                            <textarea class="form-control" name="body_en" rows="6"
                                      required="">{{ $post->body_en }}</textarea>

                    </div>
                </div>
                <!-- Button http://getbootstrap.com/css/#buttons -->
                <div class="form-group">
                    <div class="text-right col-sm-10">
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
