<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function index()
    {
        $cartItems = Auth::user()->cartItems()->with('product')->get();

        $user = Auth::user();
        $count = CartItem::where('user_id', $user->id)->count();

        return view('cart.index', compact('cartItems' , 'count'));

//        return Auth::user()->cartItems()->with('product')->get();
    }
//    public function updateCartNavBar(){
//        $user = Auth::user();
//        $count = CartItem::where('user_id', $user->id)->count();
////        return response()->json(['count' => $count]);
//    }

    public function getCartItemCount()
    {
        $count = Cart::count(); // Assuming you're using a package like Laravel Shopping Cart
        return response()->json(['count' => $count]);
    }


    public function add(Request $request, $productId)
    {
        $product = Product::find($productId);
        $cartItem = Auth::user()->cartItems()->where('product_id', $productId)->first();

        if ($cartItem) {
            $cartItem->quantity += 1;
            $cartItem->save();
//            return redirect()->route('cart.index');
        } else {
            Auth::user()->cartItems()->create([
                'product_id' => $productId,
                'price'=> $product->Price ,
                'quantity' => 1

            ]);
        }

        return redirect()->route('products.index');
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
        CartItem::find($cartId)->delete();
        return redirect()->route('cart.index');
    }
}
