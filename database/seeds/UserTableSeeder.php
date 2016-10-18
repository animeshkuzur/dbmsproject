<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
      	[
            'name' => 'Animesh K',
            'email' => 'animesh.kuzur@outlook.com',
            'phone' => '8298354467',
            'password' => bcrypt('animesh@1234'),
            'college_id' => '1811503',
            'dob' => '2001-01-01',
        ],
        [
        	'name' => 'Pankaj B',
            'email' => 'pankajbaranwal.1996@gmail.com',
            'phone' => '9643531782',
            'password' => bcrypt('pankaj@1234'),
            'college_id' => '1811518',
            'dob' => '2001-01-01',
        ]);
    }
}
