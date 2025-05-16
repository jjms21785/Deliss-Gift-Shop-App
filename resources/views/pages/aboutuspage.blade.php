<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSRF Token -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>@yield('title', 'Deliss Gift Shop')</title>
    @stack('scripts')
    @yield('styles')

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

</head>
<body class="font-helix">

    <!-- Header -->
    <header class="fixed top-0 left-0 right-0 z-50 bg-white shadow">
        @include('components.header')
    </header>

    <!-- Main Content -->
        <main class="pt-48 px-4 max-w-7xl mx-auto space-y-20 font-[Montserrat] text-gray-800">

        <!-- Story Behind -->
        <section class="text-center">
            <h2 class="text-3xl font-bold mb-4 font-['Playfair_Display'] text-rose-400">Story Behind</h2>
            <p class="max-w-3xl mx-auto text-gray-600">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit. 
            </p>
        </section>

        <!-- History -->
        <section>
            <h2 class="text-3xl font-bold text-center mb-10 font-['Playfair_Display'] text-rose-400">History</h2>
            <div class="grid gap-6 md:grid-cols-3">
                @for ($i = 1; $i <= 3; $i++)
                    <div class="bg-gray-100 p-6 rounded-lg shadow">
                        <h3 class="text-xl font-semibold mb-2 text-gray-900">Lorem Ipsum</h3>
                        <p class="text-gray-600">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut perspiciatis...
                        </p>
                    </div>
                @endfor
            </div>
        </section>

        <!-- Services -->
        <section class="text-center">
            <h2 class="text-3xl font-bold mb-4 font-['Playfair_Display'] text-rose-400">Services</h2>
            <p class="max-w-3xl mx-auto text-gray-600">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut perspiciatis unde omnis...
            </p>
        </section>

        <!-- Values -->
        <section class="grid md:grid-cols-2 gap-10 items-center">
            <div class="h-64 bg-gray-200 rounded-lg"></div>
            <div>
                <h2 class="text-3xl font-bold mb-4 font-['Playfair_Display'] text-rose-400">Values</h2>
                <p class="text-gray-600">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut perspiciatis unde omnis...
                </p>
            </div>
        </section>

        <!-- Mission -->
        <section class="grid md:grid-cols-2 gap-10 items-center">
            <div>
                <h2 class="text-3xl font-bold mb-4 font-['Playfair_Display'] text-rose-400">Mission</h2>
                <p class="text-gray-600">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut perspiciatis unde omnis...
                </p>
            </div>
            <div class="h-64 bg-gray-200 rounded-lg"></div>
        </section>

        <!-- Vision -->
        <section class="grid md:grid-cols-2 gap-10 items-center">
            <div class="h-64 bg-gray-200 rounded-lg"></div>
            <div>
                <h2 class="text-3xl font-bold mb-4 font-['Playfair_Display'] text-rose-400">Vision</h2>
                <p class="text-gray-600">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut perspiciatis unde omnis...
                </p>
            </div>
        </section>

        <!-- Terms & Conditions -->
        <section class="text-center">
            <h2 class="text-3xl font-bold mb-4 font-['Playfair_Display'] text-rose-400">Terms & Conditions</h2>
            <p class="max-w-3xl mx-auto text-gray-600">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut perspiciatis unde omnis...
            </p>
        </section>

    </main>

    <!-- Footer -->
    <footer class="text-white pt-10 pb-6 px-8 font-sans" style="background-color: #1E1E1E;">
        <div class="container mx-auto">
            @include('components.footer')
        </div>
</body>
</html>
