<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('orders')->delete();
        $orders = array(
            array('id' => 1, 'ad_id' => 1, 'user_id' => 1, 'quantity' => 1, 'status' => true, 'total' => 100),
            array('id' => 2, 'ad_id' => 2, 'user_id' => 1, 'quantity' => 1, 'status' => true, 'total' => 200),
        );
        DB::table('orders')->insert($orders);
    }
}
