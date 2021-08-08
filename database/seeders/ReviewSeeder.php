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
            array('id' => 1, 'body' => "This seller is the best I have ever seen", 'reviewer_id' => 1, 'user_id' => 2,   'star' => 5),
            array('id' => 2, 'body' => "This seller is the worest I have ever seen", 'reviewer_id' => 2, 'user_id' => 1,   'star' => 5),
        );
        DB::table('reviews')->insert($reviews);
    }
}
