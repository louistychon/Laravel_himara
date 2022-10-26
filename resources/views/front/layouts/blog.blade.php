<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <!-- ========== SEO ========== -->
    <title>Hotel Himara - Hotel HTML Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!-- ========== FAVICON ========== -->
    <link rel="apple-touch-icon-precomposed" href="images/favicon-apple.png" />
    <link rel="icon" href="images/favicon.png">
    <!-- ========== STYLESHEETS ========== -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/jquery.mmenu.css">
    <link rel="stylesheet" href="revolution/css/layers.css">
    <link rel="stylesheet" href="revolution/css/settings.css">
    <link rel="stylesheet" href="revolution/css/navigation.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/daterangepicker.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- ========== ICON FONTS ========== -->
    <link href="fonts/font-awesome.min.css" rel="stylesheet">
    <link href="fonts/flaticon.css" rel="stylesheet">
    <!-- ========== GOOGLE FONTS ========== -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,600,700%7CRoboto:100,300,400,400i,500,700"
        rel="stylesheet">
</head>

<body>
    <!-- ========== MOBILE MENU ========== -->
    <nav id="mobile-menu"></nav>
    <!-- ========== WRAPPER ========== -->
    <div class="wrapper">
        <!-- ========== TOP MENU ========== -->
        <div class="topbar">
            <div class="container">
                <div class="welcome-mssg">
                    Welcome to Hotel Himara.
                </div>
                <div class="top-right-menu">
                    <ul class="top-menu">
                        <li class="d-none d-md-inline">
                            @foreach ($hotelinfo as $info)
                                <a href="tel:{{ $info->phone }}">
                                    <i class="fa fa-phone"></i>{{ $info->phone }}
                                </a>
                        </li>
                        <li class="d-none d-md-inline">
                            <a href="mailto:{{ $info->email }}">
                                <i class="fa fa-envelope-o "></i>{{ $info->email }}</a>
                        </li>
                        @endforeach
                        <li class="language-menu">
                            <a href="#" class="active-language"><img src="images/icons/flags/gb.png"
                                    alt="Image">English</a>
                            <ul class="languages">
                                <li class="language">
                                    <a href="#"><img src="images/icons/flags/it.png" alt="Image">Italiano</a>
                                </li>
                                <li class="language">
                                    <a href="#"><img src="images/icons/flags/gr.png" alt="Image">Ελληνικα</a>
                                </li>
                                <li class="language">
                                    <a href="#"><img src="images/icons/flags/al.png" alt="Image">Shqip</a>
                                </li>
                                <li class="language">
                                    <a href="#"><img src="images/icons/flags/fr.png" alt="Image">Français</a>
                                </li>
                                <li class="language">
                                    <a href="#"><img src="images/icons/flags/es.png" alt="Image">Español</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- ========== HEADER ========== -->
        <header class="horizontal-header sticky-header" data-menutoggle="991">
            <div class="container">
                <!-- BRAND -->
                <div class="brand">
                    <div class="logo">
                        <a href="{{ route('home') }}">
                            @foreach ($hotelinfo as $info)
                                <img src={{ asset('/storage/logo/thumbnail/' . $info->logo) }} alt="Hotel Himara">
                            @endforeach
                        </a>
                    </div>
                </div>
                <!-- MOBILE MENU BUTTON -->
                <div id="toggle-menu-button" class="toggle-menu-button">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </div>
                <!-- MAIN MENU -->
                <nav id="main-menu" class="main-menu">
                    <ul class="menu">
                        <li class="menu-item dropdown">
                            <a href="{{ route('home') }}">HOME</a>

                        </li>
                        <li class="menu-item dropdown">
                            <a href="{{ route('List of rooms') }}">ROOMS</a>

                        </li>
                        <li class="menu-item dropdown active">
                            <a href="{{ route('blog') }}">BLOG</a>

                        </li>
                        <li class="menu-item">
                            <a href="{{ route('contact') }}">CONTACT US</a>
                        </li>
                        @auth
                            <li class="menu-item menu-btn">
                                <a href="booking-form.html" class="btn">
                                    <i class="fa fa-calendar"></i>
                                    BOOK ONLINE</a>
                            </li>
                        @endauth
                        @guest
                            <li class="menu-item menu-btn">
                                <a href="{{route('login')}}" class="btn">
                                    <i class="fa-solid fa-right-to-bracket"></i>
                                    Log in</a>
                            </li>
                        @endguest
                    </ul>
                </nav>
            </div>
        </header>

        <body>
            @yield('content');
            @include('front.components.footer');
        </body>

</html>
