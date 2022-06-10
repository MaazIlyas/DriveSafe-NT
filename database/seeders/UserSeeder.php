<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//Using User model
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //User table seeds
        $user_array = [
            [
                'name' => 'Alex Phan', 'email' => 'AlexPhan@gmail.com', 'password' => '$2y$10$DPjgDOT87DDVGSyOpUUycuJJy1MXa/ZPCHV8vXD8sBZGLAGUcGgou', 
                'salt' => 'ZYDku9udNt3es1ro', 'role' => 'admin'
            ],
            [
                'name' => 'Maaz Ilyas', 'email' => 'Maazilyas@gmail.com', 'password' => '$2y$10$DPjgDOT87DDVGSyOpUUycuJJy1MXa/ZPCHV8vXD8sBZGLAGUcGgou', 
                'salt' => 'ZYDku9udNt3es1ro', 'role' => 'admin'
            ]
        ];

        User::insert($user_array);
    }
}
