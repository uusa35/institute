<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true"
            data-slide-speed="200" style="padding-top: 70px">
            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
            <li class="sidebar-toggler-wrapper hide">
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <div class="sidebar-toggler">
                    <span></span>
                </div>
                <!-- END SIDEBAR TOGGLER BUTTON -->
            </li>
            <li class="heading">
                <h3 class="uppercase">Dashboard</h3>
            </li>
            <li class="nav-item open {{ (str_contains(Request::route()->getName(),'user') ? 'active' : '' ) }} ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-users"></i>
                    <span class="title">Users</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{ route('backend.user.index') }}" class="nav-link ">
                            <i class="fa fa-users"></i>
                            <span class="title">All Users</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{ route('backend.user.create') }}" class="nav-link ">
                            <i class="fa fa-users"></i>
                            <span class="title">create user</span>
                        </a>
                    </li>
                </ul>
            </li>
            {{--Posts--}}
            <li class="nav-item open {{ (str_contains(Request::route()->getName(),'post') ? 'active' : '' ) }} ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-pencil-square"></i>
                    <span class="title">Posts</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{ route('backend.post.index') }}" class="nav-link ">
                            <i class="fa fa-file-text"></i>
                            <span class="title">All posts</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{ route('backend.post.create') }}" class="nav-link ">
                            <i class="fa fa-pencil"></i>
                            <span class="title">create post</span>
                        </a>
                    </li>
                </ul>
            </li>
            {{--Pages--}}
            <li class="nav-item open {{ (str_contains(Request::route()->getName(),'page') ? 'active' : '' ) }} ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-book"></i>
                    <span class="title">Pages</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{ route('backend.page.index') }}" class="nav-link ">
                            <i class="fa fa-file"></i>
                            <span class="title">All Pages</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{ route('backend.section.index') }}" class="nav-link ">
                            <i class="fa fa-file-text-o"></i>
                            <span class="title">All Sections</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{ route('backend.page.create') }}" class="nav-link ">
                            <i class="fa fa-pencil"></i>
                            <span class="title">create page</span>
                        </a>
                    </li>
                </ul>
            </li>
            {{--Menu--}}
            <li class="nav-item open {{ (str_contains(Request::route()->getName(),'category') ? 'active' : '' ) }} ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-database"></i>
                    <span class="title">Categories</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{ route('backend.category.index') }}" class="nav-link ">
                            <i class="fa fa-table"></i>
                            <span class="title">All Categories</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{ route('backend.category.create') }}" class="nav-link ">
                            <i class="fa fa-plus-circle"></i>
                            <span class="title">create category</span>
                        </a>
                    </li>
                </ul>
            </li>
            {{--NewsLetter--}}
            <li class="nav-item open {{ (str_contains(Request::route()->getName(),'newsletter') ? 'active' : '' ) }} ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-inbox"></i>
                    <span class="title">Newsletter</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{ route('backend.newsletter.index') }}" class="nav-link ">
                            <i class="fa fa-envelope"></i>
                            <span class="title">Newsletter</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{ route('backend.newsletter.create') }}" class="nav-link ">
                            <i class="fa fa-plus-square"></i>
                            <span class="title">new subscriber</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{ route('backend.newsletter.campaign.create') }}" class="nav-link ">
                            <i class="fa fa-pencil-square-o"></i>
                            <span class="title">create campaign</span>
                        </a>
                    </li>
                </ul>
            </li>
            {{--Slider--}}
            <li class="nav-item open {{ (str_contains(Request::route()->getName(),'slider') ? 'active' : '' ) }} ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-laptop"></i>
                    <span class="title">Slider</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{ route('backend.slider.index') }}" class="nav-link ">
                            <i class="fa fa-desktop"></i>
                            <span class="title">All Sliders</span>
                        </a>
                    </li>
                    {{--<li class="nav-item  ">--}}
                        {{--<a href="{{ route('backend.slider.create') }}" class="nav-link ">--}}
                            {{--<i class="fa fa-image-o"></i>--}}
                            {{--<span class="title">create new slide</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                </ul>
            </li>
            {{--Gallaries--}}
            <li class="nav-item open {{ (str_contains(Request::route()->getName(),'gallery') ? 'active' : '' ) }} ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa  fa-picture-o"></i>
                    <span class="title">All Galleries</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{ route('backend.gallery.index') }}" class="nav-link ">
                            <i class="fa fa-file-image-o"></i>
                            <span class="title">All Galleries</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="heading">
                <h3 class="uppercase"><i class="fa fa-cog"></i> Settings</h3>
            </li>
            <li class="nav-item open {{ (str_contains(Request::route()->getName(),'contactus') ? 'active' : '' ) }} ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-cogs"></i>
                    <span class="title">Settings</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{ route('backend.contactus.index') }}" class="nav-link ">
                            <i class="fa fa-phone"></i>
                            <span class="title">contact us</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{ url('backend/translations') }}" class="nav-link ">
                            <i class="fa fa-language"></i>
                            <span class="title">translations</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="{{ url('/logout') }}" class="dropdown-toggle btn-primary"
                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                    <i class="icon-logout"></i> logout
                </a>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                      style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>