<nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">JAL-Documentor</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="{{ (Request::is('/') ? 'active' : '') }}">
                    <a href="{!! URL::to('') !!}"><i class="fa fa-home"></i> Start</a>
                </li>
                {{--<li class="{{ (Request::is('about') ? 'active' : '') }}">--}}
                    {{--<a href="{!! URL::to('about') !!}">Over</a>--}}
                {{--</li>--}}
                {{--<li class="{{ (Request::is('contact') ? 'active' : '') }}">--}}
                    {{--<a href="{!! URL::to('contact') !!}">Contacteren</a>--}}
                {{--</li>--}}
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li class="{{ (Request::is('auth/login') ? 'active' : '') }}"><a href="{!! URL::to('auth/login') !!}"><i
                                    class="fa fa-sign-in"></i> Inloggen</a></li>
                    {{--<li class="{{ (Request::is('auth/register') ? 'active' : '') }}"><a--}}
                                {{--href="{!! URL::to('auth/register') !!}">Registreren</a></li>--}}
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-expanded="false"><i class="fa fa-user"></i> {{ Auth::user()->name }} <i
                                    class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu" role="menu">
                            @if(Auth::check())
                                @if(Auth::user()->admin==1)
                                    <li>
                                        <a href="{!! URL::to('admin/dashboard') !!}"><i class="fa fa-tachometer"></i> Dashbord</a>
                                    </li>
                                @else
                                    <li>
                                        <a href="{!! URL::to('/dashboardhome') !!}"><i class="fa fa-tachometer"></i> JalDoelen</a>
                                    </li>
                                @endif
                                <li role="presentation" class="divider"></li>
                            @endif
                            <li>
                                <a href="{!! URL::to('auth/logout') !!}"><i class="fa fa-sign-out"></i> Afmelden</a>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>