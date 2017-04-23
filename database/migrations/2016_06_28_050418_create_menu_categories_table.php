<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('menu_categories', function (Blueprint $table) {
            $table->uuid('id')->default(DB::raw('uuid_generate_v1()'));
            $table->uuid('category_id');
            $table->uuid('menu_id');
            // $table->foreign('category_id')->reference('id')->on('categories');
            // $table->foreign('menu_id')->reference('id')->on('menus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::Drop('menu_categories');
    }
}
