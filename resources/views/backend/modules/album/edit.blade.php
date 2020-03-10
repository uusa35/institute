@extends('backend.layouts.app')

@section('content')

    <div class="col-lg-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                edit album
            </div>
            <div class="panel-body">
                <div class="row">
                    @foreach($album->gallery->first()->images as $image)
                        <div class="col-lg-1">
                            {{ Form::open(['route' => ['backend.image.destroy',$image->id],'method'=> 'DELETE']) }}
                            <button type="submit" class="btn btn-xs btn-danger"><i class="fa fa-remove"></i></button>
                            {{ Form::close() }}
                            {{ Form::open(['route' => ['backend.image.update',$image->id],'method'=> 'PATCH']) }}
                            <button type="submit" class="btn btn-xs btn-primary"><i class="fa fa-image"></i> make cover</button>
                            {{ Form::close() }}
                            <img src="{{ asset('storage/'.$image->image_url) }}" alt="" class="img-responsive">

                        </div>
                    @endforeach
                </div>
                {{ Form::model($album,['route' => ['backend.album.update',$album->id], 'method'=>'PATCH','class' => 'form-horizontal','files' => true]) }}
                        <!-- Text input http://getbootstrap.com/css/#forms -->

                <!-- File Button http://getbootstrap.com/css/#forms -->
                <div class="form-group">
                    <div class="col-sm-6">
                        <label for="gallery" class="control-label">gallery</label>
                        <label for="gallery" class="control-label">Image Should be 500 X 500 (Size Not to exceed 100KB)</label>
                        <input type="file" name="gallery[]" multiple>

                    </div>
                </div>

                <!-- Textarea http://getbootstrap.com/css/#textarea -->
                <div class="form-group">
                    <div class="col-sm-12">
                        <label class="control-label" for="description_ar">description_ar</label>
                            <textarea class="form-control" name="description_ar" id="description_ar" rows="6"
                                      required="">{{ $album->description_ar }}</textarea>

                    </div>
                </div>

                <!-- Textarea http://getbootstrap.com/css/#textarea -->
                <div class="form-group">
                    <div class="col-sm-12">
                        <label class="control-label" for="description_en">description_en</label>
                            <textarea class="form-control" name="description_en" rows="6"
                                      required="">{{ $album->description_en }}</textarea>

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
