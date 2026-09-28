<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IoTController;
Route::post('/iot/readings',[IoTController::class,'store']);
Route::get('/iot/readings',[IoTController::class,'index']);
Route::post('/iot/pump',[IoTController::class,'pump']);
