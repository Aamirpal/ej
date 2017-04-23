<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	/*Mutator*/
	public function getIdAttribute($value) {
		return (string) $value;
	}
    
}
