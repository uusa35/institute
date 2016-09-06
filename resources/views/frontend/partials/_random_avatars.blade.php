<div class="col-lg-8 col-lg-push-2" style="margin-bottom: 150px;">
    <h3>Random Users</h3>
    @foreach($users->chunk(6) as $usersSet)
        <div class="row">
            @foreach($usersSet as $user )
                <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2" style="margin-bottom: 8px;">
                    <a href="{{ route('user.show',$user->id) }}" class="text-center" style="margin-bottom: 4px;">
                        <img src="{{ $user->avatar }}" alt="{{ $user->name }}"
                             class="img-responsive text-center img-rounded" style="border: 1px solid lightgrey;">
                    </a>
                </div>
            @endforeach
        </div>
    @endforeach
</div>
