<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    //

    public function users(){
    	return $this->belongTo('App\User');
    }
}
