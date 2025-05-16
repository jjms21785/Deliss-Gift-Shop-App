<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        // Start with a base query
        $query = Product::query();

        // Apply search filter
        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('category', 'like', "%{$search}%");
            });
        }

        // Apply category filter
        if ($request->filled('category')) {
            $categories = $request->input('category');
            if (!is_array($categories)) {
                $categories = [$categories];
            }
            $query->whereIn('category', $categories);
        }

        // Apply price range filter
        if ($request->filled('min_price')) {
            $query->where('price', '>=', $request->input('min_price'));
        }

        if ($request->filled('max_price')) {
            $query->where('price', '<=', $request->input('max_price'));
        }

        // Apply rating filter
        if ($request->filled('rating')) {
            $query->where('rating', '>=', $request->input('rating'));
        }

        // Apply sorting
        $sort = $request->input('sort', '');
        $direction = $request->input('direction', 'asc');

        switch ($sort) {
            case 'price':
                $query->orderBy('price', $direction);
                break;
            case 'top_sales':
                $query->orderBy('likes', $direction === 'desc' ? 'desc' : 'asc');
                break;
            case 'latest':
                $query->orderBy('created_at', $direction === 'desc' ? 'desc' : 'asc');
                break;
            default:
                $query->orderBy('id', $direction);
                break;
        }

        $products = $query->get();

        // Get all available categories for the filter
        $availableCategories = ['FOOD', 'ACCESSORIES', 'BUNDLES'];

        return view('products.index', [
            'products' => $products,
            'availableCategories' => $availableCategories,
            'request' => $request
        ]);
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', ['product' => $product]);
    }

    public function toggleLike(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        
        // In a real app, you would check if the user has already liked the product
        // For this demo, we'll just toggle the like count
        $liked = $request->input('liked', false);
        
        if ($liked) {
            $product->likes += 1;
        } else {
            $product->likes = max(0, $product->likes - 1);
        }
        
        $product->save();
        
        return redirect()->back()->with('success', $liked ? 'Product liked!' : 'Like removed');
    }
}
