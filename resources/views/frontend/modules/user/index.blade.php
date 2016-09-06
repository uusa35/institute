@extends('frontend.layouts.app')

@section('content')
    <div class="col-lg-12">
        @foreach($users as $user)
            <div class="col-lg-3">
                <div class="span2">
                    <img src="{{ asset($user->avatar) }}" alt="{{ $user->first_name }}"
                         class="img-responsive">
                </div>
                <div class="span4">
                    <blockquote>
                        <p>{{ $user->name }}</p>
                        <small><cite title="Source Title">{{ $user->address }}<i class="icon-map-marker"></i></cite>
                        </small>
                    </blockquote>
                    <p>
                        <i class="glyphicon glyphicon-inbox"></i> {{ $user->email }}<br>
                        <i class="glyphicon glyphicon-phone"></i> {{ $user->mobile }} <br>
                        <i class="glyphicon glyphicon-calendar"></i> {{ trans('general.member_since') }} : {{ $user->created_at->diffForHumans() }}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
    <div class="row">
        <div class="col-lg-6 col-lg-push-3 text-center">
            {{ $users->links() }}
        </div>
    </div>
@endsection