<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model {
    protected $fillable = [
        'product_id', 'restaurant_id'
    ];

    /*Mutator*/
    public function getIdAttribute($value) {
        return (string) $value;
    }

    /**/
    public function products (){
    	return $this->hasMany('App\Product');
    }
}
