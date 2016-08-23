<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_statistic extends Model
{
    //
    public function products(){
    	return $this->belongsTo('App\Product');
    }
}
