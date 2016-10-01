@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover table-checkable order-column"
                           id="albums">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>description_ar</th>
                            <th>description_en</th>
                            <th>actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($albums as $album)
                            <tr class="odd gradeX">
                                <td>{{ $album->id }}</td>
                                <td>{{ $album->description_ar }}</td>
                                <td>{{ $album->description_en }}</td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button"
                                                data-toggle="dropdown" aria-expanded="false"> Actions
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{ route('backend.album.edit',$album->id) }}">
                                                    <i class="fa fa-edit"></i> edit album</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('album.show',$album->id) }}">
                                                    <i class="fa fa-edit"></i> view album</a>
                                            </li>
                                            <li>
                                                {{ Form::open(['route' => ['backend.album.destroy',$album->id],'method' => 'DELETE','class' => 'form-horizontal col-lg-12']) }}
                                                <button href="#" type="submit" class="btn btn-danger btn-xs btn-rounded">
                                                    <i class="fa fa-remove"></i> delete </button>
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