<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//Using reivew model
use App\Models\Review;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Review table seeds
        $review_array = [
            [
                'rating' => '5', 'review' => 'Superb Instructor!', 'user_id' => 1, 'instructor_id' => 1, 
                'created_at' => '2022-06-10 09:52:29', 'updated_at' => '2022-06-10 09:52:29'
            ],
            [
                'rating' => '3', 'review' => 'Moderate Instructor.', 'user_id' => 2, 'instructor_id' => 1, 
                'created_at' => '2022-06-10 09:53:27', 'updated_at' => '2022-06-10 09:53:27'
            ]
        ];

        Review::insert($review_array);
    }
}
