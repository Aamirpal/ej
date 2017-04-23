<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\User;
use App\UserType;
use App\Restaurant;
use Validator;
use App\Helpers\Config;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    // protected $redirectTo = 'bar/landingpage';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data) {
        return Validator::make($data, [
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }


    /**/
    public function logout() {
        Auth::logout();
        return redirect($this->getRouter()->getCurrentRoute()->getPrefix().'/login');
    }

    /**/
    protected function authenticated($request,$user){
        if($user->role === 'admin'){
            return redirect()->intended('admin'); //redirect to admin panel
        }
        $config = new Config;
        $user_type = UserType::where('id',Auth::user()->user_type_id)->get();

        $prefix = $user_type[0]['user_type_name'] == 'admin' ? $config->getConf()['admin_prefix'] : $config->getConf()['restaurant_prefix'];

        return redirect()->intended($prefix.'/'); //redirect to homepage
    }   
}
