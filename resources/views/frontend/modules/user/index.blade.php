@extends('frontend.layouts.app')

@section('content')
    <div class="col-lg-10 col-lg-push-1">
        <h1>{{ trans('general.users') }}</h1>
        <hr>
        @if($users->count() > 0)
            @foreach($users as $user)
                <div class="col-lg-3">
                    <div class="span2">
                        <img src="{{ File::exists('storage/'.$user->avatar) ? asset($user->avatar) : asset('images/profile.png') }}" alt="{{ $user->first_name }}"
                             class="img-responsive">
                    </div>
                    <div class="span4">
                        <blockquote>
                            <p><a href="{{ route('user.show',$user->id) }}" class="">{{ $user->name }}</a></p>
                            <small><cite title="Source Title">{{ $user->address }}<i class="icon-map-marker"></i></cite>
                            </small>
                        </blockquote>
                        <p>
                            <i class="glyphicon glyphicon-inbox"></i> {{ $user->email }}<br>
                            <i class="glyphicon glyphicon-phone"></i> {{ $user->mobile }} <br>
                            <i class="glyphicon glyphicon-calendar"></i> {{ trans('general.member_since') }}
                            : {{ $user->created_at->diffForHumans() }}
                        </p>
                    </div>
                </div>
            @endforeach
        @else
            <div class="alert alert-danger">{{ trans('general.no_users') }}</div>
        @endif
    </div>
    <div class="row">
        <div class="col-lg-6 col-lg-push-3 text-center">
            {{ $users->links() }}
        </div>
    </div>
@endsection