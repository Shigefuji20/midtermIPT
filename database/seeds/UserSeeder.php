<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'lname' => 'Shigefuji',
                'fname' => 'Mico',
                'address' => 'Tubigon, Bohol',
                'phone' => '09123456789',
                'email' => 'Mico@gmail.com',
                'password' => bcrypt('password123')
            ],

            [
                'lname' => 'Pogoy',
                'fname' => 'Franklin',
                'address' => 'Tubigon, Bohol',
                'phone' => '09123456789',
                'email' => 'Franklin@gmail.com',
                'password' => bcrypt('password1234')
            ],
            [
                'lname' => 'Tabibina',
                'fname' => 'Pableo',
                'address' => 'Tubigon, Bohol',
                'phone' => '09123456789',
                'email' => 'Raymundo@gmail.com',
                'password' => bcrypt('password1234')
            ]
        ];

        foreach($data as $usr){
            \App\User::create($usr);
        }
    }
}
