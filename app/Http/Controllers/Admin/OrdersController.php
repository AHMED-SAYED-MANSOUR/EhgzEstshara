<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class OrdersController extends Controller
{

    public function show()
    {
        $orders= Order::get();
        return view('admin.order.show',compact('orders'));
    }

    public function create()
    {
        $users = User::all(); // Get all users to select from
        $products = Product::all();
        return view('admin.order.create', compact('users', 'products'));
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'items' => 'required|array',
            'items.*.product_id' => 'required|exists:products,id',
            'items.*.quantity' => 'required|integer|min:1',
            'items.*.price' => 'required|numeric|min:0',
        ]);

        // Create the order
        $order = Order::create([
            'user_id' => $validated['user_id'],
            'status' => 'pending',
            'total_price' => collect($validated['items'])->sum(function ($item) {
                return $item['quantity'] * $item['price'];
            }),
        ]);

        // Create the order items
        foreach ($validated['items'] as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item['product_id'],
                'quantity' => $item['quantity'],
                'price' => $item['price'],
            ]);
        }

        return redirect()->route('admin.orders.show')->with('success', 'Order created successfully.');
    }

    public function edit($id)
    {
        $order = Order::with('items')->find($id);
        $users = User::all();
        $products = Product::all();
        return view('admin.order.edit', compact('order', 'users', 'products'));
    }

    public function update(Request $request, $id)
    {
        $order = Order::find($id);

        $request->validate([
            'user_id' => 'required|exists:users,id',
            'items.*.product_id' => 'required|exists:products,id',
            'items.*.quantity' => 'required|integer|min:1',
        ]);

        try {
            $order->user_id = $request->input('user_id');
            $order->save();

            $order->items()->delete();
            $totalPrice = 0;
            foreach ($request->input('items') as $itemData) {
                $totalPrice += $itemData['price'] * $itemData['quantity'];
                $order->items()->create([
                    'product_id' => $itemData['product_id'],
                    'quantity' => $itemData['quantity'],
                    'price' => $itemData['price'],
                ]);
            }

            $order->total_price = $totalPrice;
            $order->save();

            return redirect()->route('admin.orders.show')->with('success', 'Order updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to update order. Please try again.');
        }
    }

    public function delete(Request $request, $id)
    {
        // Find the order
        $order = Order::findOrFail($id);

        // Delete the related order items
        $order->items()->delete();

        // Delete the order
        $order->delete();

        return redirect()->route('admin.orders.show');
    }
}
