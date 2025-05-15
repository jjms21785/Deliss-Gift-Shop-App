<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deliss</title>
    <!-- Include Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
</head>
<body>
    <?php
    // You can add PHP logic here for dynamic content
    $isLoggedIn = false; // Example variable
    ?>

    <!-- Top navigation bar -->
  <div class="w-full py-1 px-2" style="background-color: #F2F2F2;">
      <div class="flex justify-end space-x-6 text-sm">
          <a href="/about" class="text-gray-700 hover:underline">about us</a>
          <a href="/contacts" class="text-gray-700 hover:underline">contacts</a>
          <a href="/franchising" class="text-gray-700 hover:underline">franchising</a>
      </div>
  </div>
    <!-- Main navigation bar -->
    <header class="w-full text-white py-3 px-4" style="background-color: #1E1E1E;">
        <div class="container mx-auto flex items-center justify-between">
            <!-- Logo -->
            <a href="/" class="text-5xl font-bold mr-8 font-light text-rose-300 font-['Playfair_Display']" style="color:FFAAB0;">Deliss</a>
            <!-- Search bar -->
            <div class="flex-grow mx-4">
                <form action="/search" method="GET" class="flex">
                    <input 
                        type="text" 
                        name="query" 
                        placeholder="lorem ipsum dolor sit amet" 
                        class="w-full px-4 py-2 rounded-l-full" style="background-color: white;"
                    >
                    <button type="submit" class="bg-pink-300 text-gray-800 px-4 py-2 rounded-r-full flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                        Search
                    </button>
                </form>
            </div>
            
            <!-- User actions -->
            <div class="flex items-center space-x-4">
                <?php if ($isLoggedIn): ?>
                    <a href="/account" class="hover:underline">My Account</a>
                <?php else: ?>
                    <a href="/signin" class="flex items-center hover:underline">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        Sign in
                    </a>
                <?php endif; ?>
                
                <a href="/signup" class="px-4 py-2 rounded hover:bg-gray-700" style="border-radius: 21px; background-color: #333333;">
                    Sign up
                </a>
                
                <!-- Shopping cart -->
                <a href="/cart" class="relative">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    <?php
                    // Example cart item count
                    $cartCount = 0;
                    if ($cartCount > 0): 
                    ?>
                    <span class="absolute -top-1 -right-1 bg-red-500 text-white rounded-full text-xs w-5 h-5 flex items-center justify-center">
                        <?php echo $cartCount; ?>
                    </span>
                    <?php endif; ?>
                </a>
            </div>
        </div>
    </header>
</body>
</html>