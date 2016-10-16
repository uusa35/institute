<div class="col-lg-6">
    <div class="panel panel-info">
        <div class="panel-heading">
            {{ trans('general.featured_users') }}
        </div>
        <div class="panel-body"
             style="display: flex; justify-content: space-around; align-content: center; margin-top: auto;">
            @if($elements->count() > 0)
                @foreach($elements as $user)
                    <div class="col-lg-3">
                        <div class="col-lg-10 col-lg-push-1">
                            <img src="{{ File::exists('storage/'.$user->avatar) ? asset('storage/'.$user->avatar) : asset('images/profile.png') }}"
                                 alt="{{ $user->first_name }}"
                                 class="img-responsive img-circle">
                        </div>
                        <div class="col-lg-12 text-center">
                            <small>
                                <a href="{{ route('user.show',$user->id) }}"
                                   class="">{{ str_limit($user->first_name,30) }}</a>
                            </small>

                        </div>
                    </div>
                @endforeach
            @else
                <div class="alert alert-danger">{{ trans('general.no_users') }}</div>
            @endif
        </div>
    </div>
</div>