<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;

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
// In your routes/web.php
/*


|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/
Route::view('/', 'components.login')->name('login.page');

Route::post('/login', [AuthController::class, 'login'])->name('login');

/*
|--------------------------------------------------------------------------
| Authenticated Routes
|--------------------------------------------------------------------------
*/


// Route definition using the controller method
Route::get('/appointment/booking', [BookingController::class, 'index'])->name('appointment.booking');
Route::post('selected-date-booking', [BookingController::class, 'getSelectedDateBooking']);
Route::post('/booking/store', [BookingController::class, 'store']);
Route::get('existing-booking/{id}', [BookingController::class, 'existingBooking']);

// Route::view('/appointment/booking', 'components.booking.booking')->name('appointment.booking');
Route::middleware('auth')->group(function () {
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::view('/admin/dashboard', 'components.dashboard')->name('admin.dashboard');
    Route::get('/booking/all', [BookingController::class, 'allBookings']);



    Route::view('/admin/appointment-list', 'components.booking.booking-list')->name('admin.appointment.list');
    Route::get('/admin/appointment-list/detail/{id}', [BookingController::class, 'details'])->name('admin.appointment.detail');

    Route::view('/admin/user-account', 'components.user.account');
    Route::view('/admin/user-security', 'components.user.security');



});


