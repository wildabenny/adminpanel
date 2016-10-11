<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('meta')
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,700italic&subset=latin,latin-ext"
          rel="stylesheet" type="text/css">
</head>
<body class="homepage">

<header class="dashed">
    <div class="page">
        <figure><a href="/"><img src="{{asset('front/images/logo-big.png')}}"></a></figure>
        <div class="hamburger-switch"><span></span></div>
        <nav>
            <ul id="main-menu">
                <li><a class="{{ RouteHelper::set_active('index') }}" href="{{url('index')}}">start</a></li>
                <li><a class="{{ RouteHelper::set_active('o-nas') }}" href="{{url('o-nas')}}">o nas</a></li>
                <li><a class="{{ RouteHelper::set_active('wiejski-stol') }}" href="{{url('wiejski-stol')}}">wiejski
                        stół</a></li>
                <li><a class="{{ RouteHelper::set_active('produkty') }}" href="{{url('produkty')}}">produkty</a></li>
                <li><a class="{{ RouteHelper::set_active('nasz-sklep') }}" href="{{url('nasz-sklep')}}">nasz sklep</a>
                </li>
                <li><a class="{{ RouteHelper::set_active('kontakt') }}" href="{{url('kontakt')}}">kontakt</a></li>
            </ul>
        </nav>
    </div>
</header>

@yield('content')

<footer>
    <div class="page">

        <ul class="menu-footer">

            <li><a class="{{ RouteHelper::set_active('index') }}" href="{{url('index')}}">start</a></li>
            <li><a class="{{ RouteHelper::set_active('o-nas') }}" href="{{url('o-nas')}}">o nas</a></li>
            <li><a class="{{ RouteHelper::set_active('wiejski-stol') }}" href="{{url('wiejski-stol')}}">wiejski stół</a>
            </li>
            <li><a class="{{ RouteHelper::set_active('produkty') }}" href="{{'produkty'}}">produkty</a></li>
            <li><a class="{{ RouteHelper::set_active('nasz-sklep') }}" href="{{url('nasz-sklep')}}">nasz sklep</a></li>
            <li><a class="{{ RouteHelper::set_active('kontakt') }}" href="{{url('kontakt')}}">kontakt</a></li>

        </ul>

    </div>
</footer>

<script type="text/javascript" src="{{asset('front/js/jquery-2.2.3.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDDIgjYlqlqAgN-kc-nhhUCOX-a_1OB2ek&callback=initMap" async
        defer></script>
<script type="text/javascript" src="{{asset('front/js/lightbox.js')}}"></script>
<script type="text/javascript" src="{{asset('front/js/scripts.js')}}"></script>

</body>
</html>