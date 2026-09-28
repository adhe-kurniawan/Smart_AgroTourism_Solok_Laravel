<?php namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Tourism extends Model { protected $table='destinations'; protected $fillable=['name','description','latitude','longitude','address','ticket_price','opening_time','closing_time','image','status']; public function packages(){return $this->hasMany(TourismPackage::class,'destination_id');} }
