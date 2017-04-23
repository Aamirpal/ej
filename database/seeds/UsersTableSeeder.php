<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_type = DB::table('user_types')
				    ->select('id')
				    ->where('user_type_name', 'admin')
				    ->first()
				    ->id;

		DB::table('users')->insert(
	        array(
	            array('user_type_id' => $admin_type, 'email' => 'admin@ucreate.com', 'password' => Hash::make('password'), 'access_token' => 'dfashfgjasdgfjdgsjhf', 'created_at' => 'now()')
        ));

        $owner = DB::table('user_types')
                    ->select('id')
                    ->where('user_type_name', 'owner')
                    ->first()
                    ->id;

        DB::table('users')->insert(
            array(
                array('user_type_id' => $owner, 'email' => 'owner@ucreate.com', 'password' => Hash::make('password'), 'access_token' => 'dfashfgjasdgfjdgsjhf', 'created_at' => 'now()')
        ));
    }

    public function down() {
		DB::table('users')->delete();
    }
}
