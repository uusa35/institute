@extends('backend.layouts.app')

@section('content')

    <div class="col-lg-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                create new page
            </div>
            <div class="panel-body">
                {{ Form::open(['route' => 'backend.category.store', 'method' => 'post','class' => 'form-horizontal','files' => true]) }}
                        <!-- Text input http://getbootstrap.com/css/#forms -->
                <div class="form-group">
                    <div class="col-sm-5">
                        <label for="name_ar" class="control-label">name_ar</label>
                        <input type="text" class="form-control" name="name_ar" placeholder="title arabic"
                               required="">

                    </div>
                    <div class="col-sm-5">
                        <label for="name_en" class="control-label">name_en</label>
                        <input type="text" class="form-control" name="name_en" placeholder="title english"
                               required="">

                    </div>
                    <div class="col-sm-2">
                        <label for="menu" class="control-label">Type</label><br>
                        <input type="radio" name="menu" value="1" > Menu<br>
                        <input type="radio" name="menu" value="0" > Category<br>

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
