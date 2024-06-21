<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\OfferController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\TrainerController;

                        // All Admin Routes

    Route::get('/login', [AdminController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AdminController::class, 'login']);
    Route::post('/logout', [AdminController::class, 'logout'])->name('logout');


Route::group(['middleware'=>'auth:admin', 'prefix'=>'admin', 'name'=>'admin.'], function (){

    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');


    route::get('/create-offer',function(){
        return view('admin.offer.create');
    });
    route::get('/show-offers',function(){
        return view('admin.offer.show');
    });
    route::get('/create-doctor',function(){
        return view('admin.doctor.create');
    });
    route::get('/show-doctors',function(){
        return view('admin.doctor.show');
    });
    route::get('/create-trainer',function(){
        return view('admin.trainer.create');
    });
    route::get('/show-trainers',function(){
        return view('trainer.show');
    });

    route::post('/save-offer',[offerController::class,'store']);
    route::get('/show-offers',[offerController::class,'show']);
    route::get('/delete-offers/{id}',[offerController::class,'delete']);
    route::get('/edit-offers/{id}',[offerController::class,'edit']);
    route::post('/offer-update',[offerController::class,'update']);

    route::post('/save',[doctorController::class,'store']);
    route::get('/show',[doctorController::class,'show']);
    route::get('/delete-doctors/{id}',[doctorController::class,'delete']);
    route::get('/edit-doctors/{id}',[doctorController::class,'edit']);
    route::post('/update-doctors',[doctorController::class,'update']);

    route::post('/save-trainers',[trainerController::class,'store']);
    route::get('/show-trainers',[trainerController::class,'show']);
    route::get('/delete-trainers/{id}',[trainerController::class,'delete']);
    route::get('/edit-trainers/{id}',[trainerController::class,'edit']);
    route::post('/trainer-update',[trainerController::class,'update']);



});
