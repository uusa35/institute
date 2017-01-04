<div class="row">
    <div class="col-lg-8 col-lg-push-2" style="margin-bottom: 30px;">
        <h3>{{ ucwords(trans('general.random_users')) }}</h3>
        <hr>
        @foreach($users->chunk(6) as $usersSet)
            @foreach($usersSet as $user )
                <div class="col-lg-2 col-xs-3" style="margin-bottom : 1px;">
                    <a href="{{ route('user.show',$user->id) }}" class="text-center" style="margin-bottom: 4px;">
                        <img src="{{ File::exists('storage/'.$user->avatar) ? asset('storage/'.$user->avatar) : asset('images/profile.png') }}"
                             alt="{{ $user->name }}"
                             class="img-responsive text-center img-rounded" style="width: 100px; height : 115px; max-height: 125px !important; border: 1px solid lightgrey;">
                    </a>
                </div>
            @endforeach
        @endforeach
    </div>
</div>
