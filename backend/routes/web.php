<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminsController;
use App\Http\Controllers\BookingsController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\PassengersController;
use App\Http\Controllers\CarOwnerController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RentalAgencyController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ServicePackController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

require __DIR__.'/auth.php';







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


// utilisateur routes
Route::get('/user', [UserController::class, 'index']);
Route::post('/user', [UserController::class, 'store']);
Route::get('/user/{id}', [UserController::class, 'show']);
Route::put('/user/{id}', [UserController::class, 'update']);
Route::delete('/user/{id}', [UserController::class, 'destroy']);

// Passenger routes
Route::get('/passengers', [PassengersController::class, 'index']);
Route::post('/passengers', [PassengersController::class, 'store']);
Route::get('/passengers/{id}', [PassengersController::class, 'show']);
Route::put('/passengers/{id}', [PassengersController::class, 'update']);
Route::delete('/passengers/{id}', [PassengersController::class, 'destroy']);
// Admin routes
Route::get('/admins', [AdminsController::class, 'index']);
Route::post('/admins', [AdminsController::class, 'store']);
Route::get('/admins/{id}', [AdminsController::class, 'show']);
Route::put('/admins/{id}', [AdminsController::class, 'update']);
Route::delete('/admins/{id}', [AdminsController::class, 'destroy']);

// Booking routes
Route::get('/bookings', [BookingsController::class, 'index']);
Route::post('/bookings', [BookingsController::class, 'store']);
Route::get('/bookings/{id}', [BookingsController::class, 'show']);
Route::put('/bookings/{id}', [BookingsController::class, 'update']);
Route::delete('/bookings/{id}', [BookingsController::class, 'destroy']);

// Car routes
Route::get('/cars', [CarsController::class, 'index']);
Route::post('/cars', [CarsController::class, 'store']);
Route::get('/cars/{id}', [CarsController::class, 'show']);
Route::put('/cars/{id}', [CarsController::class, 'update']);
Route::delete('/cars/{id}', [CarsController::class, 'destroy']);

// Car Owner routes
Route::get('/carowners', [CarOwnerController::class, 'index']);
Route::post('/carowners', [CarOwnerController::class, 'store']);
Route::get('/carowners/{id}', [CarOwnerController::class, 'show']);
Route::put('/carowners/{id}', [CarOwnerController::class, 'update']);
Route::delete('/carowners/{id}', [CarOwnerController::class, 'destroy']);

// Driver routes
Route::get('/drivers', [DriverController::class, 'index']);
Route::post('/drivers', [DriverController::class, 'store']);
Route::get('/drivers/{id}', [DriverController::class, 'show']);
Route::put('/drivers/{id}', [DriverController::class, 'update']);
Route::delete('/drivers/{id}', [DriverController::class, 'destroy']);

// Notification routes
Route::get('/notifications', [NotificationController::class, 'index']);
Route::post('/notifications', [NotificationController::class, 'store']);
Route::get('/notifications/{id}', [NotificationController::class, 'show']);
Route::put('/notifications/{id}', [NotificationController::class, 'update']);
Route::delete('/notifications/{id}', [NotificationController::class, 'destroy']);

// Payment routes
Route::get('/payments', [PaymentController::class, 'index']);
Route::post('/payments', [PaymentController::class, 'store']);
Route::get('/payments/{id}', [PaymentController::class, 'show']);
Route::put('/payments/{id}', [PaymentController::class, 'update']);
Route::delete('/payments/{id}', [PaymentController::class, 'destroy']);

// Rental Agency routes
Route::get('/rentalagencies', [RentalAgencyController::class, 'index']);
Route::post('/rentalagencies', [RentalAgencyController::class, 'store']);
Route::get('/rentalagencies/{id}', [RentalAgencyController::class, 'show']);
Route::put('/rentalagencies/{id}', [RentalAgencyController::class, 'update']);
Route::delete('/rentalagencies/{id}', [RentalAgencyController::class, 'destroy']);

// Review routes
Route::get('/reviews', [ReviewController::class, 'index']);
Route::post('/reviews', [ReviewController::class, 'store']);
Route::get('/reviews/{id}', [ReviewController::class, 'show']);
Route::put('/reviews/{id}', [ReviewController::class, 'update']);
Route::delete('/reviews/{id}', [ReviewController::class, 'destroy']);

// Service Pack routes
Route::get('/servicepacks', [ServicePackController::class, 'index']);
Route::post('/servicepacks', [ServicePackController::class, 'store']);
Route::get('/servicepacks/{id}', [ServicePackController::class, 'show']);
Route::put('/servicepacks/{id}', [ServicePackController::class, 'update']);
Route::delete('/servicepacks/{id}', [ServicePackController::class, 'destroy']);

// Add routes for other controllers...