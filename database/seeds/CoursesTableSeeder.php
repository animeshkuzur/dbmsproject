<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert(
      	[
            'name' => 'BTech IT and MI',
            'college_id' => 1,
        ],
        [
        	'name' => 'B.A. Hons and Humanities',
        	'college_id' => 1,
        ]);
    }
}
