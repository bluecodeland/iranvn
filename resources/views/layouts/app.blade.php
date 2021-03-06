<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link rel="dns-prefetch" href="//iranvn.ir">
    <link rel="dns-prefetch" href="//www.googletagmanager.com">
    <link rel="dns-prefetch" href="//www.w3.org">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="در شبکه مجازی ایران هر گونه نیازی که در فضای مجازی دارید که شامل طراحی سایت ، نرم افزار، پوستر، کلیپ، بنر و ... را برطرف کنید">
	<meta name="keywords" content="" />
	<meta name="author" content="iranvn.ir" />
    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="شبکه مجازی ایران"/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content="iranvn.ir"/>
    <meta property="og:site_name" content="Iran Virtual Network"/>
    <meta property="og:description" content="سامانه یک پارچه خدمات فضای مجازی"/>
    <meta name="twitter:title" content="شبکه مجازی ایران" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="iranvn.ir" />
    <meta name="twitter:card" content="iranvn.ir" />
    <meta http-equiv="content-language" content="fa-ir" />

    <!-- PWA -->
    <link rel="apple-touch-icon" sizes="57x57" href="/pwa/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/pwa/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/pwa/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/pwa/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/pwa/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/pwa/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/pwa/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/pwa/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/pwa/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/pwa/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/pwa/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/pwa/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/pwa/favicon-16x16.png">
    <link rel="manifest" href="/pwa/manifest.json">
    <meta name="msapplication-TileColor" content="#b90cf9">
    <meta name="msapplication-TileImage" content="/pwa/ms-icon-144x144.png">
    <meta name="theme-color" content="#b90cf9">
    <!-- END PWA -->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> --}}
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>

    {{-- <!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
    <![endif]--> --}}
    {{-- google --}}
        <meta name="google-site-verification" content="E5c0y_lgHChVF0Qzcby39di_NrESJ9ikezcnDNitH58" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-25404090-6"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-25404090-6');
        </script>
        <script type="text/javascript">!function(){function t(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,localStorage.getItem("rayToken")?t.src="https://app.raychat.io/scripts/js/"+o+"?rid="+localStorage.getItem("rayToken")+"&href="+window.location.href:t.src="https://app.raychat.io/scripts/js/"+o;var e=document.getElementsByTagName("script")[0];e.parentNode.insertBefore(t,e)}var e=document,a=window,o="3aaea3cd-6b26-40a8-8a30-0f3f994f3d74";"complete"==e.readyState?t():a.attachEvent?a.attachEvent("onload",t):a.addEventListener("load",t,!1)}();</script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm pink fff">
            <div class="container">
                <div>
                <a class="navbar-brand" href="{{ url('/') }}">
                   <h4><span class="fas fa-cloud pr-4 "></span>{{ config('app.name', 'گروه شبکه مجازی ایران') }}</h4>
                </a>
                <h5 class="pgreen fontblack p-1 pl-2 pr-0 ma-line rounded text-center animated fadeIn slow"><small>Iran Virtual Network</small></h5></div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <i class="fas fa-bars fff"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                            {{-- <li class="nav-item">
                                    <a class="nav-link" href="#"> سرویس ها </a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link" href="#"> آموزش ها </a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link" href="#"> بلاگ </a>
                            </li> --}}


                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">ورود</a>
                            </li>
                            {{-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">ثبت نام</a>
                                </li>
                            @endif --}}
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4 ">
            @yield('content')
        </main>
    </div>
        <!-- Copyright -->
       <footers>
       <div class=" pblue pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                            <div class="fff text-center">© <no class="sml">2020</no> Copyright<a href="https://iranvn.ir"> Iran Virtual Network </a>|<small class="sml"> Since 1996</small>
                            </div>

                    </div>
                    <div class="col-md-12 text-center">
                            <a href="https://ble.ir/iranvn" class="fff"><i class="socicon-bale"></i></a>
                            <a href="https://www.instagram.com/iranvn.ir/" class="fff"><i class="socicon-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>

       </footer>
        <!-- Copyright -->

</body>
</html>




