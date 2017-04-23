<?php

namespace App\Http\Middleware;

use Auth;
use Session;
use Closure;
use App\UserType;

class Layout {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        if(!Auth::check()) return $next($request);
        $user_type = UserType::where('id', Auth::user()->user_type_id)->pluck('user_type_name');
        $var = $user_type->all();
        if($var[0] == 'admin'){
            Session::set('blade_layout', 'admin');
        } else {
            Session::set('blade_layout', 'restaurant');
        }
        return $next($request);
    }
}
