<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ads')->delete();
        $ads = array(
            array('id' => 1, 'sku' => 111, 'name' => 'car for sale', 'description' => 'This car is for sale for 20000$ if interstted text me', 'price' => 20000, 'quantity' => 1, 'user_id' => 1, 'negotiable' => true, 'status' => 'pending', 'warranty' => false, 'favorited' => false),
            array('id' => 2, 'sku' => 222, 'name' => 'Hourse for sale', 'description' => 'This Hourse is for sale for 10000$ if interstted text me', 'price' => 10000, 'quantity' => 1, 'user_id' => 1, 'negotiable' => true, 'status' => 'pending', 'warranty' => false, 'favorited' => false),
            array('id' => 3, 'sku' => 333, 'name' => 'Honey for sale', 'description' => 'This Honey is for sale for 200$ if interstted text me', 'price' => 200, 'quantity' => 1, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'warranty' => false, 'favorited' => false),
        );
        DB::table('ads')->insert($ads);
    }
}
