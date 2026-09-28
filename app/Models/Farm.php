<?php namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Farm extends Model { protected $fillable=['name','owner','commodity','area','latitude','longitude','status']; public function devices(){return $this->hasMany(Device::class);} }
