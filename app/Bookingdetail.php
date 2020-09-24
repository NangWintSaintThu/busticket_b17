<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookingdetail extends Model
{
    protected $fillable=[
    	'id','travellerinfo_id','route_id','no_people','total','seat_no','departure_date'
    ];
  public function travellerinfo($value='')
  {

  	return $this->belongsTo('App\TravellerInfo','bookingdetails')
                ->withPivot('qty')
                ->withTimestamps();
  }

  public function route($value='')
  {
  	return $this->belongsTo('App\route');
  }
  public function user($value='')
  {
    return $this->belongsTo('App\User');
  }

  public function travllerinfo()
  {
    return $this->belongsTo('App\Travllerinfo');
  }
  
}
