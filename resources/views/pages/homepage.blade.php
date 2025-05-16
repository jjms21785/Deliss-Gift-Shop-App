<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>@yield('title', 'Deliss Gift Shop')</title>

    <!-- Vite CSS & JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Page-specific Scripts and Styles -->
    @stack('scripts')
    @yield('styles')

    <!-- Optional: Favicon -->
    <link rel="icon" href="{{ asset('images/food/chocochips.svg') }}" type="image/png">
</head>

<body class="font-hellix">

<header class="fixed top-0 left-0 right-0 z-50">
    @include('components.header')
</header>

<main class="font-hellix bg-white text-black min-h-screen">
    <div class="flex flex-col w-full font-sans">
        <!-- Hero Section - Full Page -->
        <div class="relative w-full h-screen overflow-hidden bg-black">
            <img src="{{ asset('images/webpages/image-2.svg') }}" alt="Delicious cookies" class="absolute inset-0 w-full h-full object-cover opacity-80" />
            
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
                    <a href="{{ route('products.index') }}" class="relative inline-flex items-center bg-white text-[#1E1E1E] px-8 py-3 text-2xl md:text-3xl font-bold tracking-widest hover:bg-[#D9D9D9] transition-colors">
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
    <div class="px-4 py-12 bg-white max-w-7xl mx-auto">
        <div class="px-4 md:px-8 lg:px-12">
            <div class="flex flex-col md:flex-row items-start gap-8">
                <!-- Left content -->
                <div class="w-full md:w-1/2 ">
                    <h2 class="text-black font-bold text-4xl md:text-5xl mb-6">FRESH RELEASE</h2>

                    <!-- Product 1 -->
                    <div class="mb-6">
                        <p class="text-lg text-gray-600 mb-1">May 10, 2025 • Fresh Release</p>
                        <h3 class="text-2xl font-semibold mb-1 uppercase">Life essentials: basic</h3>
                        <p class="text-lg text-gray-600 mb-2 uppercase">Summer bucket list</p>
                        <p class="text-xl mb-3">$20.00</p>
                        <hr class="border-gray-300">
                    </div>

                    <!-- Product 2 -->
                    <div class="mb-6 pt-2">
                        <p class="text-lg text-gray-600 mb-1">May 10, 2025 • Fresh Release</p>
                        <h3 class="text-2xl font-semibold mb-1 uppercase">The best partner:</h3>
                        <p class="text-lg text-gray-600 mb-2 uppercase">Coffee and deliss cookies</p>
                        <p class="text-xl mb-3">$20.00</p>
                        <hr class="border-gray-300">
                    </div>

                    <!-- Product 3 -->
                    <div class="pt-2">
                        <p class="text-lg text-gray-600 mb-1">May 10, 2025 • Fresh Release</p>
                        <h3 class="text-2xl font-semibold mb-1 uppercase">Limited time offer:</h3>
                        <p class="text-lg text-gray-600 mb-2 uppercase">Gift box bundle of goods</p>
                        <p class="text-xl">$20.00</p>
                    </div>
                </div>


                <!-- Right container - Image -->
                <div class="w-full md:w-1/2 flex justify-center items-center">
                    <img src="{{ asset('images/webpages/recommended-1.svg') }}" alt="Recommended Image" class="w-full h-auto object-contain">
                </div>
            </div>
        </div>
    </div>

    <!-- Why Deliss Section -->
    <div class="px-4 py-12 bg-white max-w-7xl mx-auto">
        <h2 class="text-black font-bold text-2xl md:text-3xl mb-6">WHY DELISS...</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
            <!-- Card 1 -->
            <div class="flex flex-col items-center text-center">
                <a href="{{ route('aboutus') }}" class="w-full">
                    <div class="relative aspect-square w-full overflow-hidden rounded-md">
                        <img src="{{ asset('images/webpages/bundle-1.svg') }}" alt="Behind Deliss" class="object-cover w-full h-full" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-black/40 z-10"></div>
                        <div class="absolute inset-0 flex items-center justify-center z-20">
                        <div class="flex flex-col items-center justify-center text-white px-6 max-w-2xl text-center space-y-6">
                            <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.
                            </p>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 opacity-80" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.522 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.478 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </div>
                        </div>
                    </div>
                </a>
                <p class="text-black text-sm font-medium mt-2">BEHIND DELISS</p>
            </div>

            <!-- Card 2 -->
            <div class="flex flex-col items-center text-center">
                <a href="{{ route('aboutus') }}" class="w-full">
                    <div class="relative aspect-square w-full overflow-hidden rounded-md">
                        <img src="{{ asset('images/webpages/bundle-1.svg') }}" alt="Mission" class="object-cover w-full h-full" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-black/40 z-10"></div>
                        <div class="absolute inset-0 flex items-center justify-center z-20">
                        <div class="flex flex-col items-center justify-center text-white px-6 max-w-2xl text-center space-y-6">
                            <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.
                            </p>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 opacity-80" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.522 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.478 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </div>
                        </div>
                    </div>
                </a>
                <p class="text-black text-sm font-medium mt-2">MISSION</p>
            </div>

            <!-- Card 3 -->
            <div class="flex flex-col items-center text-center">
                <a href="{{ route('aboutus') }}" class="w-full">
                    <div class="relative aspect-square w-full overflow-hidden rounded-md">
                        <img src="{{ asset('images/webpages/bundle-1.svg') }}" alt="Vision" class="object-cover w-full h-full" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-black/40 z-10"></div>
                        <div class="absolute inset-0 flex items-center justify-center z-20">
                        <div class="flex flex-col items-center justify-center text-white px-6 max-w-2xl text-center space-y-6">
                            <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.
                            </p>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 opacity-80" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.522 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.478 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </div>
                        </div>
                    </div>
                </a>
                <p class="text-black text-sm font-medium mt-2">VISION</p>
            </div>
        </div>
    </div>

    <!-- Recommended Section -->
    <div class="px-4 py-12 bg-white max-w-7xl mx-auto">
        <h2 class="text-black font-bold text-2xl md:text-3xl mb-6">RECOMMENDED</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
            <div class="border border-gray-200 p-6 rounded-md hover:shadow-md transition-shadow">
                <h3 class="text-lg font-medium mb-2">Lorem ipsum</h3>
                <p class="text-sm text-gray-500 leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                </p>
            </div>
            <div class="border border-gray-200 p-6 rounded-md hover:shadow-md transition-shadow">
                <h3 class="text-lg font-medium mb-2">Lorem ipsum</h3>
                <p class="text-sm text-gray-500 leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                </p>
            </div>
            <div class="border border-gray-200 p-6 rounded-md hover:shadow-md transition-shadow">
                <h3 class="text-lg font-medium mb-2">Lorem ipsum</h3>
                <p class="text-sm text-gray-500 leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                </p>
            </div>
        </div>
    </div>

    <!-- Follow Us Section -->
    <div class="px-4 py-12 bg-white max-w-7xl mx-auto">
        <h2 class="text-black font-bold text-2xl md:text-3xl mb-6">FOLLOW US ON</h2>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-4">
            <div class="border border-gray-200 p-4 rounded-md flex items-center justify-center hover:bg-gray-50 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-gray-500 mr-2">
                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                </svg>
                <span>Instagram</span>
            </div>
            <div class="border border-gray-200 p-4 rounded-md flex items-center justify-center hover:bg-gray-50 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-gray-500 mr-2">
                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                </svg>
                <span>Facebook</span>
            </div>
            <div class="border border-gray-200 p-4 rounded-md flex items-center justify-center hover:bg-gray-50 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-gray-500 mr-2">
                    <path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"></path>
                </svg>
                <span>Twitter</span>
            </div>
            <div class="border border-gray-200 p-4 rounded-md flex items-center justify-center hover:bg-gray-50 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-gray-500 mr-2">
                    <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                    <rect x="2" y="9" width="4" height="12"></rect>
                    <circle cx="4" cy="4" r="2"></circle>
                </svg>
                <span>LinkedIn</span>
            </div>
        </div>
    </div>
</main>

    <!-- Footer -->
    <footer class="text-white pt-10 pb-6 px-8 font-sans" style="background-color: #1E1E1E;">
        <div class="container mx-auto">
            @include('components.footer')
        </div>
    </footer>
</body>
</html>
