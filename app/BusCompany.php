<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusCompany extends Model
{
    protected $fillable=[
    	'id','name','phone_no','logo','owner_name','address'];
}
