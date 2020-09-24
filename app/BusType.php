<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusType extends Model
{
    protected $fillable=[
      'id','name','logo'
    ];
    public function routes($value='')
    {
    	return $this->hasMany('App\Route');
    }
}
