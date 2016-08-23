<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
	protected $fillable = [
        'first_name', 'last_name', 'picture', 'phone',
    ];
    
    public function users(){
    	return $this->belongsTo('App\User');
    }
}
