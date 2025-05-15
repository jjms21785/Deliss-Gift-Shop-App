<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>@yield('title', 'Deliss Gift Shop')</title>
    @stack('scripts')
    @yield('styles')

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
</head>
<body class="font-['Montserrat']">
    <header class="fixed top-0 left-0 right-0 z-50">
        @include('components.header')
    </header>
    
    <main class="bg-white text-white pt-[150px] pb-12 min-h-screen">
        <div class="flex flex-col w-full bg-white font-sans">
            <!-- Hero Section -->
            <div class="relative h-64 bg-black">
                <img src="/placeholder.svg?height=256&width=640" alt="Delicious cookies" class="w-full h-full object-cover opacity-80">
                <div class="absolute inset-0 flex items-center justify-center">
                    <h1 class="text-white text-center text-xl font-medium px-8 leading-relaxed">
                        WHERE SWEETNESS MEETS ELEGANCE, COOKIES AS GIFTS
                    </h1>
                </div>
            </div>

            <!-- Fresh Release Section -->
            <div class="px-4 py-6 bg-white">
                <h2 class="text-black font-bold text-lg mb-4">FRESH RELEASE</h2>

                @foreach ([
                    ['title' => 'LIFE ESSENTIALS: BASIC', 'subtitle' => 'SUMMER BUCKET LIST'],
                    ['title' => 'THE BEST PARTNER:', 'subtitle' => 'COFFEE AND DELISS COOKIES'],
                    ['title' => 'LIMITED TIME OFFER:', 'subtitle' => 'GIFT BOX BUNDLE OF GOODS']
                ] as $release)
                <div class="mb-6">
                    <p class="text-xs text-gray-500 mb-1">May 10, 2025 • Fresh Release</p>
                    <h3 class="font-medium text-sm mb-1">{{ $release['title'] }}</h3>
                    <p class="text-xs text-gray-500 mb-1">{{ $release['subtitle'] }}</p>
                    <p class="text-xs">$20.00</p>
                </div>
                @endforeach

                <div class="flex items-center justify-center mb-4">
                    <div class="bg-rose-300 p-4 w-full max-w-xs">
                        <p class="text-white text-center font-medium text-xl">WAITING FOR IMAGE</p>
                    </div>
                </div>
            </div>

            <!-- Why Deliss Section -->
            <div class="px-4 py-6 bg-white">
                <h2 class="text-black font-bold text-lg mb-4">WHY DELISS...</h2>

                <div class="grid grid-cols-3 gap-2 mb-6">
                    @for ($i = 0; $i < 3; $i++)
                        <div class="bg-rose-300 p-2 flex items-center justify-center aspect-square">
                            <p class="text-white text-center text-xs font-medium">WAITING FOR IMAGE</p>
                        </div>
                    @endfor
                </div>

                <div class="grid grid-cols-3 gap-2 mb-2">
                    <p class="text-xs font-medium text-center">BEHIND DELISS</p>
                    <p class="text-xs font-medium text-center">MISSION</p>
                    <p class="text-xs font-medium text-center">VISION</p>
                </div>
            </div>

            <!-- Recommended Section -->
            <div class="px-4 py-6 bg-white">
                <h2 class="text-black font-bold text-lg mb-4">Recommended</h2>

                <div class="grid grid-cols-3 gap-2 mb-6">
                    @for ($i = 0; $i < 3; $i++)
                        <div class="border border-gray-200 p-2">
                            <h3 class="text-xs font-medium mb-1">Lorem ipsum</h3>
                            <p class="text-[10px] text-gray-500 leading-tight">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                            </p>
                        </div>
                    @endfor
                </div>
            </div>

            <!-- Follow Us Section -->
            <div class="px-4 py-6 bg-white">
                <h2 class="text-black font-bold text-lg mb-4">FOLLOW US ON</h2>

                <div class="grid grid-cols-2 gap-2 mb-2">
                    @for ($i = 0; $i < 2; $i++)
                        <div class="border border-gray-200 h-16 flex items-center justify-center">
                            <p class="text-gray-300">Social Media</p>
                        </div>
                    @endfor
                </div>

                <div class="grid grid-cols-2 gap-2">
                    @for ($i = 0; $i < 2; $i++)
                        <div class="border border-gray-200 h-16 flex items-center justify-center">
                            <p class="text-gray-300">Social Media</p>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </main>

    <footer>
        @include('components.footer')
    </footer>
</body>
</html>
