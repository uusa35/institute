

@extends('backend.layouts.app')

@section('content')

    <div class="col-lg-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                create new post
            </div>
            <div class="panel-body">
                {{ Form::model($section,['route' => ['backend.section.update',$section->id], 'method'=>'PATCH','class' => 'form-horizontal','files' => true]) }}
                        <!-- Text input http://getbootstrap.com/css/#forms -->
                        <!-- Textarea http://getbootstrap.com/css/#textarea -->
                <!-- Textarea http://getbootstrap.com/css/#textarea -->
                {{ Form::hidden('page_id',$section->page_id) }}
                <div class="form-group">
                    <div class="col-sm-6">
                        <label class="control-label" for="header_en">header engish</label>
                            <input type="text" class="form-control" name="header_en"
                                      required="" value="{{ $section->header_en }}">
                    </div>
                    <div class="col-sm-6">
                        <label class="control-label" for="header_ar">header_ar</label>
                            <input type="text" class="form-control" name="header_ar"
                                      required="" value="{{ $section->header_ar }}">
                    </div>
                </div>

                <!-- File Button http://getbootstrap.com/css/#forms -->
                <div class="form-group">
                    <div class="col-sm-6">
                        <label for="image" class="control-label"> image</label>
                        <input type="file" name="image" name="image" >
                    </div>
                </div>


                <!-- Textarea http://getbootstrap.com/css/#textarea -->
                <div class="form-group">
                    <div class="col-sm-12">
                        <label class="control-label" for="content_ar">content_ar</label>
                            <textarea class="form-control" name="content_ar" id="content_ar" rows="6"
                                      required="">{{ $section->content_ar }}</textarea>

                    </div>
                </div>

                <!-- Textarea http://getbootstrap.com/css/#textarea -->
                <div class="form-group">
                    <div class="col-sm-12">
                        <label class="control-label" for="content_en">content_en</label>
                            <textarea class="form-control" name="content_en" rows="6"
                                      required="">{{ $section->content_en }}</textarea>

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