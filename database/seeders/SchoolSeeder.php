<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//Using Instructor model
use App\Models\School;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //School table seeds
        $school_array = [
            [
                'name' => 'School ABC', 'street_address' => '1 Witherden st', 'city' => 'Alice Springs', 
                'state' => 'NT', 'post_code' => '0800' , 'created_at' => now(), 'updated_at' => now()
            ],
            [
                'name' => 'School JKL', 'street_address' => '2 River st', 'city' => 'Darwin', 
                'state' => 'NT', 'post_code' => '0820', 'created_at' => now(), 'updated_at' => now()
            ],
            [
                'name' => 'School UVW', 'street_address' => '8 Smiths st', 'city' => 'Big Rivers', 
                'state' => 'NT', 'post_code' => '0830', 'created_at' => now(), 'updated_at' => now()
            ],
            [
                'name' => 'School XYZ', 'street_address' => '9 Werder st', 'city' => 'Palmerston', 
                'state' => 'NT', 'post_code' => '0840', 'created_at' => now(), 'updated_at' => now()
            ]
        ];

        School::insert($school_array);
    }
}
