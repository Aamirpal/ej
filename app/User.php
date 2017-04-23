<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {

    public function user_types() {
        return $this->hasOne('App\UserType');
    }


    public function hasUserType($type) {

        if( UserType::where('user_type_name', $type)->where('id', $this->user_type_id)->pluck('user_type_name') ){
            return UserType::where('user_type_name', $type)->where('id', $this->user_type_id)->pluck('user_type_name')->all();        
        }
        return false;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_type_id', 'email', 'password', 'access_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];


    public function getIdAttribute($value) {
        return (string) $value;
    }
}
