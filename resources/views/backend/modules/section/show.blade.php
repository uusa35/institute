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
                            <th>header ar</th>
                            <th>header en</th>
                            <th>page title</th>
                            <th>section tye</th>
                            <th>actions</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sections as $section)
                            <tr class="odd gradeX">
                                <td>{{ $section->id }}</td>
                                <td>{{ $section->header_ar }}</td>
                                <td>{{ $section->header_en }}</td>
                                <td>{{ $section->page->title }}</td>
                                <td>{{ $section->type }}</td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button"
                                                data-toggle="dropdown" aria-expanded="false"> Actions
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{ route('page.show',$section->page_id) }}">
                                                    <i class="fa fa-eye"></i> view page</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('backend.section.edit',$section->id) }}">
                                                    <i class="fa fa-edit"></i> edit section</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('backend.section.create',['page_id' => $section->page_id]) }}">
                                                    <i class="fa fa-edit"></i> add section</a>
                                            </li>
                                            <li>
                                                {{ Form::open(['route' => ['backend.page.destroy',$section->id],'method' => 'DELETE','class' => 'form-horizontal col-lg-12']) }}
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