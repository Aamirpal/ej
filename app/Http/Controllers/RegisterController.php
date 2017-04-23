<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\UserType;
use App\User;
use App\Restaurant;
use App\Http\Requests;

class RegisterController extends Controller {    
	


	public function view(){
		return view("register/register_form");
	}


	/**/
	public function create(Request $request) {
        $owner = UserType::where('user_type_name', 'owner')->get();        
        $user = User::create([
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'user_type_id' => $owner[0]->id,
        ]);

        Restaurant::create([
           'user_id'  => $user->id,
           'restaurant_name' => $request->bar_name
        ]);
        return redirect('admin');
    }
}
