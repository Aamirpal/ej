<?php

use Illuminate\Database\Seeder;

class UserTypesTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('user_types')->insert(
	        array(
	            array('user_type_name' => 'admin'),
	            array('user_type_name' => 'owner'),
	            array('user_type_name' => 'waiter'),
        ));
    }

    public function down() {
		DB::table('user_types')->delete();
    }
}
