@extends('layouts.app')

@section('title', 'Products')

@section('content')
    <div class="flex flex-col md:flex-row gap-4">
        <!-- Filter Sidebar -->
        <div class="w-full md:w-64 bg-white p-4 rounded-lg shadow-sm" x-data="{ 
            openSections: ['sort', 'category', 'rating', 'price'],
            toggleSection(section) {
                if (this.openSections.includes(section)) {
                    this.openSections = this.openSections.filter(s => s !== section);
                } else {
                    this.openSections.push(section);
                }
            }
        }">
            <div class="flex items-center justify-between mb-6">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4h13M3 8h9m-9 4h6m4 0l4-4m0 0l4 4m-4-4v12" />
                    </svg>
                    <h2 class="text-lg font-bold uppercase">Search Filter</h2>
                </div>
                <a href="{{ route('products.index') }}" class="text-gray-500 hover:text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                    Reset
                </a>
            </div>
            
            <form id="filter-form" action="{{ route('products.index') }}" method="GET">
                <!-- Search Input -->
                <div class="mb-6">
                    <div class="relative">
                        <svg xmlns="http://www.w3.org/2000/svg" class="absolute left-2 top-1/2 transform -translate-y-1/2 h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                        <input 
                            type="text" 
                            name="search" 
                            placeholder="Search products..." 
                            value="{{ request('search') }}" 
                            class="pl-8 bg-white border-gray-200 w-full rounded-md border py-2"
                        >
                    </div>
                </div>

                <!-- Sort By -->
                <div class="mb-6">
                    <div class="flex items-center justify-between cursor-pointer" @click="toggleSection('sort')">
                        <h3 class="text-sm font-medium mb-2">SORT BY</h3>
                        <svg x-show="!openSections.includes('sort')" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                        <svg x-show="openSections.includes('sort')" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                        </svg>
                    </div>
                    
                    <div x-show="openSections.includes('sort')" class="space-y-2 mt-2">
                        @php
                            $sortOptions = [
                                'price' => 'PRICE',
                                'relevance' => 'RELEVANCE',
                                'latest' => 'LATEST',
                                'top_sales' => 'TOP SALES'
                            ];
                            $currentSort = request('sort', '');
                            $currentDirection = request('direction', 'asc');
                        @endphp
                        
                        @foreach($sortOptions as $value => $label)
                            <div class="flex items-center">
                                <input 
                                    type="radio" 
                                    id="sort_{{ $value }}" 
                                    name="sort" 
                                    value="{{ $value }}" 
                                    {{ $currentSort == $value ? 'checked' : '' }}
                                    class="mr-2 text-rose-500 focus:ring-rose-500"
                                >
                                <label for="sort_{{ $value }}" class="text-sm">{{ $label }}</label>
                            </div>
                        @endforeach
                        
                        <!-- Sort direction buttons -->
                        <div class="mt-4 bg-white p-3 rounded-md border border-gray-200">
                            <p class="text-sm font-medium mb-2">Sort Direction:</p>
                            <div class="flex items-center space-x-2 mb-2">
                                <input
                                    type="radio"
                                    id="sort-asc"
                                    name="direction"
                                    value="asc"
                                    {{ $currentDirection == 'asc' ? 'checked' : '' }}
                                    class="text-rose-500 focus:ring-rose-500"
                                >
                                <label for="sort-asc" class="text-sm cursor-pointer flex items-center">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-4 w-4 mr-1"
                                        viewBox="0 0 20 20"
                                        fill="currentColor"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"
                                        />
                                    </svg>
                                    Ascending
                                </label>
                            </div>
                            <div class="flex items-center space-x-2">
                                <input
                                    type="radio"
                                    id="sort-desc"
                                    name="direction"
                                    value="desc"
                                    {{ $currentDirection == 'desc' ? 'checked' : '' }}
                                    class="text-rose-500 focus:ring-rose-500"
                                >
                                <label for="sort-desc" class="text-sm cursor-pointer flex items-center">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-4 w-4 mr-1"
                                        viewBox="0 0 20 20"
                                        fill="currentColor"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M14.707 10.293a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L9 12.586V5a1 1 0 012 0v7.586l2.293-2.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"
                                        />
                                    </svg>
                                    Descending
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="h-px bg-gray-300 my-6"></div>

                <!-- Categories -->
                <div class="mb-6">
                    <div class="flex items-center justify-between cursor-pointer" @click="toggleSection('category')">
                        <h3 class="text-sm font-medium mb-2">BY CATEGORY</h3>
                        <svg x-show="!openSections.includes('category')" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                        <svg x-show="openSections.includes('category')" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                        </svg>
                    </div>
                    
                    <div x-show="openSections.includes('category')" class="space-y-3 mt-2">
                        @php
                            $selectedCategories = request('category', []);
                            if (!is_array($selectedCategories)) {
                                $selectedCategories = [$selectedCategories];
                            }
                        @endphp
                        
                        @foreach($availableCategories as $category)
                            <div class="flex items-center space-x-2">
                                <input 
                                    type="checkbox" 
                                    id="category_{{ $category }}" 
                                    name="category[]" 
                                    value="{{ $category }}" 
                                    {{ in_array($category, $selectedCategories) ? 'checked' : '' }}
                                    class="rounded border-gray-300 text-rose-500 focus:ring-rose-500"
                                >
                                <label 
                                    for="category_{{ $category }}" 
                                    class="text-sm cursor-pointer {{ in_array($category, $selectedCategories) ? 'font-medium' : '' }}"
                                >
                                    {{ $category }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="h-px bg-gray-300 my-6"></div>

                <!-- Rating -->
                <div class="mb-6">
                    <div class="flex items-center justify-between cursor-pointer" @click="toggleSection('rating')">
                        <h3 class="text-sm font-medium mb-2">RATING</h3>
                        <svg x-show="!openSections.includes('rating')" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                        <svg x-show="openSections.includes('rating')" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                        </svg>
                    </div>
                    
                    <div x-show="openSections.includes('rating')" class="space-y-2 mt-2">
                        @php
                            $currentRating = request('rating', 0);
                        @endphp
                        
                        @foreach(range(5, 1) as $ratingValue)
                            <div class="flex items-center p-2 rounded-md cursor-pointer {{ $currentRating == $ratingValue ? 'bg-gray-200' : 'hover:bg-gray-100' }}">
                                <input 
                                    type="radio" 
                                    id="rating_{{ $ratingValue }}" 
                                    name="rating" 
                                    value="{{ $ratingValue }}" 
                                    {{ $currentRating == $ratingValue ? 'checked' : '' }}
                                    class="mr-2 text-rose-500 focus:ring-rose-500"
                                >
                                <label for="rating_{{ $ratingValue }}" class="flex items-center w-full cursor-pointer">
                                    <div class="flex">
                                        @for($i = 1; $i <= 5; $i++)
                                            <svg 
                                                class="h-5 w-5 {{ $i <= $ratingValue ? 'text-rose-500 fill-rose-500' : 'text-gray-300 fill-gray-300' }}" 
                                                xmlns="http://www.w3.org/2000/svg" 
                                                viewBox="0 0 24 24"
                                            >
                                                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                            </svg>
                                        @endfor
                                    </div>
                                    <span class="ml-2 text-sm">{{ $ratingValue < 5 ? '& Up' : '' }}</span>
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="h-px bg-gray-300 my-6"></div>

                <!-- Price Range -->
                <div>
                    <div class="flex items-center justify-between cursor-pointer" @click="toggleSection('price')">
                        <h3 class="text-sm font-medium mb-2">PRICE RANGE</h3>
                        <svg x-show="!openSections.includes('price')" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                        <svg x-show="openSections.includes('price')" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                        </svg>
                    </div>
                    
                    <div x-show="openSections.includes('price')" class="mt-4">
                        <div class="flex items-center space-x-2">
                            <div class="relative flex-1">
                                <span class="absolute left-2 top-1/2 transform -translate-y-1/2 text-gray-500">$</span>
                                <input
                                    type="number"
                                    name="min_price"
                                    min="0"
                                    step="0.01"
                                    value="{{ request('min_price') }}"
                                    placeholder="Min"
                                    class="pl-6 bg-white border-gray-200 w-full rounded-md border py-2"
                                >
                            </div>
                            <span>—</span>
                            <div class="relative flex-1">
                                <span class="absolute left-2 top-1/2 transform -translate-y-1/2 text-gray-500">$</span>
                                <input
                                    type="number"
                                    name="max_price"
                                    min="0"
                                    step="0.01"
                                    value="{{ request('max_price') }}"
                                    placeholder="Max"
                                    class="pl-6 bg-white border-gray-200 w-full rounded-md border py-2"
                                >
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Apply Filters Button -->
                <div class="mt-6">
                    <button 
                        type="submit" 
                        class="w-full bg-rose-500 hover:bg-rose-600 text-white py-2 px-4 rounded-md"
                    >
                        Apply Filters
                    </button>
                </div>
            </form>
        </div>

        <!-- Product Grid -->
        <div class="flex-1 p-4">
            <div class="mb-4 flex justify-between items-center">
                <p class="text-sm text-gray-500">
                    @if(request()->hasAny(['search', 'category', 'min_price', 'max_price', 'rating', 'sort']))
                        Showing <span class="font-medium">{{ $products->count() }}</span> filtered products
                    @else
                        Showing <span class="font-medium">{{ $products->count() }}</span> products
                    @endif
                </p>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach($products as $product)
                    <div class="bg-white rounded-md overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                        <div class="relative">
                            <div class="aspect-square relative bg-black p-1">
                                <div class="w-full h-full relative bg-gray-200">
                                    <img 
                                        src="{{ $product->image_url }}" 
                                        alt="{{ $product->name }}" 
                                        class="w-full h-full object-cover"
                                    >
                                </div>
                            </div>
                            <div class="absolute bottom-2 right-2 flex items-center bg-white/80 rounded-full px-2 py-1">
                                <form action="{{ route('products.toggle-like', $product->id) }}" method="POST" class="flex items-center">
                                    @csrf
                                    <input type="hidden" name="liked" value="1">
                                    <button type="submit" class="flex items-center focus:outline-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-rose-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg>
                                        <span class="text-xs">{{ $product->likes }}</span>
                                    </button>
                                </form>
                            </div>
                        </div>

                        <div class="p-3 bg-[#1a1a1a] text-white">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h3 class="font-medium">{{ $product->name }}</h3>
                                    <div class="flex items-center">
                                        <span class="text-lg">${{ number_format($product->price, 2) }}</span>
                                        <span class="ml-2 text-xs text-gray-400">({{ $product->discount_percentage }}% off)</span>
                                    </div>
                                </div>
                                <form action="#" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <button type="submit" class="h-8 w-8 text-white hover:text-rose-300 hover:bg-transparent">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            
            @if($products->isEmpty())
                <div class="flex items-center justify-center p-12 text-center">
                    <div>
                        <h3 class="text-lg font-medium mb-2">No products found</h3>
                        <p class="text-gray-500">Try adjusting your filters or search term</p>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
