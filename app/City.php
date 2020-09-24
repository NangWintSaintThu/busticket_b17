<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable=[

      'id','name'
    ];
    public function routes($value='')
    {
    	return $this->hasMany('App\Route');
    }

    public function depature($value='')
	{
	  	return $this->hasMany('App\Route','depature_station');
	}

	public function arrival($value='')
	{
	  	return $this->hasMany('App\Route','arrival_station');
	}
    

}
