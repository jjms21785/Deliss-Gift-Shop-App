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
    <main class="pt-48 pb-48 px-4 max-w-7xl mx-auto space-y-20 text-gray-800">

        <!-- Story Behind -->
        <section class="text-center relative flex-box">

            <h2 class="text-3xl font-bold mb-4">Story Behind</h2>
            <p class="max-w-3xl mx-auto text-gray-600">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit. 
            </p>
        </section>

        <!-- History -->
        <section>
            <h2 class="text-3xl font-bold text-center mb-10  ">History</h2>
            <div class="grid gap-6 md:grid-cols-3">
                @for ($i = 1; $i <= 3; $i++)
                    <div class="bg-gray-100 p-6 rounded-lg shadow">
                        <h3 class="text-xl font-semibold mb-2 text-gray-900">Lorem Ipsum</h3>
                        <p class="text-gray-600">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                        </p>
                    </div>
                @endfor
            </div>
        </section>

        <!-- Services -->
        <section class="text-center">
            <h2 class="text-3xl font-bold mb-4  ">Services</h2>
            <p class="max-w-3xl mx-auto text-gray-600">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
            </p>
        </section>

        <!-- Values -->
        <section class="grid md:grid-cols-2 gap-10 items-center">
            <div class="h-64 bg-gray-200 rounded-lg"></div>
            <div>
                <h2 class="text-3xl font-bold mb-4  ">Values</h2>
                <p class="text-gray-600">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.                </p>
            </div>
        </section>

        <!-- Mission -->
        <section class="grid md:grid-cols-2 gap-10 items-center">
            <div>
                <h2 class="text-3xl font-bold mb-4  ">Mission</h2>
                <p class="text-gray-600">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.                </p>
            </div>
            <div class="h-64 bg-gray-200 rounded-lg"></div>
        </section>

        <!-- Vision -->
        <section class="grid md:grid-cols-2 gap-10 items-center">
            <div class="h-64 bg-gray-200 rounded-lg"></div>
            <div>
                <h2 class="text-3xl font-bold mb-4  ">Vision</h2>
                <p class="text-gray-600">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.                </p>
            </div>
        </section>

        <!-- Terms & Conditions -->
        <section class="text-center">
            <h2 class="text-3xl font-bold mb-4">Terms & Conditions</h2>
            <p class="mx-auto text-gray-600 text-left">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
<br><br>
Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam. Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est.
Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
<br><br>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ut suscipit turpis. Nullam dapibus ligula sed mauris pulvinar, vel tristique nulla congue. Etiam ut erat a elit vehicula pulvinar. Integer vehicula sem ut convallis vestibulum. In et sagittis risus, at luctus lacus. Sed sed ligula at sapien euismod fringilla sed ac sapien. Curabitur in odio turpis.
<br><br>
Aliquam erat volutpat. In hac habitasse platea dictumst. Cras fermentum, lorem id tincidunt faucibus, leo justo tempor lacus, sed bibendum sapien lorem nec turpis. Pellentesque congue justo nec augue efficitur, at faucibus felis posuere. Donec efficitur, nunc eget rutrum tincidunt, sapien eros porta leo, eget convallis magna mauris nec leo.
<br><br>
Morbi nec tellus non purus malesuada tristique. Suspendisse potenti. Phasellus vitae velit arcu. Duis ut lectus nec nunc suscipit dictum. Vivamus porttitor finibus justo, nec bibendum risus ultrices at. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; In at sapien vehicula, lobortis metus at, gravida ex.
<br><br>
Fusce nec erat ac nulla volutpat fermentum. Nulla facilisi. Sed ac purus turpis. Nulla eget libero arcu. Vestibulum feugiat risus a lectus condimentum, in dictum purus vestibulum. Aenean nec blandit nisl. Cras convallis libero justo, vitae aliquam odio gravida ac.
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
