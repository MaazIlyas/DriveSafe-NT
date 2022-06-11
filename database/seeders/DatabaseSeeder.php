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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //Calling the seeds to run
        $this->call([
            InstructorSeeder::class,
            UserSeeder::class,
            ReviewSeeder::class,
        ]);
        
    }
}
