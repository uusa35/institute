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
                        {{ Form::select('category_id', $categories, $page->category_id, ['class' => 'form-control']) }}
                    </div>
                    {{--<div class="col-sm-2">--}}
                    {{--<label for="order" class="control-label">order</label>--}}
                    {{ Form::hidden('order', 0) }}
                    {{--</div>--}}
                    <div class="col-lg-2">
                        <img src="{{ File::exists('storage/'.$page->image) ? asset('storage/'.$page->image) : 'http://placehold.it/100x100&test=no-image'}}"
                             alt="" class="img-responsive">
                    </div>
                </div>

                <!-- File Button http://getbootstrap.com/css/#forms -->
                <div class="form-group">
                    <div class="col-sm-6">
                        <label for="image" class="control-label">first image
                            <small>best fit 1150px*310px</small>
                        </label>
                        <input type="file" name="image" name="image">
                    </div>
                    <div class="col-sm-6">
                        <label for="gallery" class="control-label">gallery</label>
                        <input type="file" name="gallery[]" multiple>

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
                @if(!is_null($page->gallery->first()))
                    <div class="col-lg-12">
                        @foreach($page->gallery->first()->images as $image)
                            <div class="col-lg-2">
                                {{ Form::open(['route' => ['backend.image.destroy',$image->id],'method'=> 'DELETE']) }}
                                <button type="submit" class="btn btn-xs btn-danger"><i class="fa fa-remove"></i>
                                </button>
                                {{ Form::close() }}
                                <img src="{{ asset('storage/'.$image->image_url) }}" alt="" class="img-responsive">
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
