<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\OfferController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\TrainerController;

                        // All Admin Routes


// Admin login and logout routes
Route::group(['prefix' => 'admin'], function () {
    Route::get('/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'login'])->name('adminGO');
    Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');
});

// Protected admin routes
Route::group(['middleware' => 'auth:admin', 'prefix' => 'admin'], function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::view('/create-offer', 'admin.offer.create');
    Route::view('/show-offers', 'admin.offer.show');
    Route::view('/create-doctor', 'admin.doctor.create');
    Route::view('/show-doctors', 'admin.doctor.show');
    Route::view('/create-trainer', 'admin.trainer.create');
    Route::view('/show-trainers', 'admin.trainer.show');

    Route::post('/save-offer', [OfferController::class, 'store']);
    Route::get('/show-offers', [OfferController::class, 'show']);
    Route::get('/delete-offers/{id}', [OfferController::class, 'delete']);
    Route::get('/edit-offers/{id}', [OfferController::class, 'edit']);
    Route::post('/offer-update', [OfferController::class, 'update']);

    Route::post('/save', [DoctorController::class, 'store']);
    Route::get('/show', [DoctorController::class, 'show']);
    Route::get('/delete-doctors/{id}', [DoctorController::class, 'delete']);
    Route::get('/edit-doctors/{id}', [DoctorController::class, 'edit']);
    Route::post('/update-doctors', [DoctorController::class, 'update']);

    Route::post('/save-trainers', [TrainerController::class, 'store']);
    Route::get('/show-trainers', [TrainerController::class, 'show']);
    Route::get('/delete-trainers/{id}', [TrainerController::class, 'delete']);
    Route::get('/edit-trainers/{id}', [TrainerController::class, 'edit']);
    Route::post('/trainer-update', [TrainerController::class, 'update']);
});
