<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('reviews')->delete();
        $reviews = array(
            // seller review
            array('body' => "This seller is the best I have ever seen", 'reviewable_id' => 1, 'reviewable_type' => 'user', 'reviewer_id' => 1,   'star' => 5),
            array('body' => "This seller is the worest I have ever seen", 'reviewable_id' => 2, 'reviewable_type' => 'user', 'reviewer_id' => 1,   'star' => 5),
            // ad review
            array('body' => "This ad is the best I have ever seen", 'reviewable_id' => 1, 'reviewable_type' => 'ad', 'reviewer_id' => 1,   'star' => 5),
            array('body' => "This ad is the worest I have ever seen", 'reviewable_id' => 2, 'reviewable_type' => 'ad', 'reviewer_id' => 1,   'star' => 5),
        );
        DB::table('reviews')->insert($reviews);
    }
}
