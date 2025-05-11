<!-- Base Layout Do not modify this -->
 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>@yield('title', 'Deliss Gift Shop')</title>
  <style>
  </style>
</head>
<body>
    <main class="content">
        <header>
            @include('component.header')
        </header>
        @yield('content')
    </main>

    <footer>
        @include('component.footer')
    </footer>
</body>
</html>
