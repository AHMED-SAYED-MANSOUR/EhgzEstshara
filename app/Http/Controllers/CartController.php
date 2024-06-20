<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    protected $user;
    protected $cart;

    public function __construct()
    {
        // Get the current authenticated user
        $this->user = Auth::user();

        // Find or create the cart for the current user
        if ($this->user) {
            $this->cart = Cart::firstOrCreate(['user_id' => $this->user->id]);
        }
    }

    public function get_cart_items()
    {
        if (!$this->user) {
            return [];
        }

        $items = explode('-', $this->cart->items);
        $products = [];

        foreach ($items as $item)
        {
            $product = Product::where('ProductName', $item)->first();
            if ($product) {
                $products[] = $product;
            }
        }

        return $products;
    }

    public function index()
    {
//        if (!$this->user) {
//            return redirect('/sign');
//        }

        $products = $this->get_cart_items();
        return view('user.cart', compact('products'));
    }
}
