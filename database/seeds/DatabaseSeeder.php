<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(CollegesTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(Users_CollegeTableSeeder::class);
        $this->call(Users_CourseTableSeeder::class);
    }
}
