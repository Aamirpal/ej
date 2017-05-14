<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobPost extends Model {
    protected $fillable = [
		'job_title',
		'job_id',
		'job_type',
		'location',
		'experince',
		'skill',
		'description',
		'company_name',
		'file'
    ];
}
