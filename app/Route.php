<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $fillable=[
    	'id','departure_station','arrival_station','departure_time','price','bus_type_id','seat'
    ];

    public function depature($value='')
	{
	  	return $this->belongsTo('App\City','departure_station');
	}

	public function arrival($value='')
	{
	  	return $this->belongsTo('App\City','arrival_station');
	}

    public function bus_type($value='')
	{
	  	return $this->belongsTo('App\BusType');
	}
}
