<?php namespace App\Http\Controllers;
use App\Models\{Farm,Device,SensorReading,Tourism,Booking};
class DashboardController extends Controller { public function index(){ $latest=SensorReading::with('device')->latest('recorded_at')->limit(20)->get(); return view('dashboard.index',['farms'=>Farm::count(),'devices'=>Device::count(),'online'=>Device::where('status','online')->count(),'destinations'=>Tourism::count(),'bookings'=>Booking::count(),'latest'=>$latest]); } }
