<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


// Show Home Page
Route::get('/', function () {
    $user = Auth::user();
    return view('index', ['user' => $user]);
});


// Sign-in & sign-up
Route::get('/sign', function () {
    return view('Signup');
})->name('sign');

Route::post('/sign_in_route', [UserController::class,'sign_in'])->name('sign_in_route');
Route::post('/sign_up_route', [UserController::class,'sign_up'])->name('sign_up_route');


Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');
