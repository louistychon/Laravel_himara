<html>
<head>
    @vite('resources/css/app.css')
</head>

<body>
    @include('back.components.header')
    <header class="horizontal-header sticky-header" data-menutoggle="991">
        <div class="container">
            <!-- BRAND -->
            <div class="brand">
                <div class="logo">
                    <a href="{{ route('home') }}">
                        @foreach ($hotelinfo as $info)
                        <img src="{{ asset('/storage/logo/' . $info->logo) }}" alt="Hotel Himara">
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
                    <li class="menu-item dropdown active">
                        <a href="{{ url('/') }}">HOME</a>
                    </li>
                    <li class="menu-item dropdown">
                        <a href="{{ url('/roomlist') }}">ROOMS</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>
    <footer></footer>
</body>

</html>
