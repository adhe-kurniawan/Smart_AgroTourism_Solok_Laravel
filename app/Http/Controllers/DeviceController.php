<?php namespace App\Http\Controllers;
use App\Models\Device; use Illuminate\Http\Request;
class DeviceController extends Controller { public function index(){return view('device.index',['devices'=>Device::with('farm')->paginate(20)]);} public function show(Device $device){$device->load(['farm','readings'=>fn($q)=>$q->latest('recorded_at')->limit(30)]);return view('device.show',compact('device'));} public function update(Request $r,Device $device){$device->update($r->validate(['status'=>'required|in:online,offline,maintenance']));return back();} }
