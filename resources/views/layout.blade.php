<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','')</title>
    <link rel="icon" type="image/png"href="{{ asset('assets/img/logo2.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>

    <x-navbar></x-navbar>
    <!-- ================= MAIN CONTENT ================= -->
    <main class="min-h-100">

        @yield('content')

    </main>
    <x-footer></x-footer>

</body>

</html>
