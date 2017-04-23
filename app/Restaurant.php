<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Restaurant extends Model {

	use SoftDeletes;

	protected $fillable = [
        'user_id', 'restaurant_name','description','address','opening_hours','image_url'
    ];

	protected $dates = ['deleted_at'];

	
    //Mutator 
    public function getIdAttribute($value) {
        return (string) $value;
    }
}
