<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\offercontroller;
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

 route::post('/save-offer',[offercontroller::class,'store']);
 route::get('/show-offers',[offercontroller::class,'show']);
 route::get('/delete-offers/{id}',[offercontroller::class,'delete']);
 route::get('/edit-offers/{id}',[offercontroller::class,'edit']);
 route::post('/offer-update',[offercontroller::class,'update']);

  route::post('/save',[doctorcontroller::class,'store']);
   route::get('/show',[doctorcontroller::class,'show']);
   route::get('/delete-doctors/{id}',[doctorcontroller::class,'delete']);
   route::get('/edit-doctors/{id}',[doctorcontroller::class,'edit']);
   route::post('/update-doctors',[doctorcontroller::class,'update']);

  route::post('/save-trainers',[trainercontroller::class,'store']);
  route::get('/show-trainers',[trainercontroller::class,'show']);
  route::get('/delete-trainers/{id}',[trainercontroller::class,'delete']);
  route::get('/edit-trainers/{id}',[trainercontroller::class,'edit']);
  route::post('/trainer-update',[trainercontroller::class,'update']);

 Route::get('/test-db', function () {

});
Route::post('/test-form', function (Illuminate\Http\Request $request) {
    return $request->all();
});

Route::post('/submit-contact-form', [feedbackController::class, 'store']);
Route::post('/submit-appointment-form', [AppointmentController::class, 'store']);
Route::post('/Signup', [UserController::class, 'store']);

Route::post('/check-email',[UserController::class,'find_email']);


