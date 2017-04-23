<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model {

    public function getIdAttribute($value) {
        return (string) $value;
    }
    
    // public function users() {
    // 	return $this->belongsTo('App\User');
    // }

    // public function hasUserType($type) {
    //     if( $this->user_types()->first() ) {
    //     // if( DB::table('user_types')->where('id'=> Auth::user()->user_type_id) )
    //         return true;
    //     }
    //     return false;
    // }
}
