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
            array('id' => 1, 'from_id' => 1, 'to_id' => 2, 'body' => 'Hello', 'seen_at' => null),
            array('id' => 2, 'from_id' => 2, 'to_id' => 1, 'body' => 'hi', 'seen_at' => null),
        );
        DB::table('messages')->insert($messages);
    }
}
