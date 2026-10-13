<!DOCTYPE html>
<html lang="id">
<head>
    <title>@yield('title', 'Toko Praktikum')</title>
</head>
<body>
    <main>
        @yield('content')
        <footer>&copy; {{ date('Y') }}</footer>
    </main>
</body>
</html>