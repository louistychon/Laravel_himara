<html>

<head>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <link rel="apple-touch-icon-precomposed" href="images/favicon-apple.png" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/fonts/flaticon.css') }}" >
    <!-- ========== FAVICON ========== -->
    <link rel="apple-touch-icon-precomposed" href="images/favicon-apple.png" />
    <link rel="icon" href="images/favicon.png">
</head>

<body>
    <header class="">
        @include('back.components.header')
    </header>
    <main class="">
        @include('back.layouts.flash')
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
                    @yield('content')
                </div>
            </div>
        </div>
    </main>
    <footer></footer>
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
</body>

</html>
