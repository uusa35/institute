<div class="row">
    <div class="col-lg-8 col-lg-push-2" style="margin-bottom: 30px;">
        <h3>{{ trans('general.random_users') }}</h3>
        <div class="row">
            @foreach($users->chunk(8) as $usersSet)
                @foreach($usersSet as $user )
                    <div class="col-lg-2 col-xs-3" style="margin-bottom : 5px;">
                        <a href="{{ route('user.show',$user->id) }}" class="text-center" style="margin-bottom: 4px;">
                            <img src="{{ asset('stroage/'.$user->avatar) }}" alt="{{ $user->name }}"
                                 class="img-responsive text-center img-rounded" style="border: 1px solid lightgrey;">
                        </a>
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
</div>
