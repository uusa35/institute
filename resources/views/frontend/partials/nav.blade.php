<nav class="navbar navbar-default navbar-static-top navbar-fixed-top">
    <div class="container-fluid mainNav">


        {{--logo--}}
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>


            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ File::exists('storage/'.$contactusInfo->logo) ? asset('storage/'.$contactusInfo->logo) : 'http://placehold.it/130x75&text=logo&color=gold' }}"
                     alt="{{ $contactusInfo->company_name }}"
                     class="img-responsive img-rounded"/>
            </a>
        </div>

        <div class="nav-top-frontend">
            <div class="nav collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li class="{{ str_is('home*',Route::currentRouteName()) ? 'active' : null }}">
                        <a href="{{ url('/home') }}" role="button">{{ trans('general.home')}}</a>
                    </li>
                    @foreach($menuItems as $item)
                        @if($item->pages->count() > 1)
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-haspopup="true" aria-expanded="false">{{ $item->name }} <span
                                            class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    @foreach($item->pages as $page)
                                        @if(!$loop->first)
                                            <li role="separator" class="divider"></li>
                                        @endif
                                        <li>
                                            <a href="{{ route('page.show',$page->id) }}">{{ $page->title }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @else
                            <li>
                                <a href="{{ route('page.show',$item->pages->first()->id) }}">{{ $item->pages->first()->title }}</a>
                            </li>
                        @endif
                    @endforeach
                    <li class="{{ str_is('membership*',Route::currentRouteName()) ? 'active' : null }}">
                        <a href="{{ route('register.membership') }}">{{ trans('general.register_membership') }}
                        </a>
                    </li>
                    <li class="{{ str_is('album*',Route::currentRouteName()) ? 'active' : null }}">
                        <a href="{{ route('album.index') }}">{{ trans('general.albums') }}
                        </a>
                    </li>
                    <li class="{{ str_is('post*',Route::currentRouteName()) ? 'active' : null }}">
                        <a href="{{ route('post.index') }}">{{ trans('general.posts') }}
                        </a>
                    </li>
                    <li class="{{ str_is('contactus*',Route::currentRouteName()) ? 'active' : null }}">
                        <a href="{{ url('/contactus') }}">{{ trans('general.contactus') }}
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">{!! trans('general.language') !!} <span
                                    class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('/lang/ar') }}"><i
                                            class="fa fa-language"></i> {{ trans('general.arabic') }}
                                </a></li>
                            <li><a href="{{ url('/lang/en') }}"><i
                                            class="fa fa-language"></i> {{ trans('general.english') }}
                                </a></li>
                        </ul>
                    </li>
                </ul>


                {{ Form::open(['action' => 'Frontend\HomeController@searchByName','method' => 'GET' , 'class' => 'navbar-form navbar-right', 'role' => 'search']) }}
                <div class="form-group">
                    <input type="text" name="first_name" class="form-control input-sm" placeholder="Search"
                           style="max-width:100px;">
                </div>
                <button type="submit" class="btn btn-xs btn-info">{!! trans('general.submit') !!}</button>
                {{ Form::close() }}
                        <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        {{--<li><a href="{{ url('/register') }}">Register</a></li>--}}
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">
                                {{ str_limit(Auth::user()->first_name,6,'') }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                @if(Auth::user()->can('isAdmin'))
                                    <li>
                                        <a href="{{route('backend.dashboard.index')}}">{{ trans('general.dashboard') }}</a>
                                    </li>
                                @elseif(Auth::user())
                                    <li>
                                        <a href="{{route('user.edit', auth()->user()->id)}}">{{ trans('general.profile') }}</a>
                                    </li>
                                @endif
                                <li>
                                    <a href="{{ url('/logout') }}"
                                       onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>


    </div>
</nav>