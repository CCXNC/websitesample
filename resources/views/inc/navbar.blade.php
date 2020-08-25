<header class="header">
    <div class="container">
        <p><span class="glyphicon glyphicon-earphone"></span> (02) 723-5408/(02) 723-5505 | <span class="glyphicon glyphicon-envelope"></span> nhfc.sales.dept@newhorizonfinancecorp.com</p>
    </div>
</header>
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button> 

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}"><img class="img" src="http://localhost/newhorizon/public/images/company-logo.png"> New Horizon Finance Corporation</a>

        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <ul class="nav navbar-nav">
                <li><a href="{{ url('/about') }}">About Us</a></li>
                <li><a href="{{ url('/requirements') }}">Loans</a></li>
                <li><a href="{{ url('/news') }}">News</a></li>
                <li><a href="{{ url('/branches') }}">Branches</a></li>
                <li><a href="{{ url('/careers') }}">Careers</a></li>
                <li><a href="{{ url('/careers') }}">Contact Us</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if ( ! (Auth::guest()))
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                        <li><a href="{{ url('/dashboard/about') }}">About Us</a></li>
                        <li><a href="{{ url('/dashboard/requirements') }}">Loans</a></li>
                        <li><a href="{{ url('/dashboard/news') }}">News</a></li>
                        <li><a href="{{ url('/dashboard/gallery') }}">Gallery</a></li>
                        <li><a href="{{ url('/dashboard/branches') }}">Branches</a></li>
                        <li><a href="{{ url('/dashboard/careers') }}">Careers</a></li>
                        <li><a href="{{ url('/dashboard/contact_us') }}">Contact Us</a></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
