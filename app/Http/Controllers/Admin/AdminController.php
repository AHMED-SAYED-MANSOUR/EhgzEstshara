<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->intended(route('admin.dashboard'));
        }

        return redirect()->back()->withInput($request->only('email'));
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
