<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function All_Products()
    {
        $products = Product::get();

        return view('Products', compact('products'));
    }
}
