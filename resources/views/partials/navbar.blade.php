<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
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
                {{ config('app.name', 'Laravel') }}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ url('/') }}"><strong>Home</strong></a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown"><strong>Categories</strong><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><strong>Doctors</strong></a></li>
                        <li><a href="#"><strong>Hospitals</strong></a></li>
                        <li><a href="#"><strong>Pharmacies</strong></a></li>
                    </ul>
                </li>
                <li><a href="{{url('/blog')}}"><strong>Blog</strong></a></li>
                <li role="separator" class="divider"></li>
                <li><a href="{{ url('/packages') }}"><strong>Packages</strong></a></li>
                <li><a href="{{ url('/contact') }}"><strong>Contact us</strong></a></li>
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}"><strong>Login</strong></a></li>
                    <li><a href="{{ route('register') }}"><strong>Register</strong></a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="glyphicon glyphicon-user"></span>
                            <strong>{{ Auth::user()->name }} </strong>
                            <span class="glyphicon glyphicon-chevron-down"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="navbar-login">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            {{--<p class="text-center">--}}
                                                {{--<span class="glyphicon glyphicon-user icon-size"></span>--}}

                                            {{--</p>--}}
                                            <img src="{{asset(Auth::user()->avatar)}}" class="icon-size img-thumbnail" >
                                        </div>
                                        <div class="col-lg-8">
                                            <p class="text-left"><strong>{{ Auth::user()->role->display_name}} </strong>
                                            </p>
                                            <p class="text-left small">{{ Auth::user()->email }} </p>
                                            <p class="text-left">
                                                <a href="{{route('user.show',['username'=>Auth::user()->username])}}" class="btn btn-primary btn-block btn-sm">Profile</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="divider navbar-login-session-bg"></li>
                            <li><a href="{{route('user.edit.profile')}}">Profile Settings <span
                                            class="glyphicon glyphicon-cog pull-right"></span></a></li>

                            <li class="divider"></li>
                            <li><a href="{{route('user.edit.account')}}">Account Settings <span
                                            class="glyphicon glyphicon-cog pull-right"></span></a></li>

                            <li class="divider"></li>
                            <li><a href="#">Messages <span class="badge pull-right"> 42 </span></a></li>
                            <li class="divider"></li>
                            <li><a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Sign Out <span
                                            class="glyphicon glyphicon-log-out pull-right"></span></a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
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