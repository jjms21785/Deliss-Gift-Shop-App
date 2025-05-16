@extends('layouts.login-register')

@section('title', 'Register')

@section('styles')
<!-- No custom styles needed; TailwindCSS handles all -->
@endsection

@section('content')
<div class="relative min-h-screen flex justify-center items-center px-8 pt-15 pb-15 overflow-hidden font-[Montserrat]">
  <!-- Background Image Layer -->
  <div class="absolute inset-0 z-0">
    <img src="{{ asset('images/webpages/image-2.svg') }}" alt="Background" class="w-full h-full object-cover" />
  </div>

  <!-- Foreground Content -->
  <main class="relative z-10 w-full max-w-[1000px] flex rounded-[30px] overflow-hidden">
    <!-- Left Section -->
    <div class="flex-1 bg-[#1c1c1c] p-12 text-center">
      <h2 class="text-[82px] font-extrabold text-pink-500 mb-8">SIGN UP</h2>
      <form>
        <div class="grid grid-cols-2 gap-5 bg-[#1c1c1c] p-8 rounded-lg max-w-[800px] mx-auto">
          <input type="email" placeholder="Email" class="w-full p-3 rounded-lg text-sm bg-white text-black" />
          <input type="text" placeholder="Username" class="w-full p-3 rounded-lg text-sm bg-white text-black" />
          <input type="text" placeholder="Contact Number" class="w-full p-3 rounded-lg text-sm bg-white text-black" />
          <div class="relative flex items-center">
            <input type="password" placeholder="Password" class="w-full pr-10 p-3 rounded-lg text-sm bg-white text-black" />
            <span class="absolute right-3 cursor-pointer">
              <!-- Add eye icon here if needed -->
            </span>
          </div>
          <input type="password" placeholder="Confirm Password" class="w-full p-3 rounded-lg text-sm bg-white text-black" />
          <textarea placeholder="Address" class="col-span-1 row-span-3 w-full min-h-[100px] p-3 rounded-lg text-sm resize-none bg-white text-black"></textarea>
        </div>
        <div class="flex justify-center items-center gap-2 text-xs mt-5 text-white">
          <input type="checkbox" id="terms" required class="w-4 h-4" />
          <label for="terms" class="font-bold underline cursor-pointer">
            ACCEPT THE <a href="#" class="underline">TERMS & CONDITIONS</a>
          </label>
        </div>
        <button type="submit" class="block mx-auto mt-8 px-8 py-4 text-lg font-bold text-black bg-white rounded-[30px] cursor-pointer">
          CREATE
        </button>
      </form>
    </div>

    <!-- Right Section -->
    <div class="flex-1 max-w-[350px] bg-gray-100 text-center p-8 flex flex-col justify-center">
      <div>
        <p class="text-right text-xs mb-[-30px] text-black">EST 2025</p>
        <h2 class="text-[92px] font-extrabold text-pink-500">Deliss</h2>
        <p class="text-xs text-black tracking-wide mb-5">WHERE ELEGANCE MEETS SWEETNESS</p>
        <hr class="border-black mb-5" />
        <p class="w-[70%] mx-auto mb-4 text-xs text-black tracking-widest leading-relaxed">
          USE AN ACCOUNT TO KEEP YOUR ORDERS ON TRACK AND SAFE <br />
          ALREADY HAVE AN ACCOUNT? LOGIN NOW!
        </p>
      </div>

      <a href="{{ route('login') }}">
        <button class="mx-auto w-[175px] py-4 px-6 text-lg font-bold bg-white rounded-[30px] shadow-lg cursor-pointer mb-5">
          LOGIN
        </button>
      </a>

      <hr class="border-black mb-3" />
      <p class="text-xs text-black mb-3">OR USE</p>

      <div class="flex flex-col items-center gap-3">
        <button class="w-[125px] py-2 px-5 text-lg font-bold text-white bg-[#1876EF] rounded-lg shadow-lg cursor-pointer">
          facebook
        </button>
        <button class="w-[125px] py-2 px-5 text-lg font-bold text-gray-600 bg-gray-200 rounded-lg shadow-lg cursor-pointer">
          google
        </button>
      </div>
    </div>
  </main>
</div>
@endsection
