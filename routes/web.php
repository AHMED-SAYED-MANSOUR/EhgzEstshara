<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Models\Trainer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\SearchController;


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

    // Current User
    $user = Auth::user();

    // All Trainers
    $trainers = Trainer::get();


    return view('index', compact('user', 'trainers'));
});


// Show All Product
Route::get('/products', [ProductController::class, 'All_Products'])->name('products.index');

//Search
Route::get('/search', [SearchController::class, 'search'])->name('search');

// Cart
Route::get('/cart', [CartController::class, 'index'])->name('cart');




Route::get('/contactus', function () {
    return view('contactus');
});



Route::get('/doctors', function () {
    return view('team');
});
Route::get('/dashboard',function(){
    return view('admin.home');
 });

 Route::get('/trainers',function(){
    return view('trainers');
 });
 route::get('/payment',function(){
    return view('user.payment');
 });
 Route::get('/thankyou',function(){
    return view('user.thankyou');
 });


 route::get('/create',function(){
    return view('admin.offer.create');
 });
 route::get('/show',function(){
    return view('admin.offer.show');
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
Route::post('/submit-appointment-form', [AppointmentController::class, 'store'])->name("Appointment");

Route::post('/check-email',[UserController::class,'find_email']);




