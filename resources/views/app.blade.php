<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Praktikum Laravel')</title>
    @stack('styles')
</head>
<body>
    @include('partials.navbar')
    
    <main style="padding: 20px;">
        @yield('content')
    </main>

    <footer>
        <hr>
        <p>&copy; {{ date('Y') }} - Praktikum Laravel</p>
    </footer>

    @stack('scripts')
</body>
</html>