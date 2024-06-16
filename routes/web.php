<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\offerController;
use App\Http\Controllers\feedbackController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\doctorController;
use App\Http\Controllers\trainerController;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/contactus', function () {
    return view('contactus');
});
Route::get('/shop', function () {
    return view('shop');
});
Route::get('/Signup', function () {
    return view('Signup');
});

Route::get('/doctors', function () {
    return view('team');
});
Route::get('/dashboard',function(){
    return view('home');
 });
 Route::get('/cart',function(){
    return view('cart');
 });

 Route::get('/trainers',function(){
    return view('trainers');
 });
 route::get('/payment',function(){
    return view('payment');
 });
 Route::get('/thankyou',function(){
    return view('thankyou');
 });


 route::get('/create',function(){
    return view('offer.create');
 });
 route::get('/show',function(){
    return view('offer.show');
 });
  route::get('/create-doctor',function(){
     return view('doctor.create');
 });
  route::get('/show',function(){
     return view('doctor.show');
  });
  route::get('/create-trainer',function(){
     return view('trainer.create');
  });
 route::get('/show',function(){
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

 Route::get('/test-db', function () {

});
Route::post('/test-form', function (Illuminate\Http\Request $request) {
    return $request->all();
});

Route::post('/submit-contact-form', [feedbackController::class, 'store']);
Route::post('/submit-appointment-form', [AppointmentController::class, 'store']);
Route::post('/Signup', [UserController::class, 'store']);

Route::post('/check-email',[UserController::class,'find_email']);


