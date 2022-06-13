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
                'first_name' => 'Alex', 'last_name' => 'Phan', 'username' => 'Alex', 'email' => 'AlexPhan@gmail.com', 'password' => '$2y$10$DPjgDOT87DDVGSyOpUUycuJJy1MXa/ZPCHV8vXD8sBZGLAGUcGgou', 
                'salt' => 'ZYDku9udNt3es1ro', 'role' => 'admin', 'created_at' => now(), 'updated_at' => now()
            ],
            [
                'first_name' => 'Maaz', 'last_name' => 'Ilyas','username' => 'Maaz', 'email' => 'Maazilyas@gmail.com', 'password' => '$2y$10$DPjgDOT87DDVGSyOpUUycuJJy1MXa/ZPCHV8vXD8sBZGLAGUcGgou', 
                'salt' => 'ZYDku9udNt3es1ro', 'role' => 'admin', 'created_at' => now(), 'updated_at' => now()
            ],
            [
                'first_name' => 'Marker', 'last_name' => 'DDWA','username' => 'marker', 'email' => 'marker@cdu.com', 'password' => '$2y$10$DPjgDOT87DDVGSyOpUUycuJJy1MXa/ZPCHV8vXD8sBZGLAGUcGgou', 
                'salt' => 'ZYDku9udNt3es1ro', 'role' => 'admin', 'created_at' => now(), 'updated_at' => now()
            ],
            [
                'first_name' => 'Student', 'last_name' => 'View','username' => 'student', 'email' => 'student@cdu.com', 'password' => '$2y$10$DPjgDOT87DDVGSyOpUUycuJJy1MXa/ZPCHV8vXD8sBZGLAGUcGgou', 
                'salt' => 'ZYDku9udNt3es1ro', 'role' => 'student', 'created_at' => now(), 'updated_at' => now()
            ]
        ];

        User::insert($user_array);
    }
}
