<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FarmController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\TourismController;
use App\Http\Controllers\BookingController;
Route::get('/', fn()=>redirect('/dashboard'));
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
Route::resource('farms', FarmController::class);
Route::resource('devices', DeviceController::class)->only(['index','show','update']);
Route::resource('tourism', TourismController::class);
Route::resource('bookings', BookingController::class)->only(['index','store','show','update']);
