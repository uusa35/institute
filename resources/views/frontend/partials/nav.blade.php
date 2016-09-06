<nav class="navbar navbar-default navbar-static-top navbar-fixed-top">
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
            <img src="{{ asset('storage/'.$contactusInfo->logo) }}" alt="{{ $contactusInfo->company_name }}"
                 class="img-responsive img-rounded" style=""/>
        </a>
    </div>
    <div class="container" style="display: flex; justify-content: center; align-items: center; justify-items: center; min-height: 100px;">
        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                @foreach($menuItems as $item)
                    @if($item->pages->count() > 1)
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">{{ $item->name }} <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                @foreach($item->pages as $page)
                                    @if(!$loop->first)
                                        <li role="separator" class="divider"></li>
                                    @endif
                                    <li><a href="{{ route('page.show',$page->id) }}">{{ $page->title }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    @else
                        <li>
                            <a href="{{ route('page.show',$item->pages->first()->id) }}">{{ $item->pages->first()->title }}</a>
                        </li>
                    @endif
                @endforeach
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            @if(Auth::user()->can('isAdmin'))
                                <li><a href="{{route('backend.dashboard.index')}}">{{ trans('general.dashboard') }}</a>
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
</nav>