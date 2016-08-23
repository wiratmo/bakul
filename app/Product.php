<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function users(){
    	return $this->belongsTo('App\User');
    }

    public function product_statistics(){
    	return $this->hasOne('App\Product_statistic');
    }

    public function product_pictures(){
    	return $this->hasMany('App\Product_picture');
    }

    public function categories(){
        return $this->belongsTo('App\Categorie');
    }
}
