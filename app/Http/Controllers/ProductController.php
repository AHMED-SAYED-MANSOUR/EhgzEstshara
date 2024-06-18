<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function All_Products(Request $request)
    {
        $query = Product::query();

        // Filtering
        if ($request->filled('category')) {
            $query->whereIn('category', $request->category);
        }
        if ($request->filled('min_price')) {
            $query->where('price', '>=', $request->min_price);
        }
        if ($request->filled('max_price')) {
            $query->where('price', '<=', $request->max_price);
        }
        if ($request->filled('sort_by')) {
            $sort_by = $request->sort_by;
            $query->orderBy($sort_by === 'newest' ? 'created_at' : 'updated_at', $sort_by === 'newest' ? 'desc' : 'asc');
        }

        // Pagination
        $products = $query->paginate(8);

        if ($request->ajax()) {
            return view('partials.products', compact('products'))->render();
        }

        // Categories
        $categories = Product::select('category')->distinct()->get();

        // Brands
        $brands = Product::select('Brand')->distinct()->get();

        // Materials
        $materials = Product::select('Material')->distinct()->get();

        // Colors
        $colors = Product::select('Color')->distinct()->get();

        return view('Products', compact('products', 'categories', 'brands', 'materials', 'colors'));
    }
}
