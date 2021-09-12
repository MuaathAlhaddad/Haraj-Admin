<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('messages')->delete();
        $messages = array(
            array('from_id' => 1, 'to_id' => 2, 'body' => 'Hello two', 'seen_at' => null, 'created_at' => now()->addMillisecond(1) ),
            array('from_id' => 2, 'to_id' => 1, 'body' => 'hi one', 'seen_at' => null, 'created_at' => now()->addMillisecond(2)),

            array('from_id' => 1, 'to_id' => 2, 'body' => 'I am one, What is your name? it seems to be two', 'seen_at' => null, 'created_at' => now()->addMillisecond(3)),
            array('from_id' => 2, 'to_id' => 1, 'body' => 'hi one, I am two', 'seen_at' => null, 'created_at' => now()->addMillisecond(4)),

            array('from_id' => 2, 'to_id' => 4, 'body' => 'I am two, What is your name? it seems to be four', 'seen_at' => null, 'created_at' => now()->addMillisecond(5)),
            array('from_id' => 4, 'to_id' => 2, 'body' => 'hi two, I am four', 'seen_at' => null, 'created_at' => now()->addMillisecond(6)),

            array('from_id' => 1, 'to_id' => 3, 'body' => 'I am one, What is your name? it seems to be three', 'seen_at' => null, 'created_at' => now()->addMillisecond(7)),
            array('from_id' => 3, 'to_id' => 1, 'body' => 'hi one, I am three', 'seen_at' => null, 'created_at' => now()->addMillisecond(8)),
        );
        DB::table('messages')->insert($messages);
    }
}
