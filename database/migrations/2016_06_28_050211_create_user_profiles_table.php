<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfilesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('user_profiles', function(Blueprint $table){
            $table->uuid('id')->default(DB::raw('uuid_generate_v1()'));
            $table->uuid('user_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->text('address');
            $table->text('description');
            $table->string('profile_image_url');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('user_profiles');
    }
}
