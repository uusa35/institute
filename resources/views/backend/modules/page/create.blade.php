@extends('backend.layouts.app')

@section('content')

    <div class="col-lg-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                create new page
            </div>
            <div class="panel-body">
                {{ Form::open(['route' => 'backend.page.store', 'method' => 'post','class' => 'form-horizontal','files' => true]) }}
                        <!-- Text input http://getbootstrap.com/css/#forms -->
                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="title_ar" class="control-label">title_ar</label>
                        <input type="text" class="form-control" name="title_ar" placeholder="title arabic"
                               required="">

                    </div>
                    <div class="col-sm-4">
                        <label for="title_en" class="control-label">title_en</label>
                        <input type="text" class="form-control" name="title_en" placeholder="title english"
                               required="">

                    </div>
                    <div class="col-sm-2">
                        <label for="category" class="control-label">category</label>
                        {{ Form::select('category_id', $categories, 0, ['class' => 'form-control']) }}
                    </div>
                    <div class="col-sm-2">
                        <label for="order" class="control-label">order</label>
                        {{ Form::select('order', range(0,10), 0, ['class' => 'form-control']) }}
                    </div>
                </div>

                <!-- File Button http://getbootstrap.com/css/#forms -->
                <div class="form-group">
                    <div class="col-sm-6">
                        <label for="image" class="control-label">first image</label>
                        <input type="file" name="image" name="image" required="">
                    </div>
                    <div class="col-sm-6">
                        <label for="gallery" class="control-label">gallery</label>
                        <input type="file" name="gallery[]" multiple >

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
