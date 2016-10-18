<?php

use Illuminate\Database\Seeder;

class Users_CollegeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users_college')->insert(
      	[
            'user_id' => 1,
            'college_id' => 1,
        ],
        [
            'user_id' => 2,
            'college_id' => 1,
        ]);
    }
}
