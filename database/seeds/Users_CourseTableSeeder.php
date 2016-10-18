<?php

use Illuminate\Database\Seeder;

class Users_CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users_course')->insert(
      	[
            'user_id' => 1,
            'course_id' => 1,
        ],
        [
            'user_id' => 2,
            'course_id' => 1,
        ]);
    }
}
