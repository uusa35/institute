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
                            <th>title_ar</th>
                            <th>title_en</th>
                            <th>actions</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                            <tr class="odd gradeX">
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title_ar }}</td>
                                <td>{{ $post->title_en }}</td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button"
                                                data-toggle="dropdown" aria-expanded="false"> Actions
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{ route('post.show',$post->id) }}">
                                                    <i class="fa fa-eye"></i> view post</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('backend.post.edit',$post->id) }}">
                                                    <i class="fa fa-edit"></i> edit </a>
                                            </li>
                                            <li>
                                                {{ Form::open(['route' => ['backend.post.destroy',$post->id],'method' => 'DELETE','class' => 'form-horizontal col-lg-12']) }}
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