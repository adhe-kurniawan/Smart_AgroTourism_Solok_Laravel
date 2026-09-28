<?php namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Device extends Model { protected $fillable=['farm_id','device_code','device_name','latitude','longitude','status','last_seen']; protected $casts=['last_seen'=>'datetime']; public function farm(){return $this->belongsTo(Farm::class);} public function readings(){return $this->hasMany(SensorReading::class);} }
