<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function create()
    {
        $cartItems = Auth::user()->cartItems()->with('product')->get();
        $totalPrice = $cartItems->sum(function($cartItem) {
            return $cartItem->product->price * $cartItem->quantity;
        });

        $order = Auth::user()->orders()->create([
            'status' => 'pending',
            'total_price' => $totalPrice
        ]);

        foreach ($cartItems as $cartItem) {
            $order->items()->create([
                'product_id' => $cartItem->product_id,
                'quantity' => $cartItem->quantity,
                'price' => $cartItem->product->price
            ]);
            $cartItem->delete();
        }

        return redirect()->route('orders.index');
    }

    public function index()
    {
        $orders = Auth::user()->orders()->with('items.product')->get();
        return view('orders.index', compact('orders'));
    }

    public function updateStatus($orderId, $status)
    {
        $order = Order::find($orderId);
        $order->status = $status;
        $order->save();

        return redirect()->route('orders.index');
    }
}
