<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>

    <!-- Di sini Anda akan menempatkan link CSS -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
</head>
<body>
    <header>
        <!-- Di sini bisa ada navigasi atau header content -->
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Di sini bisa ada footer content -->
        <!-- Dan mungkin ada gambar di footer -->
        <img src="{{ asset('assets/img/ity-icon.png') }}" alt="..." />
    </footer>

    <!-- Di sini Anda akan menempatkan script JS -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
