<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles(){
        return $this->hasOne('App\Role');
    }

    public function profiles(){
        return $this->hasOne('App\Profile');
    }

    public function stores(){
        return $this->hasOne('App\Store');
    }

    public function products(){
        return $this->hasMany('App\Product');
    }

    public function transactions(){
        return $this->hasMany('App\Transaction');
    }

}
