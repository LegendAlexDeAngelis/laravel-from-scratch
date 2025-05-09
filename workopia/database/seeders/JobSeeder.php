<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Load job listings from the file
        $jobListings = include database_path('seeders/data/job_listings.php');

        // Get the test user id
        $testUserId = User::where('email', 'test@test.com')->value('id');

        // Get all other user ids from user model
        $userIds = User::where('email', '!=', 'test@test.com')->pluck('id')->toArray();

        // Lopp through the job listings and insert them into the database
        foreach ($jobListings as $index => &$listing) {

            if ($index < 2) {
                // Assign the first two liststings to the test user
                $listing['user_id'] = $testUserId;
            } else {
                $listing['user_id'] = $userIds[array_rand($userIds)];
            }

            // Add timestamps
            $listing['created_at'] = now();
            $listing['updated_at'] = now();
        }

        // Insert job listings into the database
        DB::table('job_listings')->insert($jobListings);
        echo 'Jobs created successfully';
    }
}
