<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Review;

class ReviewSeeder extends Seeder
{
    public function run(): void
    {
        $reviews = [
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'comment' => 'The coffee here is amazing! The atmosphere is cozy and the staff is very friendly.',
                'rating' => 5,
                'is_approved' => true,
                'show_in_homepage' => true,
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'comment' => 'Best coffee shop in town! Love their signature drinks and pastries.',
                'rating' => 5,
                'is_approved' => true,
                'show_in_homepage' => true,
            ],
            [
                'name' => 'Mike Johnson',
                'email' => 'mike@example.com',
                'comment' => 'Great place to work or study. The wifi is fast and the coffee keeps me going!',
                'rating' => 5,
                'is_approved' => true,
                'show_in_homepage' => true,
            ],
        ];

        foreach ($reviews as $review) {
            Review::create($review);
        }
    }
} 