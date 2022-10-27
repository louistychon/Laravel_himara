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
                        {{ $info->welcome_top }}
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
                        <img src="{{ asset('storage/logo/thumbnail/' . $info->logo) }}" alt="Hotel Himara">
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
                    <li class="menu-item {{ Route::currentRouteName() == 'home' ? 'active' : '' }}">
                        <a href="{{ url('/') }}">HOME</a>
                    </li>
                    <li class="menu-item {{ Route::currentRouteName() == 'List of rooms' ? 'active' : '' }} ">
                        <a href="{{ url('/roomlist') }}">ROOMS</a>
                    </li>
                    <li class="menu-item {{ Route::currentRouteName() == 'staff' ? 'active' : '' }}">
                        <a href="{{ url('/staff') }}">TEAM</a>
                    </li>
                    <li class="menu-item {{ Route::currentRouteName() == 'gallery' ? 'active' : '' }}">
                        <a href="{{ url('/gallery') }}">GALLERY</a>
                    </li>
                    <li class="menu-item {{ Route::currentRouteName() == 'contact' ? 'active' : '' }}">
                        <a href="{{ url('/contact') }}">CONTACT US</a>
                    </li>
                    <li class="menu-item menu-btn">
                        @include('front.components.loginbutton')
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="room">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-12">
                    <!-- ROOM SLIDER -->
                    <div class="room-slider">
                        <div id="room-main-image" class="owl-carousel image-gallery">
                            <!-- ITEM -->
                            @foreach ($room->imgs as $i => $imgs)
                                @if ($i >= 1)
                                @break
                            @endif
                            <div class="item">
                                <figure class="gradient-overlay-hover image-icon">
                                    <a href="{{ asset('storage/room/thumbnail/' . $imgs->src) }}">
                                        <img class="img-fluid"
                                            src="{{ asset('storage/room/thumbnail/' . $imgs->src) }}"
                                            alt="Image">
                                    </a>
                                </figure>
                            </div>
                        @endforeach
                    </div>
                    <div id="room-thumbs" class="room-thumbs owl-carousel">
                        <!-- ITEM -->
                        @foreach ($room->imgs as $img)
                            <div class="item"><img class="img-fluid"
                                    src="{{ asset('storage/room/thumbnail/' . $img->src) }}" alt="Image">
                            </div>
                        @endforeach
                    </div>
                </div>
                <p class="dropcap">{{ $room->long_desc }}</p>
                <div class="section-title sm">
                    <h4>ROOM SERVICES</h4>
                    <p class="section-subtitle">{{ $room->name }} Includes</p>
                </div>
                <div class="room-services-list">
                    <div class="row">
                        <div class="col-sm-4">
                            <ul class="list-unstyled">
                                @foreach ($services as $i => $service)
                                    @if ($i >= 0 && $i <= 3)
                                        <li>
                                            <i
                                                class="fa
                                    @if ($room->services->contains($service->id)) fa-check
                                    @else fa-times @endif"></i>{{ $service->name }}
                                        </li>
                                    @endif
                                @endforeach

                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <ul class="list-unstyled">
                                @foreach ($services as $i => $service)
                                    @if ($i >= 4 && $i <= 7)
                                        <li>
                                            <i
                                                class="fa
                                    @if ($room->services->contains($service->id)) fa-check
                                    @else fa-times @endif"></i>{{ $service->name }}
                                        </li>
                                    @endif
                                @endforeach

                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <ul class="list-unstyled">
                                @foreach ($services as $i => $service)
                                    @if ($i >= 8 && $i <= 12)
                                        <li>
                                            <i
                                                class="fa
                                    @if ($room->services->contains($service->id)) fa-check
                                    @else fa-times @endif"></i>{{ $service->name }}
                                        </li>
                                    @endif
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
                <p>{{ $room->long_desc2 }}
                </p>
                <!-- ROOM REVIEWS -->
                @if ($ratingcount != 0)
                    <div id="room-reviews" class="room-reviews">
                        <div class="section-title sm">
                            <h4>ROOM REVIEWS</h4>
                            <p class="section-subtitle">What our guests are saying about us</p>
                        </div>
                        <div class="rating-details">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="review-summary">
                                        <div class="average">{{ $ratings }}</div>
                                        <div class="rating">
                                            <i class="fa fa-star voted" aria-hidden="true"></i>
                                            <i class="fa fa-star voted" aria-hidden="true"></i>
                                            <i class="fa fa-star voted" aria-hidden="true"></i>
                                            <i class="fa fa-star voted" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                        <small>Based on {{ $ratingcount }} ratings</small>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <!-- ITEM -->
                                    <div class="progress-item">
                                        <div class="row">
                                            <div class="col-lg-2 col-sm-2 col-3">
                                                <div class="progress-stars">5 star</div>
                                            </div>
                                            <div class="col-lg-9 col-sm-9 col-8">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar"
                                                        style="width:{{ round(((float) $numberrating5 / $ratingcount) * 100) }}%"
                                                        aria-valuenow="{{ $numberrating5 / $ratingcount }}"
                                                        aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-sm-1 col-1">
                                                <div class="progress-value">
                                                    {{ round(((float) $numberrating5 / $ratingcount) * 100) . '%' }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ITEM -->
                                    <div class="progress-item">
                                        <div class="row">
                                            <div class="col-lg-2 col-sm-2 col-3">
                                                <div class="progress-stars">4 star</div>
                                            </div>
                                            <div class="col-lg-9 col-sm-9 col-8">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar"
                                                        style="width: {{ round(((float) $numberrating4 / $ratingcount) * 100) }}%"
                                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-sm-1 col-1">
                                                <div class="progress-value">
                                                    {{ round(((float) $numberrating4 / $ratingcount) * 100) }}%
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ITEM -->
                                    <div class="progress-item">
                                        <div class="row">
                                            <div class="col-lg-2 col-sm-2 col-3">
                                                <div class="progress-stars">3 star</div>
                                            </div>
                                            <div class="col-lg-9 col-sm-2 col-8">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar"
                                                        style="width: {{ round(((float) $numberrating3 / $ratingcount) * 100) }}%"
                                                        aria-valuenow="8" aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-sm-1 col-1">
                                                <div class="progress-value">
                                                    {{ round(((float) $numberrating3 / $ratingcount) * 100) }}%
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ITEM -->
                                    <div class="progress-item">
                                        <div class="row">
                                            <div class="col-lg-2 col-sm-2 col-3">
                                                <div class="progress-stars">2 star</div>
                                            </div>
                                            <div class="col-lg-9 col-sm-9 col-8">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar"
                                                        style="width: {{ round(((float) $numberrating2 / $ratingcount) * 100) }}%"
                                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-sm-1 col-1">
                                                <div class="progress-value">
                                                    {{ round(((float) $numberrating2 / $ratingcount) * 100) }}%
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ITEM -->
                                    <div class="progress-item">
                                        <div class="row">
                                            <div class="col-lg-2 col-sm-2 col-3">
                                                <div class="progress-stars">1 star</div>
                                            </div>
                                            <div class="col-lg-9 col-sm-9 col-8">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar"
                                                        style="width: {{ round(((float) $numberrating1 / $ratingcount) * 100) }}%"
                                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-sm-1 col-1">
                                                <div class="progress-value">
                                                    {{ round(((float) $numberrating1 / $ratingcount) * 100) }}%
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @foreach ($testimonials as $testimonial)
                            <div class="review-box">
                                <figure class="review-author">
                                    <img src="{{ asset('storage/users/thumbnail/' . $testimonial->user->src) }}"
                                        alt="Image">
                                </figure>
                                <div class="review-contentt">
                                    <div class="rating">
                                        @for ($i = 0; $i < $testimonial->rating; $i++)
                                            <i class="fa fa-star voted" aria-hidden="true"></i>
                                        @endfor
                                    </div>
                                    <div class="review-info">
                                        {{ $testimonial->user->name }} –
                                        {{ date('d-m-Y', strtotime($testimonial->created_at)) }}
                                    </div>
                                    <div class="review-text">
                                        <p>
                                            {{ $testimonial->text }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
                <div class="similar-rooms">
                    <div class="section-title sm">
                        <h4>SIMILAR ROOMS</h4>
                        <p class="section-subtitle">Leave your review</p>
                    </div>
                    <div class="row">
                        <!-- ITEM -->
                        @foreach ($randrooms as $randroom)
                            @if ($randroom->roomtypes_id == $room->roomtypes_id && $randroom->id != $room->id)
                                <div class="col-md-4">
                                    <div class="room-grid-item">
                                        <figure class="gradient-overlay-hover link-icon">
                                            <a href="/room/{{ $randroom->id }}/show">
                                                @foreach ($randroom->imgs as $i => $imgs)
                                                    @if ($i >= 1)
                                                    @break
                                                @endif
                                                <img src="{{ asset('storage/room/thumbnail/' . $imgs->src) }}"
                                                    class="img-fluid" alt="Image">
                                            @endforeach
                                        </a>
                                        <div class="room-services">
                                            @foreach ($randroom->services as $i => $service)
                                                @if ($i >= 3)
                                                @break
                                            @endif
                                            <i class="fa {{ $service->icon_classname }}"
                                                aria-hidden="true" data-toggle="popover"
                                                data-placement="right" data-trigger="hover"
                                                data-content="{{ $service->small_desc }}"
                                                data-original-title="{{ $service->name }}"></i>
                                        @endforeach
                                    </div>
                                    <div class="room-price">€{{ $randroom->price }} / night</div>
                                </figure>
                                <div class="room-info">
                                    <h2 class="room-title">
                                        <a
                                            href="/room/{{ $randroom->id }}/show">{{ $randroom->name }}</a>
                                    </h2>
                                    <p>Enjoy our {{ $randroom->type->name }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <!-- SIDEBAR -->
    <div class="col-lg-3 col-12">
        <div class="sidebar">
            <!-- WIDGET -->
            <aside class="widget noborder">
                <div class="vertical-booking-form">
                    <div id="booking-notification" class="notification"></div>
                    <h3 class="form-title">BOOK ROOM {{ strtoupper($room->name) }}</h3>
                    <div class="inner">
                        <form action="/booking/store" method="post">
                            @csrf
                            <!-- EMAIL -->
                            @if(Auth::user() == true)
                            <div class="form-group">
                                <input class="form-control" name="email" type="email"
                                    placeholder="Your Email Address"
                                    value="{{ Auth::user() ? Auth::user()->email : '' }}" disabled>
                            </div>
                            @endif
                            <!-- ROOM ID -->
                            <div class="form-group">
                                <input name="room_id" value="{{ $room->id }}" hidden>
                            </div>

                            <!-- ROOM TYPE -->
                            <div class="form-group">
                                <input name="roomtype_id" value="{{ $room->type->id }}" hidden>
                            </div>
                            <!-- DATE -->
                            <div class="form-group">
                                <div class="form_date">
                                    <input type="text" class="datepicker form-control"
                                        name="date_start" placeholder="Slect Arrival & Departure Date"
                                        readonly="readonly">
                                </div>
                            </div>
                            <!-- GUESTS -->
                            <div class="form-group">
                                <div class="panel-dropdown">
                                    <div class="form-control guestspicker">Guests
                                        <span class="gueststotal"></span>
                                    </div>
                                    <div class="panel-dropdown-content">
                                        <div class="guests-buttons">
                                            <label>Adults
                                                <a href="#" title="" data-toggle="popover"
                                                    data-placement="top" data-trigger="hover"
                                                    data-content="18+ years" data-original-title="Adults">
                                                    <i class="fa fa-info-circle"></i>
                                                </a>
                                            </label>
                                            <div class="guests-button">
                                                <div class="minus"></div>
                                                <input type="text" name="number_adults"
                                                    class="booking-guests" value="0">
                                                <div class="plus"></div>
                                            </div>
                                        </div>
                                        <div class="guests-buttons">
                                            <label>Children
                                                <a href="#" title="" data-toggle="popover"
                                                    data-placement="top" data-trigger="hover"
                                                    data-content="Under 18 years"
                                                    data-original-title="Children">
                                                    <i class="fa fa-info-circle"></i>
                                                </a>
                                            </label>
                                            <div class="guests-button">
                                                <div class="minus"></div>
                                                <input type="text" name="number_children"
                                                    class="booking-guests" value="0">
                                                <div class="plus"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- BOOKING BUTTON -->
                            @if (Auth::check() == true)
                                <button type="submit" class="btn btn-dark btn-fw mt20 mb20">BOOK A
                                    ROOM</button>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-dark btn-fw mt20 mb20">LOGIN FIRST</a>
                            @endif
                        </form>
                    </div>
                </div>
            </aside>
        </div>
    </div>
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
                            <a href="{{ route('contact') }}">About Us</a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}">Contact Us</a>
                        </li>
                        <li>
                            <a href="{{ route('gallery') }}">Himara Gallery</a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}">Our Location</a>
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
            <div class="copyrights">&copy; Designed by Louis Tychon
            </div>
        </div>
        <div class="col-md-6">
            <div class="social-media">
                <a class="facebook" data-original-title="Facebook" data-toggle="tooltip" href="#">
                    <i class="fa fa-facebook"></i>
                </a>
                <a class="twitter" data-original-title="Twitter" data-toggle="tooltip" href="#">
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
                <a class="linkedin" data-original-title="Linkedin" data-toggle="tooltip" href="#">
                    <i class="fa fa-linkedin"></i>
                </a>
                <a class="youtube" data-original-title="Youtube" data-toggle="tooltip" href="#">
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

</body>

</html>
