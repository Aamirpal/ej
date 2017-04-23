<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use DB;
Use Auth;
use App\User;
use App\Category;
use Validator;
use App\Restaurant;
use App\Http\Requests;
use App\Helpers\Aws;
use Illuminate\Support\Facades\Input;

class RestaurantController extends Controller {

    /**/
    public function __construct(){
    	$this->middleware('auth');
    }

    protected function validator( Request $request ) {
        $rule = array(
            'restaurant_name' => 'required|max:30',
            'description' => 'max:100',
            'address' => 'max:100',
            'opening_hours' => 'max:100',
        );
        $this->validate($request, $rule);
    }

    /**/
    public function dashboard() {
        return view("Restaurant/dashboard");
    }

    /*Index()
    To get list of Restaurant(s)
    */
    public function index(){
    	if( Auth::user()->hasUserType('admin') ) {
    		$data = Restaurant::withTrashed()->paginate(1);
    	} else {
    		$data = Restaurant::withTrashed()->where('user_id', Auth::user()->id)->paginate(1);
    	}
        return view('Restaurant/index', ['restaurants' => $data ]);
    }


    /**/
    public function show($id){
    	return Restaurant::query()->where('id', $id )->get();
    }

    /**/
    public function update($id, Request $request){

        $data = $request->all();

        if( !empty($_FILES['file']['tmp_name']) ) {
            $file = Input::file('file');
            $file_tmp = getimagesize($file);
            if( $file_tmp[0] < 500 && $file_tmp[1] < 500 ){ // generate an error if file size is not valid
                return back()->withErrors(['file'=>'Invalid file resolution, upload atleast 500px,500px '])->withInput();
            }
            
            $aws = new Aws;

            $file_temp['temp_name'] = $_FILES['file']['tmp_name'];
            $file_temp['name'] = 'file';
            $data['image_url'] = $aws->image($file_temp, $request)['path'];
        }        

        $this->validator($request);

        unset($data['_token']);unset($data['file']);
    	Restaurant::where('id', $id)->update($data);
        return back()->with('status', 'Record update Succesfully');
	}


    public function edit( $id=NULL ) {
        $data = $id ? Restaurant::where('id', $id )->get() : Restaurant::withTrashed()->where('user_id', Auth::user()->id )->get();        
        return view('Restaurant/edit', ['restaurant' => $data[0] ]);
    }

    /**/
    public function delete( $id ) {
        Restaurant::where('id', $id)->delete();
        return redirect($this->getRouter()->getCurrentRoute()->getPrefix());
    }

    /**/
    public function restore( $id ){
        Restaurant::where('id', $id)->restore();
        return redirect($this->getRouter()->getCurrentRoute()->getPrefix());
    }

    /**/
    public function menu( $id=null ) {
        $category = Category::get();
        $data = $id ? Restaurant::where('id', $id )->get() : Restaurant::withTrashed()->where('user_id', Auth::user()->id )->get();
        return view('Restaurant/add_menu', ['restaurant' => $data[0], 'category'=> $category]);
    }

    /**/
    public function account() {
        return view("Restaurant/add_account");
    }
}