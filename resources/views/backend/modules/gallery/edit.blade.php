@extends('backend.layouts.app')

@section('content')

    <div class="col-lg-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                create new post
            </div>
            <div class="panel-body">
                {{ Form::model($gallery,['route' => ['backend.gallery.update',$gallery->id], 'method'=>'PATCH','class' => 'form-horizontal','files' => true]) }}
                        <!-- Text input http://getbootstrap.com/css/#forms -->

                <!-- File Button http://getbootstrap.com/css/#forms -->
                <div class="form-group">
                    <div class="col-sm-6">
                        <label for="gallery" class="control-label">gallery</label>
                        <input type="file" name="gallery[]" multiple >

                    </div>
                </div>

                <!-- Textarea http://getbootstrap.com/css/#textarea -->
                <div class="form-group">
                    <div class="col-sm-12">
                        <label class="control-label" for="description_ar">description_ar</label>
                            <textarea class="form-control" name="description_ar" id="description_ar" rows="6"
                                      required="">{{ $gallery->description_ar }}</textarea>

                    </div>
                </div>

                <!-- Textarea http://getbootstrap.com/css/#textarea -->
                <div class="form-group">
                    <div class="col-sm-12">
                        <label class="control-label" for="description_en">description_en</label>
                            <textarea class="form-control" name="description_en" rows="6"
                                      required="">{{ $gallery->description_en }}</textarea>

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
