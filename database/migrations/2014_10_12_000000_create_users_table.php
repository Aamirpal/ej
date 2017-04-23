<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->default(DB::raw('uuid_generate_v1()'));
            $table->uuid('user_type_id');
            $table->string('email', 50)->unique();
            $table->string('password',100);
            $table->string('access_token')->default(DB::raw('uuid_generate_v1()'));
            $table->timestamps();
            $table->rememberToken();
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('users');
    }
}
