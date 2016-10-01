@extends('backend.layouts.app')

@section('content')

    <div class="col-lg-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                create new post
            </div>
            <div class="panel-body">
                {{ Form::model($category,['route' => ['backend.category.update',$category->id], 'method'=>'PATCH','class' => 'form-horizontal','files' => true]) }}

                <div class="form-group">
                    <div class="col-sm-5">
                        <label for="title_ar" class="control-label">name_ar</label>
                        <input type="text" class="form-control" name="name_ar"
                               required="" value="{{ $category->name_ar }}">

                    </div>
                    <div class="col-sm-5">
                        <label for="title_en" class="control-label">name_en</label>
                        <input type="text" class="form-control" name="name_en"
                               required="" value="{{ $category->name_en }}">

                    </div>
                    <div class="col-sm-2">
                        <label for="menu" class="control-label">Type</label><br>
                        <input type="radio" name="menu" value="1" {{ ($category->menu) ? 'checked' : '' }}> Menu<br>
                        <input type="radio" name="menu" value="0" {{ (!$category->menu) ? 'checked' : '' }}> Category<br>

                    </div>
                </div>

                <!-- Button http://getbootstrap.com/css/#buttons -->
                <div class="form-group">
                    <div class="text-right col-sm-12">
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
