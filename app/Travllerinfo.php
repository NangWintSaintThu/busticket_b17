<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Travllerinfo extends Model
{
    protected $fillable=[
    	'id','user_id','phone_no','address'
    ];
 public function user($value='')
  {
  	return $this->belongsTo('App\User');
  }
}
