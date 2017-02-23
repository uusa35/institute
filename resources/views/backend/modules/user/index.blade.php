@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover table-checkable order-column"
                           id="users">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>first_name</th>
                            <th>last_name</th>
                            <th>email</th>
                            <th>mobile</th>
                            <th>active</th>
                            <th>subscribed</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr class="odd gradeX">
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->first_name }}</td>
                                <td>{{ $user->last_name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->mobile }}</td>
                                <td>
                                    <label class="label label-sm {{ $user->active ? 'label-success' : 'label-danger' }}">active</label>
                                </td>
                                <td>
                                    <label class="label label-sm {{ $user->subscribed ? 'label-success' : 'label-danger' }}">subscribed</label>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button"
                                                data-toggle="dropdown" aria-expanded="false"> Actions
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{ route('backend.user.edit',$user->id) }}">
                                                    <i class="fa fa-edit"></i> edit </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('backend.user.reset',$user->id) }}">
                                                    <i class="fa fa-edit"></i> reset password</a>
                                            </li>
                                            <li>
                                                {{ Form::open(['route' => ['backend.user.destroy',$user->id],'method' => 'delete']) }}
                                                <button type="submit">
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