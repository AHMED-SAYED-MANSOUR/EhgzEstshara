<?php

use App\Models\Trainer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


// Show Home Page
Route::get('/', function () {

    // Current User
    $user = Auth::user();

    // All Trainers
    $trainers = Trainer::get();

    return view('index', compact('user', 'trainers'));
});


// Sign-in & sign-up
Route::get('/sign', function () {
    return view('user.Signup');
})->name('sign');

Route::post('/sign_in_route', [UserController::class,'sign_in'])->name('sign_in_route');
Route::post('/sign_up_route', [UserController::class,'sign_up'])->name('sign_up_route');


Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');
