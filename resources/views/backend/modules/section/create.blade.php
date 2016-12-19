@extends('backend.layouts.app')

@section('content')

    <div class="col-lg-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                create new section
            </div>
            <div class="panel-body">
                {{ Form::open(['route' => ['backend.section.store'], 'method'=>'post','class' => 'form-horizontal','files' => true]) }}
                {{ Form::hidden('page_id',$page_id) }}
                <div class="form-group">
                    <div class="col-sm-6">
                        <label class="control-label" for="header_en">header english</label>
                        <input type="text" class="form-control" name="header_en"
                               required="">
                    </div>
                    <div class="col-sm-6">
                        <label class="control-label" for="header_ar">header_ar</label>
                        <input type="text" class="form-control" name="header_ar"
                               required="">
                    </div>
                </div>

                <!-- File Button http://getbootstrap.com/css/#forms -->
                <div class="form-group">
                    <div class="col-sm-6">
                        <label for="image" class="control-label"> image</label>
                        <input type="file" name="image" name="image">
                    </div>

                    <div class="col-md-3" id="pdfEelement" style="display: none;">
                        <label for="pdf" class="control-label">pdf</label>
                        <input type="file" class="form-control" name="pdf">
                    </div>

                    <div class="col-lg-3">
                        <label for="type">Section Type</label>
                        <span></br>
                            {{ Form::radio('type','a',false, ['class' => 'sections', 'required']) }} section A
                        </span></br>
                        <span>
                            {{ Form::radio('type','b', false, ['class' => '', 'required' , 'id' => 'sectionB']) }}
                            section B
                        </span></br>
                        <span>
                            {{ Form::radio('type','c', false,['class' => 'sections', 'required']) }} section C
                        </span>
                    </div>
                </div>


                <!-- Textarea http://getbootstrap.com/css/#textarea -->
                <div class="form-group">
                    <div class="col-sm-12">
                        <label class="control-label" for="content_ar">content_ar</label>
                        <textarea class="form-control" name="content_ar" id="content_ar" rows="6"></textarea>

                    </div>
                </div>

                <!-- Textarea http://getbootstrap.com/css/#textarea -->
                <div class="form-group">
                    <div class="col-sm-12">
                        <label class="control-label" for="content_en">content_en</label>
                        <textarea class="form-control" name="content_en" rows="6"></textarea>

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