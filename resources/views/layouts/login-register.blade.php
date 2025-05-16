 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Deliss Gift Shop')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('scripts')
    @yield('styles')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Inter:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        @include('components.header')
    </header>
    
    <main>
        @yield('content')
    </main>

    <footer>
        @include('components.footer')
    </footer>
</body>
</html>