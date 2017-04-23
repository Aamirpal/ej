<?php
namespace App\Helpers;


class Config {	

	public function getConf(){
		$route_var['admin_prefix'] = "admin";
		$route_var['restaurant_prefix'] = "bar";
		return $route_var;
	}
}