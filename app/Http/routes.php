<?php

use App\JobPost;
use Illuminate\Http\Request;

Route::get('/', function(){
	return view('errors.503');
});

Route::get('/login', function(){
	return view('errors.503');
});

Route::get('/logout', function(){
	return view('errors.503');
});
Route::get('post_job', function(){
	return view('job.index');
});

Route::get('show_jobs', function(){
	return view('job.show');
});
Route::post('post_job', function( Request $request){
	return JobPost::create($request->all());
	return $request->file;
});

Route::get('jobs', function(){
	return JobPost::paginate(10);
});
