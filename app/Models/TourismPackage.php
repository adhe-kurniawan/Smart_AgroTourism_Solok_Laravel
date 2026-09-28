<?php namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class TourismPackage extends Model { protected $fillable=['destination_id','name','description','price','duration','capacity','status']; }
