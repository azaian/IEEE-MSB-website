<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description"
          content="IEEE MSBIEEE MSBIEEE MSBIEEE MSBIEEE MSBIEEE MSBIEEE MSBIEEE MSBIEEE MSBIEEE MSBIEEE MSBIEEE MSBIEEE MSBIEEE MSBIEEE MSBIEEE MSBIEEE MSBIEEE MSBIEEE MSBIEEE MSBIEEE MSB">
    <meta name="keywords"
          content=" IEEE, IEEE_MSB, IEEE-MSB, IEEE MSB, STC, Menofia SB, Menoufia SB ,Menouf SB, student branch. ">
    <title>@yield('title')</title>
    <link rel="icon" href="../../../resources/images/title-logo.png">
    <!-- to make html5 readable on old browsers-->
    <script src="../../../resources/js/html5shiv.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../../../resources/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="../../../resources/includes/font-awesome-4.3.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="../../../resources/css/cp-style.css"/>
</head>


<body id="app-layout top">

<nav class="navbar navbar-default">
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
                main site
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/cp') }}">ControlPanel</a></li>
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
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

<div class="clearfix"></div>
<div>

    @yield('body')

</div>
<div class="clearfix"></div>

<script src="../../../resources/js/jqeury.js">
</script>
<script src="../../../resources/js/plugin.js"></script>
<script src="../../../resources/js/bootstrap.min.js"></script>
</body>
</html>