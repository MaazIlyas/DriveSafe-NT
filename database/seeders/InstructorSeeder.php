<?php

//Created using command: php artisan make:seeder UserSeeder


namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//Using Instructor model
use App\Models\Instructor;

class InstructorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $description = 'Lorem ipsum dolor sit amet, consectetur 
        adipiscing elit. Vestibulum viverra urna non turpis ullamcorper, sed varius ligula pretium. 
        Donec a orci in urna convallis sagittis a eu ex. Vivamus pellentesque nisl at dignissim mollis. 
        Suspendisse sed nisl neque. Phasellus vitae bibendum neque. Vestibulum ligula sapien, tristique 
        rutrum urna pharetra, efficitur facilisis ante.';
        
        //Instructor Table seeds
        $instructor_array = [
            [
                'first_name' => 'Maaz', 'last_name' => 'Ilyas', 'license_no' => 'AB152564', 
                'exp_in_years' => '8', 'contact_num' => '89723353', 'car_type' => 'Automatic, Manual',
                'language' => 'English, Urdu, Japanese', 
                'bio' => $description, 'school_id' => '1', 'created_at' => now(), 'updated_at' => now()
            ],
            [
                'first_name' => 'Alex', 'last_name' => 'Phan', 'license_no' => 'AB232564', 
                'exp_in_years' => '5', 'contact_num' => '1233245', 'car_type' => 'Manual',
                'language' => 'English, Mexican', 
                'bio' => $description, 'school_id' => '2', 'created_at' => now(), 'updated_at' => now()
            ],
            [
                'first_name' => 'Jamal', 'last_name' => 'Chohan', 'license_no' => 'AB152512', 
                'exp_in_years' => '2', 'contact_num' => '412452342', 'car_type' => 'Automatic',
                'language' => 'English, Urdu, Japanese', 
                'bio' => $description, 'school_id' => '3', 'created_at' => now(), 'updated_at' => now()
            ],
            [
                'first_name' => 'Nick', 'last_name' => 'Jonas', 'license_no' => 'AB1522132', 
                'exp_in_years' => '6', 'contact_num' => '123125123', 'car_type' => 'Automatic',
                'language' => 'English, Urdu, Japanese', 
                'bio' => $description, 'school_id' => '4', 'created_at' => now(), 'updated_at' => now()
            ],
            [
                'first_name' => 'Aliza', 'last_name' => 'Sheikh', 'license_no' => 'AB2323564', 
                'exp_in_years' => '2', 'contact_num' => '242353', 'car_type' => 'Automatic, Manual',
                'language' => 'English, Mexican', 
                'bio' => $description, 'school_id' => '1', 'created_at' => now(), 'updated_at' => now()
            ],
            [
                'first_name' => 'Jamala', 'last_name' => 'Chohana', 'license_no' => 'AB153412', 
                'exp_in_years' => '12', 'contact_num' => '123452345', 'car_type' => 'Automatic',
                'language' => 'English, Urdu, Chinese', 
                'bio' => $description, 'school_id' => '2', 'created_at' => now(), 'updated_at' => now()
            ],
            [
                'first_name' => 'Niko', 'last_name' => 'Junasa', 'license_no' => 'AB15234232', 
                'exp_in_years' => '6', 'contact_num' => '123423423', 'car_type' => 'Automatic, Manual',
                'language' => 'English, Japanese', 
                'bio' => $description, 'school_id' => '4', 'created_at' => now(), 'updated_at' => now()
            ],
            [
                'first_name' => 'Anika', 'last_name' => 'George', 'license_no' => 'AB232664', 
                'exp_in_years' => '19', 'contact_num' => '632342245', 'car_type' => 'Automatic',
                'language' => 'English, Mexican', 
                'bio' => $description, 'school_id' => '3', 'created_at' => now(), 'updated_at' => now()
            ],
            [
                'first_name' => 'Luis', 'last_name' => 'Silvia', 'license_no' => 'AB1523212', 
                'exp_in_years' => '20', 'contact_num' => '4124523342', 'car_type' => 'Automatic, Manual',
                'language' => 'English', 
                'bio' => $description, 'school_id' => '1', 'created_at' => now(), 'updated_at' => now()
            ],
            [
                'first_name' => 'Sami', 'last_name' => 'Azam', 'license_no' => 'AB1529032', 
                'exp_in_years' => '22', 'contact_num' => '123125343', 'car_type' => 'Automatic',
                'language' => 'English, Bengali, Japanese', 
                'bio' => $description, 'school_id' => '2', 'created_at' => now(), 'updated_at' => now()
            ],
            [
                'first_name' => 'Alex', 'last_name' => 'George', 'license_no' => 'AB3232664', 
                'exp_in_years' => '19', 'contact_num' => '632342245', 'car_type' => 'Automatic',
                'language' => 'English, Mexican', 
                'bio' => $description, 'school_id' => '3', 'created_at' => now(), 'updated_at' => now()
            ],
            [
                'first_name' => 'Siri', 'last_name' => 'David', 'license_no' => 'AB15234212', 
                'exp_in_years' => '22', 'contact_num' => '41243141342', 'car_type' => 'Automatic, Manual',
                'language' => 'English', 
                'bio' => $description, 'school_id' => '4', 'created_at' => now(), 'updated_at' => now()
            ],
            [
                'first_name' => 'Sami', 'last_name' => 'Azam', 'license_no' => 'AB1529032', 
                'exp_in_years' => '23', 'contact_num' => '123125343', 'car_type' => 'Automatic',
                'language' => 'English, Bengali, Japanese', 
                'bio' => $description, 'school_id' => '3', 'created_at' => now(), 'updated_at' => now()
            ]
        ];

        //Inserting in the tables
        Instructor::insert($instructor_array);
    }
}
