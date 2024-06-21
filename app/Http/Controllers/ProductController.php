<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        if ($request->filled('color')) {
            $query->whereIn('Color', $request->color);
        }
        if ($request->filled('Brand')) {
            $query->whereIn('Brand', $request->Brand);
        }
        if ($request->filled('Material')) {
            $query->whereIn('Material', $request->Material);
        }
        if ($request->filled('sort_by')) {
            $sort_by = $request->sort_by;
            $query->orderBy($sort_by === 'newest' ? 'created_at' : 'updated_at', $sort_by === 'newest' ? 'desc' : 'asc');
        }

        // New code for filtering by intersection
        if ($request->filled('Brand') && $request->filled('Color') && $request->filled('Material')) {
            $query->whereIn('Brand', $request->Brand)
                ->whereIn('Color', $request->Color)
                ->whereIn('Material', $request->Material);
        } elseif ($request->filled('Brand') && $request->filled('Color')) {
            $query->whereIn('Brand', $request->Brand)
                ->whereIn('Color', $request->Color);
        } elseif ($request->filled('Brand') && $request->filled('Material')) {
            $query->whereIn('Brand', $request->Brand)
                ->whereIn('Material', $request->Material);
        } elseif ($request->filled('Color') && $request->filled('Material')) {
            $query->whereIn('Color', $request->Color)
                ->whereIn('Material', $request->Material);
        } elseif ($request->filled('Brand')) {
            $query->whereIn('Brand', $request->Brand);
        } elseif ($request->filled('Color')) {
            $query->whereIn('Color', $request->Color);
        } elseif ($request->filled('Material')) {
            $query->whereIn('Material', $request->Material);
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

        $user = Auth::user();
        $count = '';

        if ($user)
            $count = CartItem::where('user_id', $user->id)->count();

        return view('Products', compact('products', 'categories', 'brands', 'materials', 'colors' , 'count' ));
    }
}
