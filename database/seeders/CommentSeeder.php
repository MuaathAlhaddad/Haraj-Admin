<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('comments')->delete();
        $comments = array(
            array('id' => 1, 'body' => 'Is it last price?', 'ad_id' => 1, 'user_id' => 1),
            array('id' => 2, 'body' => 'Are you near from Magadishu?', 'ad_id' => 1, 'user_id' => 2),
        );
        DB::table('comments')->insert($comments);
    }
}
