<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet"
          type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="{{ asset('css/grayscale.min.css') }}" rel="stylesheet">
@yield('style')

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<!--Navigation-->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                Menu <i class="fa fa-bars"></i>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand page-scroll" href="#page-top">
                <i class="fa fa-play-circle"></i>
                {{ config('app.name', 'Laravel') }}
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
                <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                @yield('menu')
            </ul>

            <!-- Right Side Of Navbar -->
            {{--<ul class="nav navbar-nav navbar-right">--}}
            {{--<!-- Authentication Links -->--}}
            {{--@if (Auth::guest())--}}
            {{--<li><a href="{{ route('login') }}">Login</a></li>--}}
            {{--<li><a href="{{ route('register') }}">Register</a></li>--}}
            {{--@else--}}
            {{--<li class="dropdown">--}}
            {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">--}}
            {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
            {{--</a>--}}

            {{--<ul class="dropdown-menu" role="menu">--}}
            {{--<li>--}}
            {{--<a href="{{ route('logout') }}"--}}
            {{--onclick="event.preventDefault();--}}
            {{--document.getElementById('logout-form').submit();">--}}
            {{--Logout--}}
            {{--</a>--}}

            {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
            {{--{{ csrf_field() }}--}}
            {{--</form>--}}
            {{--</li>--}}
            {{--</ul>--}}
            {{--</li>--}}
            {{--@endif--}}
            {{--</ul>--}}
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

@yield('content')

<footer>
    <div class="container text-center">
        <p>Copyright &copy; Library Management {{date('Y')}}</p>
    </div>
</footer>


<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

@yield('script')
</body>
</html>
