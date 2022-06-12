<?php
//Created by using cpommand "php artisan make:seeder DatabaseSeeder" Generic Seeder


namespace Database\Seeders;
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
        //Calling the seeds to run
        $this->call([
            SchoolSeeder::class,
            InstructorSeeder::class,
            UserSeeder::class,
            ReviewSeeder::class,
        ]);
        
    }
}
