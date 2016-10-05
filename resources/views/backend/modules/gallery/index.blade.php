@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover table-checkable order-column"
                           id="galleries">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>description_ar</th>
                            <th>description_en</th>
                            <th>Type</th>
                            <th>Type id</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($galleries as $gallery)
                            <tr class="odd gradeX">
                                <td>{{ $gallery->id }}</td>
                                <td>{{ $gallery->description_ar }}</td>
                                <td>{{ $gallery->description_en }}</td>
                                <td>{{ str_replace('App\Models','',$gallery->galleryable_type) }}</td>
                                <td>{{ $gallery->galleryable_id }}</td>
                                {{--<td>--}}
                                    {{--<div class="btn-group">--}}
                                        {{--<button class="btn btn-xs green dropdown-toggle" type="button"--}}
                                                {{--data-toggle="dropdown" aria-expanded="false"> Actions--}}
                                            {{--<i class="fa fa-angle-down"></i>--}}
                                        {{--</button>--}}
                                        {{--<ul class="dropdown-menu" role="menu">--}}
                                            {{--<li>--}}
                                                {{--<a href="{{ route('backend.page.edit',$gallery->id) }}">--}}
                                                    {{--<i class="fa fa-edit"></i> edit page</a>--}}
                                            {{--</li>--}}
                                            {{--<li>--}}
                                                {{--<a href="{{ route('backend.section.create',['page_id' => $gallery->id]) }}">--}}
                                                    {{--<i class="fa fa-edit"></i> add section</a>--}}
                                            {{--</li>--}}
                                            {{--<li>--}}
                                                {{--<a href="{{ route('backend.section.show',['id' => '0' ,'page_id' => $gallery->id]) }}">--}}
                                                    {{--<i class="fa fa-edit"></i> view sections</a>--}}
                                            {{--</li>--}}
                                            {{--<li>--}}
                                                {{--{{ Form::open(['route' => ['backend.page.destroy',$gallery->id],'method' => 'DELETE','class' => 'form-horizontal col-lg-12']) }}--}}
                                                {{--<button href="#" type="submit" class="btn btn-danger btn-xs btn-rounded">--}}
                                                    {{--<i class="fa fa-remove"></i> delete </button>--}}
                                                {{--{{ Form::close() }}--}}
                                            {{--</li>--}}

                                        {{--</ul>--}}
                                    {{--</div>--}}
                                {{--</td>--}}
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