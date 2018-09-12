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
         DB::table('users')->insert([
            'name' => "Jordy",
            'email' => "jordylock17@outlook.com",
            'password' =>  bcrypt("poepjes123"),
            'teacher' =>  0,
            'student' =>  1,
            'administrator' =>  0,
            'remember_token' => str_random(50),
            'created_at' =>  date("Y-m-d"),
            'updated_at' =>  date("Y-m-d")
        ]);
    }
}
