@extends('layouts.login-register')

@section('title', 'Log In')

@section('styles')
<!-- TailwindCSS handles all styles -->
@endsection

@section('content')
<div class="relative min-h-screen flex justify-center items-center px-8 pb-15 pb-15 overflow-hidden font-[Montserrat]">
  <!-- Background Layer -->
  <div class="absolute inset-0 z-0">
    <img src="{{ asset('images/webpages/image-2.svg') }}" alt="Background" class="w-full h-full object-cover" />
  </div>

  <!-- Foreground Content -->
  <main class="relative z-10 w-full max-w-[950px] flex rounded-[30px] -mt-15 overflow-hidden">
    <!-- Left Section -->
    <div class="flex-1 bg-[#1c1c1c] p-12 text-center">
      <h2 class="text-[82px] font-extrabold text-rose-300 m-0">LOG IN</h2>
      <form method="POST" action="">
        @csrf
        <div class="grid grid-cols-1 gap-5 bg-[#1c1c1c] p-8 rounded-lg max-w-[500px] mx-auto">
          <input
            type="text"
            name="username"
            placeholder="Username"
            required
            class="w-full p-3 rounded-lg text-sm bg-white text-black"
          />
          <div class="relative flex items-center">
            <input
              type="password"
              name="password"
              placeholder="Password"
              required
              class="w-full pr-10 p-3 rounded-lg text-sm bg-white text-black"
            />
            <span class="absolute right-3 cursor-pointer select-none">👁️</span>
          </div>
          <div class="text-xs text-gray-300 mt-2">
            <p>
              DID YOU FORGOT YOUR PASSWORD?
              <a href="#" class="underline font-bold text-white cursor-pointer">CLICK HERE</a>
            </p>
          </div>
        </div>
        <button
          type="submit"
          class="block mx-auto mt-8 px-8 py-4 text-lg font-bold text-black bg-white rounded-[30px] cursor-pointer"
        >
          LOG IN
        </button>
      </form>
    </div>

    <!-- Right Section -->
    <div class="flex-1 max-w-[450px] bg-white text-center p-12 flex flex-col justify-center">
      <div>
        <p class="text-right text-xs mb-[-30px] text-black w-[330px] mx-auto">EST 2025</p>
        <h2 class="text-[92px] font-extrabold text-rose-300">Deliss</h2>
        <p class="text-xs text-black tracking-wide mb-5 mx-auto w-[330px]">
          WHERE ELEGANCE MEETS SWEETNESS
        </p>
        <hr class="border-black mb-5 w-[330px] mx-auto" />
        <p class="text-xs text-black tracking-wide leading-relaxed mb-5 mx-auto w-[80%]">
          USE AN ACCOUNT TO KEEP YOUR ORDERS ON TRACK AND SAFE <br />
          DON'T HAVE AN ACCOUNT YET?
        </p>
      </div>
      <a href="{{ route('register') }}">
        <button
          class="w-[150px] mx-auto py-2.5 text-lg font-bold bg-white rounded-[30px] shadow-md cursor-pointer mb-4"
        >
          SIGN UP
        </button>
      </a>
      <p class="text-black text-[11px] mt-5">TO KEEP UPDATED, FOLLOW OUR SOCIALS!</p>
      <div class="flex justify-center items-center gap-5 w-[80%] mx-auto mt-2">
        <img src="{{ asset('images/webpages/fb-icon.svg') }}" alt="facebook" class="h-6 w-6 rounded" />
        <button class="text-[15px] ml-[-15px] font-bold text-gray-600 bg-transparent cursor-pointer">
          facebook
        </button>
        <img src="{{ asset('images/webpages/ig-icon.svg') }}" alt="instagram" class="h-6 w-6 rounded" />
        <button class="text-[15px] ml-[-15px] font-bold text-gray-600 bg-transparent  cursor-pointer">
          instagram
        </button>
        <img src="{{ asset('images/webpages/tiktok-icon.svg') }}" alt="tiktok" class="h-6 w-6 rounded" />
        <button class="text-[15px] ml-[-15px] font-bold text-gray-600 bg-transparent cursor-pointer">
          tiktok
        </button>
      </div>
    </div>
  </main>
</div>
@endsection
