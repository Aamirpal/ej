<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('menus', function (Blueprint $table) {
            $table->uuid('id')->default(DB::raw('uuid_generate_v1()'));
            $table->uuid('restaurant_id');
            $table->uuid('product_id');
            $table->primary('id');
            $table->timestamps();
            // $table->foreign('restaurant_id')->reference('id')->on('restaurants');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('menus');
    }
}
