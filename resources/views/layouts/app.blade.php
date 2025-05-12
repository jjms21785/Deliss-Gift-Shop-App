<!-- Base Layout Do not modify this -->
 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>@yield('title', 'Deliss Gift Shop')</title>
  @stack('scripts')
  @yield('styles')
</head>
<body>
    <header>
        @include('component.header')
    </header>
    
    <main>
        @yield('content')
    </main>

    <footer>
        @include('component.footer')
    </footer>
</body>
</html>
