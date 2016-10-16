@if($users->count() > 0)
    @foreach($users as $user)
        <div class="col-lg-3" style="height : 415px;">
            <div class="col-lg-10 col-lg-push-1 text-center">
                <img src="{{ File::exists('storage/'.$user->avatar) ? asset('storage/'.$user->avatar) : asset('images/profile.png') }}"
                     alt="{{ $user->first_name }}"
                     class="img-responsive">
            </div>
            <div class="col-lg-10 col-lg-push-1">
                <blockquote>
                    <a href="{{ route('user.show',$user->id) }}" class="">
                        <small>{{ $user->name }}</small>
                    </a>
                    {{--<small><cite title="Source Title">{{ $user->address }}<i class="icon-map-marker"></i></cite>--}}
                    </small>
                </blockquote>
                <p>
                    <i class="glyphicon glyphicon-inbox"></i> {{ $user->email }}<br>
                    <i class="glyphicon glyphicon-phone"></i> {{ $user->mobile }} <br>
                    <i class="glyphicon glyphicon-flag"></i> {{ $user->country }} <br>
                    <i class="glyphicon glyphicon-calendar"></i> {{ trans('general.member_since') }}
                    : {{ $user->created_at->diffForHumans() }}
                </p>
            </div>
        </div>
    @endforeach
    <div class="col-lg-12 text-center">
        {{ $users->setPath('?filter='.request()->get('filter')) }}
    </div>
@else
    <div class="alert alert-danger">{{ trans('general.no_users') }}</div>
@endif