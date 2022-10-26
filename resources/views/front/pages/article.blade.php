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
    <link rel="apple-touch-icon-precomposed" href="/images/favicon-apple.png" />
    <link rel="icon" href="/images/favicon.png">
    <!-- ========== STYLESHEETS ========== -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="/css/jquery.mmenu.css">
    <link rel="stylesheet" href="/revolution/css/layers.css">
    <link rel="stylesheet" href="/revolution/css/settings.css">
    <link rel="stylesheet" href="/revolution/css/navigation.css">
    <link rel="stylesheet" href="/css/animate.min.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/daterangepicker.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/responsive.css">
    <!-- ========== ICON FONTS ========== -->
    <link href="/fonts/font-awesome.min.css" rel="stylesheet">
    <link href="/fonts/flaticon.css" rel="stylesheet">
    <!-- ========== GOOGLE FONTS ========== -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,600,700%7CRoboto:100,300,400,400i,500,700"
        rel="stylesheet">
</head>

<body>
    @include('front.components.preloader')
    <!-- ========== WRAPPER ========== -->
    <div class="wrapper">
            <!-- ========== MOBILE MENU ========== -->
    <nav id="mobile-menu"></nav>
    <!-- ========== TOP MENU ========== -->
    <div class="topbar">
        <div class="container">
            @foreach ($hotelinfo as $info)
            <div class="welcome-mssg">
                {{$info->welcome_top}}
            </div>
            <div class="top-right-menu">
                <ul class="top-menu">
                        <li class="d-none d-md-inline">
                            <a href="tel:{{ $info->phone }}">
                                <i class="fa fa-phone"></i>
                                {{ $info->phone }}
                            </a>
                        </li>
                        <li class="d-none d-md-inline">
                            <a href="mailto:{{ $info->email }}">
                                <i class="fa fa-envelope-o "></i>
                                {{ $info->email }}
                            </a>
                        </li>
                    @endforeach
                    <li class="language-menu">
                        <a href="#" class="active-language"><img src="/images/icons/flags/gb.png"
                                alt="Image">English</a>
                        <ul class="languages">
                            <li class="language">
                                <a href="#"><img src="/images/icons/flags/it.png" alt="Image">Italiano</a>
                            </li>
                            <li class="language">
                                <a href="#"><img src="/images/icons/flags/gr.png" alt="Image">Ελληνικα</a>
                            </li>
                            <li class="language">
                                <a href="#"><img src="/images/icons/flags/al.png" alt="Image">Shqip</a>
                            </li>
                            <li class="language">
                                <a href="#"><img src="/images/icons/flags/fr.png" alt="Image">Français</a>
                            </li>
                            <li class="language">
                                <a href="#"><img src="/images/icons/flags/es.png" alt="Image">Español</a>
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
                        <img src="{{asset('storage/logo/thumbnail/'. $info->logo)}}" alt="Hotel Himara">
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
                    <li class="menu-item {{Route::currentRouteName() == "home" ? 'active': ''}}">
                        <a href="{{ url('/') }}">HOME</a>
                    </li>
                    <li class="menu-item {{Route::currentRouteName() == "List of rooms" ? 'active': ''}} ">
                        <a href="{{ url('/roomlist') }}">ROOMS</a>
                    </li>
                    <li class="menu-item {{Route::currentRouteName() == "staff" ? 'active': ''}}">
                        <a href="{{ url('/staff') }}">TEAM</a>
                    </li>
                    <li class="menu-item {{Route::currentRouteName() == "gallery" ? 'active': ''}}">
                        <a href="{{ url('/gallery') }}">GALLERY</a>
                    </li>
                    <li class="menu-item {{Route::currentRouteName() == "contact" ? 'active': ''}}">
                        <a href="{{ url('/contact') }}">CONTACT US</a>
                    </li>
                    <li class="menu-item menu-btn">
                        @include('front.components.loginbutton')
                    </li>
                </ul>
            </nav>
        </div>
    </header>

        <main class="room w-full pt-0">
            <div class="container">
                <div class="row col-12">
                    <div class="col-12">
                        <!-- ROOM SLIDER -->
                        <div class="room-slider">
                            <div id="room-main-image" class="owl-carousel image-gallery">
                                <!-- ITEM -->
                                <div class="item">
                                    <figure class="gradient-overlay-hover image-icon">
                                        <a href="/blog/{{ $show->id }}">
                                            <img class="img-fluid"
                                            src="{{ asset('storage/blog/thumbnail/' . $show->src) }}"
                                            alt="Image">
                                        </a>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h4>{{ strtoupper($show->title) }}</h4>
                            <p class="dropcap">{{ $show->long_desc }}</p>
                        </div>

                        @if($comments->count() > 0)
                        <h4 class="my-5">All comments</h4>
                        @foreach ($comments as $comment)
                            <div>
                                <p>Commented by {{ $comment->user->name }}</p>
                                {{ $comment->comment }}
                            </div>
                        @endforeach
                        @endif
                    </div>
                </div>
        </main>
        <!-- ========== FOOTER ========== -->
        <footer>
            <div class="footer-widgets">
                <div class="container">
                    <div class="row">
                        <!-- WIDGET -->
                        <div class="col-md-3">
                            <div class="footer-widget">
                                @foreach ($hotelinfo as $info)
                                    <img src="{{ asset('/storage/logo/thumbnail/' . $info->logo) }}" class="footer-logo"
                                        alt="Hotel Himara">
                                @endforeach
                                <div class="inner">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, velit placeat
                                        assumenda
                                        incidunt
                                        dolorem aliquam!</p>
                                    <a href="https://www.tripadvisor.com/" target="_blank">
                                        <div class="tripadvisor-banner">
                                            <span class="review">Recommended</span>
                                            <img src="/images/icons/tripadvisor.png" alt="Image">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- WIDGET -->
                        <div class="col-md-3">
                            <div class="footer-widget">
                                <h3>LATEST ROOMS</h3>
                                <div class="inner">
                                    <ul class="latest-posts">
                                        @foreach ($rooms5 as $room)
                                            <li>
                                                <a href="room/{{ $room->id }}/show">{{ ucfirst(strtolower($room->name)) }}
                                                    - {{ $room->type->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- WIDGET -->
                        <div class="col-md-3">
                            <div class="footer-widget">
                                <h3>USEFUL LINKS</h3>
                                <div class="inner">
                                    <ul class="useful-links">
                                        <li>
                                            <a href="{{route('contact')}}">About Us</a>
                                        </li>
                                        <li>
                                            <a href="{{route('contact')}}">Contact Us</a>
                                        </li>

                                        <li>
                                            <a href="{{route('gallery')}}">Himara Gallery</a>
                                        </li>
                                        <li>
                                            <a href="{{route('contact')}}">Our Location</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- WIDGET -->
                        <div class="col-md-3">
                            <div class="footer-widget">
                                <h3>Contact Info</h3>
                                <div class="inner">
                                    @foreach ($hotelinfo as $info)
                                        <ul class="contact-details">
                                            <li>
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                {{ $info->address }}
                                            </li>
                                            <li>
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                                {{ $info->phone }}
                                            </li>
                                            <li>
                                                <i class="fa fa-fax"></i>
                                                {{ $info->phone }}
                                            </li>
                                            <li>
                                                <i class="fa fa-globe"></i>
                                                {{ $info->website }}
                                            </li>
                                            <li>
                                                <i class="fa fa-envelope"></i>
                                                Email:
                                                <a href="mailto: {{ $info->email }}">
                                                    {{ $info->email }}
                                                </a>
                                            </li>
                                        </ul>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SUBFOOTER -->
            <div class="subfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="copyrights">&copy; 2022. Designed by Louis Tychon
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="social-media">
                                <a class="facebook" data-original-title="Facebook" data-toggle="tooltip"
                                    href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a class="twitter" data-original-title="Twitter" data-toggle="tooltip"
                                    href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a class="googleplus" data-original-title="Google Plus" data-toggle="tooltip"
                                    href="#">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                                <a class="pinterest" data-original-title="Pinterest" data-toggle="tooltip"
                                    href="#">
                                    <i class="fa fa-pinterest"></i>
                                </a>
                                <a class="linkedin" data-original-title="Linkedin" data-toggle="tooltip"
                                    href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                                <a class="youtube" data-original-title="Youtube" data-toggle="tooltip"
                                    href="#">
                                    <i class="fa fa-youtube"></i>
                                </a>
                                <a class="instagram" data-original-title="Instagram" data-toggle="tooltip"
                                    href="#">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div>
            @include('front.components.contactnotif')
            @include('front.components.backtotop')
            <script src="/js/jquery.min.js"></script>
            <script src="/js/bootstrap.min.js"></script>
            <script src="/js/bootstrap-select.min.js"></script>
            <script src="/js/jquery.mmenu.js"></script>
            <script src="/js/jquery.inview.min.js"></script>
            <script src="/js/jquery.countdown.min.js"></script>
            <script src="/js/jquery.magnific-popup.min.js"></script>
            <script src="/js/owl.carousel.min.js"></script>
            <script src="/js/owl.carousel.thumbs.min.js"></script>
            <script src="/js/isotope.pkgd.min.js"></script>
            <script src="/js/imagesloaded.pkgd.min.js"></script>
            <script src="/js/masonry.pkgd.min.js"></script>
            <script src="/js/wow.min.js"></script>
            <script src="/js/countup.min.js"></script>
            <script src="/js/moment.min.js"></script>
            <script src="/js/daterangepicker.js"></script>
            <script src="/js/parallax.min.js"></script>
            <script src="/js/smoothscroll.min.js"></script>
            <script src="/js/instafeed.min.js"></script>
            <script src="/js/main.js"></script>
            <!-- ========== REVOLUTION SLIDER ========== -->
            <script src="/revolution/js/jquery.themepunch.tools.min.js"></script>
            <script src="/revolution/js/jquery.themepunch.revolution.min.js"></script>
            <script src="/revolution/js/extensions/revolution.extension.actions.min.js"></script>
            <script src="/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
            <script src="/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
            <script src="/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
            <script src="/revolution/js/extensions/revolution.extension.migration.min.js"></script>
            <script src="/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
            <script src="/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
            <script src="/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
            <script src="/revolution/js/extensions/revolution.extension.video.min.js"></script>

        </div>

    </div>
</body>

</html>
