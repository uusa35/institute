@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover table-checkable order-column"
                           id="posts">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>name_ar</th>
                            <th>name_en</th>
                            <th>type</th>
                            <th>created_at</th>
                            <th>actions</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr class="odd gradeX">
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name_ar }}</td>
                                <td>{{ $category->name_en }}</td>
                                <td><label class="label label-sm {{ ($category->menu) ? 'label-success' : 'label-info'}}">{{ ($category->menu) ? 'menu' : 'category'}}</label></td>
                                <td>{{ $category->created_at->format('Y-m-d') }}</td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button"
                                                data-toggle="dropdown" aria-expanded="false"> Actions
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{ route('backend.category.edit',$category->id) }}">
                                                    <i class="fa fa-eye"></i> edit category</a>
                                            </li>
                                            <li>
                                                {{ Form::open(['route' => ['backend.category.destroy',$category->id],'method' => 'DELETE','class' => 'form-horizontal col-lg-12']) }}
                                                <button href="#" type="submit" class="btn btn-danger btn-xs btn-rounded">
                                                    <i class="fa fa-remove"></i> delete category</button>
                                                {{ Form::close() }}
                                            </li>

                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
@endsection