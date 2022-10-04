<html>
<head>
    @vite('resources/css/app.css')
</head>

<body>
    @include('back.components.header')
    <main>
        @yield('content')
    </main>
    @include('back.components.footer')
</body>

</html>
