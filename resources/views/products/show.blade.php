@extends('layouts.app')

@section('title', $product->name)

@section('content')
    <div class="bg-white rounded-lg shadow-sm overflow-hidden">
        <div class="md:flex">
            <div class="md:w-1/2">
                <div class="aspect-square relative bg-black p-1">
                    <div class="w-full h-full relative bg-gray-200">
                        <img 
                            src="{{ $product->image_url }}" 
                            alt="{{ $product->name }}" 
                            class="w-full h-full object-cover"
                        >
                    </div>
                </div>
            </div>
            <div class="md:w-1/2 p-6">
                <h1 class="text-2xl font-bold mb-2">{{ $product->name }}</h1>
                
                <div class="flex items-center mb-4">
                    @for($i = 1; $i <= 5; $i++)
                        <svg 
                            class="h-5 w-5 {{ $i <= ($product->rating ?? 0) ? 'text-rose-500 fill-rose-500' : 'text-gray-300 fill-gray-300' }}" 
                            xmlns="http://www.w3.org/2000/svg" 
                            viewBox="0 0 24 24"
                        >
                            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                        </svg>
                    @endfor
                    <span class="ml-2 text-gray-600">({{ $product->rating ?? 0 }}/5)</span>
                </div>
                
                <div class="flex items-center mb-6">
                    <span class="text-3xl font-bold">${{ number_format($product->price, 2) }}</span>
                    @if($product->discount_percentage > 0)
                        <span class="ml-2 text-sm text-gray-500 line-through">${{ number_format($product->price / (1 - $product->discount_percentage / 100), 2) }}</span>
                        <span class="ml-2 bg-rose-100 text-rose-800 text-xs font-semibold px-2 py-1 rounded">{{ $product->discount_percentage }}% OFF</span>
                    @endif
                </div>
                
                <div class="mb-6">
                    <h2 class="text-lg font-semibold mb-2">Description</h2>
                    <p class="text-gray-600">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nisl vel ultricies lacinia, 
                        nisl nisl aliquam nisl, eget aliquam nisl nisl sit amet nisl. Sed euismod, nisl vel ultricies lacinia,
                        nisl nisl aliquam nisl, eget aliquam nisl nisl sit amet nisl.
                    </p>
                </div>
                
                <div class="mb-6">
                    <h2 class="text-lg font-semibold mb-2">Category</h2>
                    <div class="inline-block bg-gray-100 px-3 py-1 rounded-full text-sm">
                        {{ $product->category }}
                    </div>
                </div>
                
                <div class="flex space-x-4">
                    <form action="#" method="POST" class="flex-1">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <button type="submit" class="w-full bg-rose-500 hover:bg-rose-600 text-white py-2 px-4 rounded-md flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            Add to Cart
                        </button>
                    </form>
                    
                    <form action="{{ route('products.toggle-like', $product->id) }}" method="POST">
                        @csrf
                        <input type="hidden" name="liked" value="1">
                        <button type="submit" class="bg-white border border-gray-300 hover:bg-gray-50 text-gray-700 py-2 px-4 rounded-md flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1 text-rose-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                            <span>{{ $product->likes }}</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="mt-12">
        <h2 class="text-xl font-bold mb-6">Related Products</h2>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            @foreach(range(1, 4) as $i)
                <div class="bg-white rounded-md overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                    <div class="aspect-square relative bg-black p-1">
                        <div class="w-full h-full relative bg-gray-200">
                            <img 
                                src="/placeholder.svg?height=300&width=300" 
                                alt="Related Product" 
                                class="w-full h-full object-cover"
                            >
                        </div>
                    </div>
                    <div class="p-3 bg-[#1a1a1a] text-white">
                        <h3 class="font-medium">Related Product {{ $i }}</h3>
                        <div class="flex items-center justify-between">
                            <span class="text-lg">$19.99</span>
                            <button class="h-8 w-8 text-white hover:text-rose-300 hover:bg-transparent">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
