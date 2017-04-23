<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->uuid('id')->default(DB::raw('uuid_generate_v1()'));
            $table->uuid('user_id');
            $table->string('restaurant_name', 100)->nullable();
            $table->text('description')->nullable();
            $table->text('address')->nullable();
            $table->text('opening_hours')->nullable();            
            $table->string('image_url')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->primary('id');
            // $table->foreign('user_id')->reference('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('restaurants');
    }
}
