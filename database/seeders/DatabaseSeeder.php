<?php

namespace Database\Seeders;

use App\Models\Instructor;
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

        $instructor_array = [
            [
            'first_name' => 'abc',
            'first_name' => 'abc',
            'first_name' => 'abc',
            'first_name' => 'abc',
            'first_name' => 'abc',
            'first_name' => 'abc',
            'first_name' => 'abc',
            'first_name' => 'abc'
            ],
            [
                'first_name' => 'abc',
                'first_name' => 'abc',
                'first_name' => 'abc',
                'first_name' => 'abc',
                'first_name' => 'abc',
                'first_name' => 'abc',
                'first_name' => 'abc',
                'first_name' => 'abc'
            ],
            [
                'first_name' => 'abc',
                'first_name' => 'abc',
                'first_name' => 'abc',
                'first_name' => 'abc',
                'first_name' => 'abc',
                'first_name' => 'abc',
                'first_name' => 'abc',
                'first_name' => 'abc'
            ]
        ];

        Instructor::insert($instructor_array);
    }
}
