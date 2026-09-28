<?php namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class SensorReading extends Model { protected $fillable=['device_id','soil_moisture','temperature','humidity','ph','rainfall','water_level','pump_status','recorded_at']; protected $casts=['recorded_at'=>'datetime']; public function device(){return $this->belongsTo(Device::class);} }
