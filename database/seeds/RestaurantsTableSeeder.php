<?php

use App\User;
use Illuminate\Database\Seeder;
// use Faker\Factory as Faker;

class RestaurantsTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        $owner = DB::table('user_types')
                    ->select('id')
                    ->where('user_type_name', 'owner')
                    ->first()
                    ->id;

        $user = DB::table('users')
                    ->select('id')
                    ->where('user_type_id', $owner)
                    ->first()
                    ->id;

        DB::table('restaurants')->insert(
            array(
                array('user_id' => $user, 'restaurant_name' => 'Test')
        ));
     //    $faker = Faker::create();
    	// foreach (range(1,1) as $index) {
	    //     DB::table('restaurants')->insert([
	    //     	'user_id' => $faker->randomElement(User::lists('id')->toArray()),
	    //         'restaurant_name' => $faker->company,
	    //         'description' => $faker->paragraph,
	    //         'created_at' => 'now()',
	    //     ]);
     //    }
    }
}
