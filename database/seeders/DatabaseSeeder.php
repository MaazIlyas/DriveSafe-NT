<?php
//Created by using cpommand "php artisan make:seeder DatabaseSeeder"


namespace Database\Seeders;

use App\Models\Instructor;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        //Instructor Table seeds
        $instructor_array = [
            [
                'first_name' => 'Maaz', 'last_name' => 'LName', 'license_no' => 'AB152564', 
                'exp_in_years' => '8', 'contact_num' => '89723353', 'car_type' => 'Automatic, Manual',
                'language' => 'English, Urdu, Japanese', 
                'bio' => 'Lorem ipsum dolor sit amet, consectetur 
                adipiscing elit. Vestibulum viverra urna non turpis ullamcorper, sed varius ligula pretium. 
                Donec a orci in urna convallis sagittis a eu ex. Vivamus pellentesque nisl at dignissim mollis. 
                Suspendisse sed nisl neque. Phasellus vitae bibendum neque. Vestibulum ligula sapien, tristique 
                rutrum urna pharetra, efficitur facilisis ante.'
            ],
            [
                'first_name' => 'Alex', 'last_name' => 'Phan', 'license_no' => 'AB232564', 
                'exp_in_years' => '5', 'contact_num' => '1233245', 'car_type' => 'Manual',
                'language' => 'English, Mexican', 
                'bio' => 'Lorem ipsum dolor sit amet, consectetur 
                adipiscing elit. Vestibulum viverra urna non turpis ullamcorper, sed varius ligula pretium. 
                Donec a orci in urna convallis sagittis a eu ex. Vivamus pellentesque nisl at dignissim mollis. 
                Suspendisse sed nisl neque. Phasellus vitae bibendum neque. Vestibulum ligula sapien, tristique 
                rutrum urna pharetra, efficitur facilisis ante.'
            ],
            [
                'first_name' => 'Jamal', 'last_name' => 'Chohan', 'license_no' => 'AB152512', 
                'exp_in_years' => '2', 'contact_num' => '412452342', 'car_type' => 'Automatic',
                'language' => 'English, Urdu, Japanese', 
                'bio' => 'Lorem ipsum dolor sit amet, consectetur 
                adipiscing elit. Vestibulum viverra urna non turpis ullamcorper, sed varius ligula pretium. 
                Donec a orci in urna convallis sagittis a eu ex. Vivamus pellentesque nisl at dignissim mollis. 
                Suspendisse sed nisl neque. Phasellus vitae bibendum neque. Vestibulum ligula sapien, tristique 
                rutrum urna pharetra, efficitur facilisis ante.'
            ],
            [
                'first_name' => 'Nick', 'last_name' => 'Jonas', 'license_no' => 'AB1522132', 
                'exp_in_years' => '6', 'contact_num' => '123125123', 'car_type' => 'Automatic',
                'language' => 'English, Urdu, Japanese', 
                'bio' => 'Lorem ipsum dolor sit amet, consectetur 
                adipiscing elit. Vestibulum viverra urna non turpis ullamcorper, sed varius ligula pretium. 
                Donec a orci in urna convallis sagittis a eu ex. Vivamus pellentesque nisl at dignissim mollis. 
                Suspendisse sed nisl neque. Phasellus vitae bibendum neque. Vestibulum ligula sapien, tristique 
                rutrum urna pharetra, efficitur facilisis ante.'
            ]
        ];

        
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
        Instructor::insert($instructor_array);
    }
}
