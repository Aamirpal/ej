<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('categories')->insert(
	        array(
	            array('category_name' => 'Beer'),
	            array('category_name' => 'Ale'),
	            array('category_name' => 'Cider'),
	            array('category_name' => 'Wine'),
	            array('category_name' => 'Spirits'),
	            array('category_name' => 'Soft Drinks'),
        ));
    }

    public function down() {
		DB::table('categories')->delete();
    }
}
