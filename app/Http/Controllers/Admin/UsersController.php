<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function show()
    {
        $users = User::all();
        return view('admin.user.show', compact('users'));
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:20',
            'password' => 'required|string|min:8|confirmed',
            'DOB' => 'required|date',
            'gender' => 'required|string|in:male,female',
        ]);

        $validated['password'] = bcrypt($validated['password']);

        User::create($validated);

        return redirect()->route('admin.users.show')->with('success', 'User created successfully.');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'phone' => 'required|string|max:20',
            'password' => 'nullable|string|min:8|confirmed',
            'DOB' => 'required|date',
            'gender' => 'required|string|in:male,female',
        ]);

        $validated['password'] = bcrypt($validated['password']);

        $user->update($validated);

        return redirect()->route('admin.users.show')->with('success', 'User updated successfully.');
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);

        // Delete all cart items related to the user
        foreach ($user->cartItems as $item) {
            $item->delete();
        }

        // Delete all orders and related order items
        foreach ($user->orders as $order) {
            foreach ($order->items as $item) {
                $item->delete();
            }
            $order->delete();
        }

        // Delete the user
        $user->delete();

        return redirect()->route('admin.users.show')->with('success', 'User deleted successfully.');
    }
}
