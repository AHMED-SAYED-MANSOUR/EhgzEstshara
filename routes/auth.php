<?php

use App\Http\Controllers\User\CartController;
use App\Models\Trainer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;


                            // All User Router

// Show Home Page
Route::get('/', function () {

    // Current User
    $user = Auth::user();

    // All Trainers
    $trainers = Trainer::get();

    return view('index', compact('user', 'trainers'));
});


// Sign-in & sign-up  Get Request [Show Forms]
Route::view('/sign','user.Signup')->name('sign');


// SignIn & SignUp  Post Request [Save in database]
Route::post('/sign_in_route', [UserController::class,'sign_in'])->name('sign_in_route');
Route::post('/sign_up_route', [UserController::class,'sign_up'])->name('sign_up_route');


// Logout
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');


// Check Email
Route::post('/check-email',[UserController::class,'find_email']);


// Cart
Route::get('/cart', [CartController::class, 'index'])->name('cart');


// Payment
route::get('/payment',function(){
    return view('user.payment');
});


// Thank Page After Payment
Route::get('/thankyou',function(){
    return view('user.thankyou');
});
