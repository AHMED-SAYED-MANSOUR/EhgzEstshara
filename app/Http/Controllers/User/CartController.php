<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function index()
    {
        $cartItems = Auth::user()->cartItems()->with('product')->get();
        return view('cart.index', compact('cartItems'));

//        return Auth::user()->cartItems()->with('product')->get();


    }

    public function add(Request $request, $productId)
    {
        $product = Product::find($productId);
        $cartItem = Auth::user()->cartItems()->where('product_id', $productId)->first();

        if ($cartItem) {
            $cartItem->quantity += 1;
            $cartItem->save();
        } else {
            Auth::user()->cartItems()->create([
                'product_id' => $productId,
                'quantity' => 1
            ]);
        }

        return redirect()->route('cart.index');
    }

    public function update(Request $request, $cartId)
    {
        $cartItem = Cart::find($cartId);
        $cartItem->quantity = $request->quantity;
        $cartItem->save();

        return response()->json(['success' => true]);
    }

    public function delete($cartId)
    {
        Cart::find($cartId)->delete();
        return redirect()->route('cart.index');
    }
}
