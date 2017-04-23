<?php

namespace App\Http\Controllers;

use Auth;
use App\Menu;
use App\Product;
use App\Restaurant;
use App\Http\Requests;
use Illuminate\Http\Request;

class ProductController extends Controller {
    


    /**/
    public function add( Request $request) {
    	// return $request->all();	
    	$data = $request->all();
        unset($data['_token']);
    	$prod = Product::create([
            'category_id' => $request->category_id,
            'product_name' => $request->product_name,
            'price' => $request->price,
        ]);

        $user_rest_id = Restaurant::where('user_id', Auth::user()->id)->get();
        Menu::create([
        	'product_id' => $prod->id,
        	'restaurant_id' => $user_rest_id[0]->id,
        	]);

        return back()->with('status', 'Product added Succesfully');
    }


    /**/
    public function index(){

        $prd = Product::first();
        return $prd->with('restaurants')->get();
        if( Auth::user()->hasUserType('admin') ) {
            $data = Product::withTrashed()->paginate(1);
        } else {
            $data = Product::withTrashed()->where('user_id', Auth::user()->id)->paginate(1);
        }
        return $data;
        // return view('Product/index', ['products' => $data ]); 
    }
}
