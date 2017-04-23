<?php
namespace App\Helpers;

use Storage;
use Illuminate\Http\Request;

class Aws {	

	public function image( $file, Request $request ){

		
	    $image = $request->file($file['name']);
	    $s3 = Storage::disk('s3');
	    $extension = $request->file($file['name'])->guessExtension();
	    $imageFileName = time() . '.' .$extension;
	    
	    $s3_bucket = getenv("S3_BUCKET_NAME");
	    $filePath = '/destination_images/' . $imageFileName;
	    $fullurl = "https://s3-eu-west-1.amazonaws.com/".$s3_bucket."".$filePath;

	    if( $s3->put($filePath, file_get_contents($file['temp_name']), 'public') ){
	    	return ['path'=>$fullurl];
	    }
	    return null;
	}
}