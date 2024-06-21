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



    public function dashboard()
    {
        return view('admin.home');
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
