<?php

use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\OrderController;
use App\Models\CartItem;
use App\Models\Trainer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;



// All User Router

// Show Home Page
Route::get('/', function () {

    // Current User
    $user = Auth::user();
    $count = CartItem::where('user_id', $user->id)->count();

    // All Trainers
    $trainers = Trainer::get();

    return view('index', compact('user', 'trainers' , 'count'));
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



// Payment
route::Post('/payment',function(){
    $user = Auth::user();
    $count = CartItem::where('user_id', $user->id)->count();
    return view('user.payment' , compact('count'));
});


// Thank Page After Payment
Route::get('/thankyou',function(){
    $cartItems = Auth::user()->cartItems()->with('product')->get();

    $user = Auth::user();
    $count = CartItem::where('user_id', $user->id)->count();
    return view('user.thankyou' , compact('count'));
})->name('thankyou');


Route::middleware(['auth'])->group(function () {
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::get('/cart/count', [CartController::class, 'updateCartNavBar'])->name('cart.updateCartNavBar');
//    Route::get('/cart/items/count', 'CartController@getCartItemCount');

    Route::post('/cart/add/{productId}', [CartController::class, 'add'])->name('cart.add');
    Route::patch('/cart/update/{cartId}', [CartController::class, 'update'])->name('cart.update');
    Route::delete('/cart/delete/{cartId}', [CartController::class, 'delete'])->name('cart.delete');



    Route::post('/orders/create', [OrderController::class, 'create'])->name('orders.create');
    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
    Route::patch('/orders/update-status/{orderId}/{status}', [OrderController::class, 'updateStatus'])->name('orders.update-status');
});
