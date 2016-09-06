@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover table-checkable order-column"
                           id="pages">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>title_ar</th>
                            <th>title_en</th>
                            <th>Menu Category Item</th>
                            <th>actions</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($pages as $page)
                            <tr class="odd gradeX">
                                <td>{{ $page->id }}</td>
                                <td>{{ $page->title_ar }}</td>
                                <td>{{ $page->title_en }}</td>
                                <td>{{ $page->categoryName }}</td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button"
                                                data-toggle="dropdown" aria-expanded="false"> Actions
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{ route('page.show',$page->id) }}">
                                                    <i class="fa fa-eye"></i> view page</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('backend.page.edit',$page->id) }}">
                                                    <i class="fa fa-edit"></i> edit page</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('backend.section.create',['page_id' => $page->id]) }}">
                                                    <i class="fa fa-edit"></i> add section</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('backend.section.show',['id' => '0' ,'page_id' => $page->id]) }}">
                                                    <i class="fa fa-edit"></i> view sections</a>
                                            </li>
                                            <li>
                                                {{ Form::open(['route' => ['backend.page.destroy',$page->id],'method' => 'DELETE','class' => 'form-horizontal col-lg-12']) }}
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