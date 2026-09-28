<?php namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Booking extends Model { protected $fillable=['tourism_package_id','visitor_name','visitor_phone','booking_date','visitor_count','total_price','status']; }
