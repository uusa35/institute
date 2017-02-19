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
                        @foreach($subscribers as $subscriber)
                            <tr class="odd gradeX">
                                <td>{{ $subscriber->id }}</td>
                                <td>{{ $subscriber->name }}</td>
                                <td>{{ $subscriber->email }}</td>
                                <td><label class="label label-sm {{ ($subscriber->active) ? 'label-success' : 'label-danger'}}">{{ ($subscriber->active) ? 'active' : 'active'}}</label></td>
                                <td>{{ $subscriber->created_at->format('Y-m-d') }}</td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button"
                                                data-toggle="dropdown" aria-expanded="false"> Actions
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{ route('backend.newsletter.edit',$subscriber->id) }}">
                                                    <i class="fa fa-eye"></i> edit subscirber</a>
                                            </li>
                                            <li>
                                                {{ Form::open(['route' => ['backend.newsletter.destroy',$subscriber->id],'method' => 'DELETE','class' => 'form-horizontal col-lg-12']) }}
                                                <button href="#" type="submit" class="btn btn-danger btn-xs btn-rounded">
                                                    <i class="fa fa-remove"></i> delete subscriber</button>
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