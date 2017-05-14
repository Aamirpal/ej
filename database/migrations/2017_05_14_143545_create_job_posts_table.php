<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('job_posts', function(Blueprint $table){
            $table->uuid('id')->default(DB::raw('uuid_generate_v1()'));
            $table->string('job_title')->nullable();
            $table->string('job_id')->nullable();
            $table->string('job_type')->nullable();
            $table->string('location')->nullable();
            $table->string('experince')->nullable();
            $table->string('skill')->nullable();
            $table->string('description')->nullable();
            $table->string('company_name')->nullable();
            $table->timestamps();
            $table->string('file')->nullable();

            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::drop('job_posts');
    }
}
