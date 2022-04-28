<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [

            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123123123'),
                'role' => 'admin',
                'status' => 1,
            ],


        ];
        \DB::table('users')->insert($users);
    }
}
