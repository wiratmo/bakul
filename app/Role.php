<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $fillable = [
        'name', 'email', 'password', 'role_id',
    ];
    
    public function users(){
    	return $this->belongsTo('App\User');
    }
}
