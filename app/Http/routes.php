<?php

use App\Helpers\Config;
$config = new Config;

Route::get('/', function(){
	return redirect('logout');
});

Route::get('{prefix}/login', function(){
	return redirect('logout');
});

Route::get('login', function(){
	return redirect('logout');
});

Route::auth();
Route::group(['prefix' => $config->getConf()['admin_prefix']], function () {
	Route::auth();
	Route::get('/registeruser',"RegisterController@view");
	Route::post('/registeruser',"RegisterController@create");
	Route::get('/', 'RestaurantController@index'); // Show list view of All restaurant(s) if admin else perticular logined restaurant 

Route::get('/product', 'ProductController@index');
	Route::get('/{id}', 'RestaurantController@show'); // View restaurant by id
	Route::post('/{id}', 'RestaurantController@update'); // Update restaurant by id

	Route::get('edit/{id}', 'RestaurantController@edit'); // View restaurant by id

	Route::get('delete/{id}', 'RestaurantController@delete'); // Soft-Delete restaurant by id
	Route::get('restore/{id}', 'RestaurantController@restore'); // Restore Soft-Deleted restaurant by id

	// Route::get('logout/', 'Auth\AuthController@logout'); // Logout
});


/* Routes for Non-Admin */
Route::group(['prefix' => $config->getConf()['restaurant_prefix']], function () {
	Route::auth();
	Route::get('/', 'RestaurantController@edit'); // Dashboard for a Restaurant
	Route::get('/menu', 'RestaurantController@menu');
	Route::get('/account', 'RestaurantController@account');

	Route::get('/product', 'ProductController@index');
	Route::post('/menu/add/{id}', 'ProductController@add');
		
// Route::get('landingpage/', function(){ echo "stringfsdfd"; die(); }); // Dashboard for a Restaurant

	Route::get('edit/', 'RestaurantController@edit'); // View restaurant by id

	Route::get('/{id}', 'RestaurantController@show'); // View restaurant by id
	Route::post('/{id}', 'RestaurantController@update'); // Update restaurant by id

	// Route::get('logout/', 'Auth\AuthController@logout'); // Logout

});