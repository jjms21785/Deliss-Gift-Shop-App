<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Deliss Gift Shop')</title>
    @stack('scripts')
    @yield('styles')

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet" />
</head>
<body class="font-montserrat">

<header class="fixed top-0 left-0 right-0 z-50">
    @include('components.header')
</header>

<main class="bg-black text-black min-h-screen">
    <div class="flex flex-col w-full font-sans">
        <!-- Hero Section - Full Page -->
        <div class="relative w-full h-screen overflow-hidden bg-black">
            <img src="{{ asset('images/webpages/image-2.svg') }}" alt="Delicious cookies" class="position: absolute; inset-2 w-full h-full object-cover opacity-80" />
            
            <!-- Text and Button Container -->
            <div class="absolute bottom-24 left-16 md:left-24 max-w-xxl">
                <h1 class="text-white text-left text-3xl md:text-4xl font-bold tracking-widest mb-8">
                    <span class="block">WHERE SWEETNESS MEETS</span>
                    <span class="block">ELEGANCE - COOKIES AND GIFTS</span>
                </h1>
                
                <!-- Shop Now Button -->
                <div class="relative inline-block">
                    <!-- Back layer (outline only) -->
                    <span class="absolute top-1 left-1 w-full h-full border-2 border-gray-300"></span>

                    <!-- Front button -->
                    <a href="#" class="relative inline-flex items-center bg-white text-[#1E1E1E] px-8 py-3 text-3xl md:text-4xl font-bold tracking-widest hover:bg-[#D9D9D9] transition-colors">
                        SHOP NOW
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-2">
                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Products Section -->
    
</main>


<footer>
    @include('components.footer')
</footer>
</body>
</html>
