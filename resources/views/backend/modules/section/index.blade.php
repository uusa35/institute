@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover table-checkable order-column"
                           id="sections">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>title_ar</th>
                            <th>title_en</th>
                            <th>page Id</th>
                            <th>actions</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sections as $section)
                            <tr class="odd gradeX">
                                <td>{{ $section->id }}</td>
                                <td>{{ $section->header_ar }}</td>
                                <td>{{ $section->header_en }}</td>
                                <td>{{ $section->page_id }}</td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button"
                                                data-toggle="dropdown" aria-expanded="false"> Actions
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{ route('backend.section.edit',$section->id) }}">
                                                    <i class="fa fa-edit"></i> edit section</a>
                                            </li>
                                            <li>
                                                {{ Form::open(['route' => ['backend.section.destroy',$section->id],'method' => 'DELETE','class' => 'form-horizontal col-lg-12']) }}
                                                <button href="#" type="submit"
                                                        class="btn btn-danger btn-xs btn-rounded">
                                                    <i class="fa fa-remove"></i> delete
                                                </button>
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