<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
          'name' => 'Avinash shrestha',
          'email'=> 'avishr75@gmail.com',
          'password'=> bcrypt('Avinash@123')
        ]);

        $user = User::create([
          'name' => 'Adarsha Shrestha',
          'email'=> 'avishr44@gmail.com',
          'password'=> bcrypt('Avinash@123')
        ]);

        $user = User::create([
          'name' => 'Rachana Tiwari',
          'email'=> 'avis7315@gmail.com',
          'password'=> bcrypt('Avinash@123')
        ]);
    }
}
