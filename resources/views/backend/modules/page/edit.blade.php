@extends('backend.layouts.app')

@section('content')

    <div class="col-lg-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                create new post
            </div>
            <div class="panel-body">
                {{ Form::model($page,['route' => ['backend.page.update',$page->id], 'method'=>'PATCH','class' => 'form-horizontal','files' => true]) }}
                        <!-- Text input http://getbootstrap.com/css/#forms -->
                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="title_ar" class="control-label">title_ar</label>
                        <input type="text" class="form-control" name="title_ar"
                               required="" value="{{ $page->title_ar }}">

                    </div>
                    <div class="col-sm-4">
                        <label for="title_en" class="control-label">title_en</label>
                        <input type="text" class="form-control" name="title_en"
                               required="" value="{{ $page->title_en }}">

                    </div>
                    <div class="col-sm-2">
                        <label for="category" class="control-label">category</label>
                        {{ Form::select('category_id', $categories, 0, ['class' => 'form-control']) }}
                    </div>
                    <div class="col-sm-2">
                        <label for="order" class="control-label">order</label>
                        {{ Form::select('order', range(0,10), 0, ['class' => 'form-control']) }}
                    </div>
                    <div class="col-lg-2">
                        <img src="{{ asset('storage/'.$page->image) }}" alt="" class="img-responsive">
                    </div>
                </div>

                <!-- File Button http://getbootstrap.com/css/#forms -->
                <div class="form-group">
                    <div class="col-sm-6">
                        <label for="image" class="control-label">first image</label>
                        <input type="file" name="image" name="image" >
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
