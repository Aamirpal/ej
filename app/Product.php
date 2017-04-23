<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    protected $fillable = [
        'category_id', 'product_name', 'price'
    ];

    /*Mutator*/
    public function getIdAttribute($value) {
        return (string) $value;
    }

    /**/
    public function menus (){
    	return $this->hasMany('App\Menu');
    }

    /**/
    public function restaurants(){
        return $this->belongsToMany('App\Restaurant','menus');
    }
}
