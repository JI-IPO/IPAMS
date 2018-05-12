{{-- This is the left hand major navigation tab --}}
<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs">
                                @if (Auth::check())
                                    <strong class="font-bold">{{ Auth::user()->name }}</strong>
                                @else
                                    <strong class="font-bold">Log in Here</strong>
                                @endif
                            </span> <span class="text-muted text-xs block">User Menu <b class="caret"></b></span>
                        </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        @if (Auth::check())
                            <li><a href="/logout"><i class="fa fa-sign-out"></i> Log out</a></li>
                        @else
                            <li><a href="/login/jaccount"><i class="fa fa-sign-in"></i> Log in</a></li>
                        @endif

                    </ul>
                </div>
                <div class="logo-element">
                    JI
                </div>
            </li>
            @if (Auth::check())
                <li class="{{ isActiveRoute('dashboard') }}">
                    <a href="{{ url('/dashboard') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span> </a>
                </li>
                <li class="{{ isActiveRoute('user') }}">
                    <a href="{{ url('/user') }}"><i class="fa fa-user"></i> <span class="nav-label">Personal Info</span> </a>
                </li>
            @else
                <li class="{{ isActiveRoute('main') }}">
                    <a href="{{ url('/') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Welcome</span></a>
                </li>
            @endif
        </ul>

    </div>
</nav>
