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
