<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AppointmentsController;
use App\Http\Controllers\Admin\ConnectionMessagesController;
use App\Http\Controllers\Admin\OrdersController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\UsersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\OffersController;
use App\Http\Controllers\Admin\DoctorsController;
use App\Http\Controllers\Admin\TrainersController;

                        // All Admin Routes


// Admin login and logout routes
Route::group(['prefix' => 'admin'], function () {
    Route::get('/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'login'])->name('adminGO');
    Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');
});

Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

// Edit Information
Route::get('/admin/edit/{id}', [AdminController::class, 'edit_admin_info'])->name('admin.edit.info');
Route::post('/admin/update/{id}', [AdminController::class, 'update_admin_info'])->name('admin.update.info');


                        // Orders
Route::get('/orders-show', [OrdersController::class, 'show'])->name('admin.orders.show');
Route::get('/order-create', [OrdersController::class, 'create'])->name('admin.order.create');
Route::post('/order-store', [OrdersController::class, 'store'])->name('admin.order.store');
Route::get('/order/edit/{id}', [OrdersController::class, 'edit'])->name('admin.order.edit');
Route::post('/order/update/{id}', [OrdersController::class, 'update'])->name('admin.order.update');
Route::post('/order-delete/{id}', [OrdersController::class, 'delete'])->name('admin.order.delete');



                        // Products
Route::get('/products-show', [ProductsController::class, 'show'])->name('admin.products.show');
Route::get('/product-create', [ProductsController::class, 'create'])->name('admin.product.create');
Route::post('/product-store', [ProductsController::class, 'store'])->name('admin.product.store');
Route::get('/product/edit/{id}', [ProductsController::class, 'edit'])->name('admin.product.edit');
Route::post('/product/update/{id}', [ProductsController::class, 'update'])->name('admin.product.update');
Route::post('/product-delete/{id}', [ProductsController::class, 'delete'])->name('admin.product.delete');



                        // Offers
Route::get('/offers-show', [OffersController::class, 'show'])->name('admin.offers.show');
Route::get('/offer-create', [OffersController::class, 'create'])->name('admin.offer.create');
Route::post('/offer-store', [OffersController::class, 'store'])->name('admin.offer.store');
Route::get('/offer/edit/{id}', [OffersController::class, 'edit'])->name('admin.offer.edit');
Route::post('/offer/update/{id}', [OffersController::class, 'update'])->name('admin.offer.update');
Route::post('/offer-delete/{id}', [OffersController::class, 'delete'])->name('admin.offer.delete');



                        // Doctors
Route::get('/doctors-show', [DoctorsController::class, 'show'])->name('admin.doctors.show');
Route::get('/doctor-create', [DoctorsController::class, 'create'])->name('admin.doctor.create');
Route::post('/doctor-store', [DoctorsController::class, 'store'])->name('admin.doctor.store');
Route::get('/doctor/edit/{id}', [DoctorsController::class, 'edit'])->name('admin.doctor.edit');
Route::post('/doctor/update/{id}', [DoctorsController::class, 'update'])->name('admin.doctor.update');
Route::post('/doctor-delete/{id}', [DoctorsController::class, 'delete'])->name('admin.doctor.delete');



                        // Trainers
Route::get('/trainers-show', [TrainersController::class, 'show'])->name('admin.trainers.show');
Route::get('/trainer-create', [TrainersController::class, 'create'])->name('admin.trainer.create');
Route::post('/trainer-store', [TrainersController::class, 'store'])->name('admin.trainer.store');
Route::get('/trainer/edit/{id}', [TrainersController::class, 'edit'])->name('admin.trainer.edit');
Route::post('/trainer/update/{id}', [TrainersController::class, 'update'])->name('admin.trainer.update');
Route::post('/trainer-delete/{id}', [TrainersController::class, 'delete'])->name('admin.trainer.delete');



                        // Users
Route::get('/users-show', [UsersController::class, 'show'])->name('admin.users.show');
Route::get('/user-create', [UsersController::class, 'create'])->name('admin.user.create');
Route::post('/user-store', [UsersController::class, 'store'])->name('admin.user.store');
Route::get('/user/edit/{id}', [UsersController::class, 'edit'])->name('admin.user.edit');
Route::post('/user/update/{id}', [UsersController::class, 'update'])->name('admin.user.update');
Route::post('/user-delete/{id}', [UsersController::class, 'delete'])->name('admin.user.delete');



                        // Appointments
Route::get('/appointments-show', [AppointmentsController::class, 'show'])->name('admin.appointments.show');
Route::get('/appointment-create', [AppointmentsController::class, 'create'])->name('admin.appointment.create');
Route::post('/appointment-store', [AppointmentsController::class, 'store'])->name('admin.appointment.store');
Route::get('/appointment/edit/{id}', [AppointmentsController::class, 'edit'])->name('admin.appointment.edit');
Route::post('/appointment/update/{id}', [AppointmentsController::class, 'update'])->name('admin.appointment.update');
Route::post('/appointment-delete/{id}', [AppointmentsController::class, 'delete'])->name('admin.appointment.delete');



                        // Connection Messages
Route::get('/connection_messages-show', [ConnectionMessagesController::class, 'show'])->name('admin.connection_message.show');
Route::get('/connection_message-create', [ConnectionMessagesController::class, 'create'])->name('admin.connection_message.create');
Route::post('/connection_message-store', [ConnectionMessagesController::class, 'store'])->name('admin.connection_message.store');
Route::get('/connection_message/edit/{id}', [ConnectionMessagesController::class, 'edit'])->name('admin.connection_message.edit');
Route::post('/connection_message/update/{id}', [ConnectionMessagesController::class, 'update'])->name('admin.connection_message.update');
Route::post('/connection_message-delete/{id}', [ConnectionMessagesController::class, 'delete'])->name('admin.connection_message.delete');

