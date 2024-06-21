<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        // Retrieve the admin user by email
        $admin = Admin::where('email', $request->input('email'))->first();

        // Check if the admin user exists and the passwords match
        if ($admin && $admin->password === $request->input('password')) {
            // Log the admin user in
            Auth::guard('admin')->login($admin);

            // Flash a success message
            Session::flash('success', 'Login successful!');

            // Redirect to the dashboard
            return redirect()->intended(route('admin.dashboard'));
        }

        // If the credentials do not match, redirect back with an error message
        return redirect()->back()->withInput($request->only('email'))->withErrors([
            'email' => 'These credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }

    public function dashboard()
    {
//        $admin = Auth::guard('admin');
        $admin = Admin::find(1);
        return view('admin.home', compact('admin'));
    }

    public function edit_admin_info($id)
    {
        $admin = Admin::find(1);
        return view('admin.edit_info', compact('admin'));
    }

    public function update_admin_info(Request $request, $id)
    {
        $admin = Admin::find(1);

        if ($admin) {
            $admin->name = $request['name'];
            $admin->email = $request['email'];
            $admin->password = ($request['password']); // Not Encrypted
            $admin->save();

            return redirect()->back()->with('success', 'Updated Successfully');
        }

        return redirect()->back()->with('fail', 'Admin Not Found');

    }

}
