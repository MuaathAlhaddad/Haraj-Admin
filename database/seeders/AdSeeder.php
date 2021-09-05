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
            // cars
            array('id' => 1, 'sku' => '7209027818', 'title' => 'land cruiser', 'description' => 'This car is for sale for 20000$ if interstted text me', 'price' => 203300, 'user_id' => 1, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),
            array('id' => 2, 'sku' => '7209027819', 'title' => 'camry', 'description' => 'This Hourse is for sale for 10000$ if interstted text me', 'price' => 1000320, 'user_id' => 1, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),
            array('id' => 3, 'sku' => '7209027820', 'title' => 'avalon', 'description' => 'This Honey is for sale for 200$ if interstted text me', 'price' => 200323, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),
            array('id' => 4, 'sku' => '7209027821', 'title' => 'hilux', 'description' => 'This Honey is for sale for 200$ if interstted text me', 'price' => 20034, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),
            array('id' => 5, 'sku' => '7209027822', 'title' => 'corolla', 'description' => 'This Honey is for sale for 200$ if interstted text me', 'price' => 200343, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),

            // mobile
            array('id' => 6, 'sku' => '7209027823', 'title' => 'iphone 12 pro', 'description' => 'This Mobile is for sale for 200$ if interstted text me', 'price' => 2000, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),
            array('id' => 7, 'sku' => '7209027824', 'title' => 'iphone 12 pro max', 'description' => 'This Mobile is for sale for 200$ if interstted text me', 'price' => 2000, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),
            array('id' => 8, 'sku' => '7209027825', 'title' => 'apple watch', 'description' => 'This Mobile is for sale for 200$ if interstted text me', 'price' => 2000, 'user_id' => 2, 'negotiable' => false, 'status' => 'pending', 'created_at' => now()),
            array('id' => 9, 'sku' => '7209027826', 'title' => 'iphone 12', 'description' => 'This Mobile is for sale for 200$ if interstted text me', 'price' => 2000, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),
            array('id' => 10, 'sku' => '7209027827', 'title' => 'iphone 12 mini', 'description' => 'This Mobile is for sale for 200$ if interstted text me', 'price' => 3000, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),
            array('id' => 11, 'sku' => '7209027828', 'title' => 'airpods', 'description' => 'This Mobile is for sale for 200$ if interstted text me', 'price' => 4000, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),

            array('id' => 12, 'sku' => '7209027829', 'title' => 'Mobile for sale', 'description' => 'This Mobile is for sale for 200$ if interstted text me', 'price' => 200, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),
            array('id' => 13, 'sku' => '7209027830', 'title' => 'Honey for sale', 'description' => 'This Honey is for sale for 200$ if interstted text me', 'price' => 200, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),
            array('id' => 14, 'sku' => '7209027831', 'title' => 'Honey for sale', 'description' => 'This Honey is for sale for 200$ if interstted text me', 'price' => 200, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),
            array('id' => 15, 'sku' => '7209027832', 'title' => 'Honey for sale', 'description' => 'This Honey is for sale for 200$ if interstted text me', 'price' => 200, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),
            array('id' => 16, 'sku' => '7209027833', 'title' => 'Honey for sale', 'description' => 'This Honey is for sale for 200$ if interstted text me', 'price' => 200, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),
            array('id' => 17, 'sku' => '7209027834', 'title' => 'Honey for sale', 'description' => 'This Honey is for sale for 200$ if interstted text me', 'price' => 200, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),
            array('id' => 18, 'sku' => '7209027835', 'title' => 'Honey for sale', 'description' => 'This Honey is for sale for 200$ if interstted text me', 'price' => 200, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),
            array('id' => 19, 'sku' => '7209027836', 'title' => 'Honey for sale', 'description' => 'This Honey is for sale for 200$ if interstted text me', 'price' => 200, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),
            array('id' => 20, 'sku' => '7209027837', 'title' => 'Honey for sale', 'description' => 'This Honey is for sale for 200$ if interstted text me', 'price' => 200, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),
            array('id' => 21, 'sku' => '7209027838', 'title' => 'Honey for sale', 'description' => 'This Honey is for sale for 200$ if interstted text me', 'price' => 200, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),
            array('id' => 22, 'sku' => '7209027839', 'title' => 'Honey for sale', 'description' => 'This Honey is for sale for 200$ if interstted text me', 'price' => 200, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),
            array('id' => 23, 'sku' => '7209027840', 'title' => 'Honey for sale', 'description' => 'This Honey is for sale for 200$ if interstted text me', 'price' => 200, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),
            array('id' => 24, 'sku' => '7209027841', 'title' => 'Honey for sale', 'description' => 'This Honey is for sale for 200$ if interstted text me', 'price' => 200, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),
            array('id' => 25, 'sku' => '7209027842', 'title' => 'Honey for sale', 'description' => 'This Honey is for sale for 200$ if interstted text me', 'price' => 200, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),
            array('id' => 26, 'sku' => '7209027843', 'title' => 'Honey for sale', 'description' => 'This Honey is for sale for 200$ if interstted text me', 'price' => 200, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),
            array('id' => 27, 'sku' => '7209027844', 'title' => 'Honey for sale', 'description' => 'This Honey is for sale for 200$ if interstted text me', 'price' => 200, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),
            array('id' => 28, 'sku' => '7209027845', 'title' => 'Honey for sale', 'description' => 'This Honey is for sale for 200$ if interstted text me', 'price' => 200, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),
            array('id' => 29, 'sku' => '7209027846', 'title' => 'Honey for sale', 'description' => 'This Honey is for sale for 200$ if interstted text me', 'price' => 200, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),
            array('id' => 30, 'sku' => '7209027847', 'title' => 'Honey for sale', 'description' => 'This Honey is for sale for 200$ if interstted text me', 'price' => 200, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),
            array('id' => 31, 'sku' => '7209027848', 'title' => 'Honey for sale', 'description' => 'This Honey is for sale for 200$ if interstted text me', 'price' => 200, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),
            array('id' => 32, 'sku' => '7209027849', 'title' => 'Honey for sale', 'description' => 'This Honey is for sale for 200$ if interstted text me', 'price' => 200, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),
            array('id' => 33, 'sku' => '7209027850', 'title' => 'Honey for sale', 'description' => 'This Honey is for sale for 200$ if interstted text me', 'price' => 200, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),
            array('id' => 34, 'sku' => '7209027851', 'title' => 'Honey for sale', 'description' => 'This Honey is for sale for 200$ if interstted text me', 'price' => 200, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),
            array('id' => 35, 'sku' => '7209027852', 'title' => 'Honey for sale', 'description' => 'This Honey is for sale for 200$ if interstted text me', 'price' => 200, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),
            array('id' => 36, 'sku' => '7209027853', 'title' => 'Honey for sale', 'description' => 'This Honey is for sale for 200$ if interstted text me', 'price' => 200, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),
            array('id' => 37, 'sku' => '7209027854', 'title' => 'Honey for sale', 'description' => 'This Honey is for sale for 200$ if interstted text me', 'price' => 200, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),
            array('id' => 38, 'sku' => '7209027855', 'title' => 'Honey for sale', 'description' => 'This Honey is for sale for 200$ if interstted text me', 'price' => 200, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),
            array('id' => 39, 'sku' => '7209027856', 'title' => 'Honey for sale', 'description' => 'This Honey is for sale for 200$ if interstted text me', 'price' => 200, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),
            array('id' => 40, 'sku' => '7209027857', 'title' => 'Honey for sale', 'description' => 'This Honey is for sale for 200$ if interstted text me', 'price' => 200, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),
            array('id' => 41, 'sku' => '7209027858', 'title' => 'Honey for sale', 'description' => 'This Honey is for sale for 200$ if interstted text me', 'price' => 200, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),
            array('id' => 42, 'sku' => '7209027859', 'title' => 'Honey for sale', 'description' => 'This Honey is for sale for 200$ if interstted text me', 'price' => 200, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),
            array('id' => 43, 'sku' => '7209027860', 'title' => 'Honey for sale', 'description' => 'This Honey is for sale for 200$ if interstted text me', 'price' => 200, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),
            array('id' => 44, 'sku' => '7209027861', 'title' => 'Honey for sale', 'description' => 'This Honey is for sale for 200$ if interstted text me', 'price' => 200, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),
            array('id' => 45, 'sku' => '7209027862', 'title' => 'Honey for sale', 'description' => 'This Honey is for sale for 200$ if interstted text me', 'price' => 200, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),
            array('id' => 46, 'sku' => '7209027863', 'title' => 'Honey for sale', 'description' => 'This Honey is for sale for 200$ if interstted text me', 'price' => 200, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),
            array('id' => 47, 'sku' => '7209027864', 'title' => 'Honey for sale', 'description' => 'This Honey is for sale for 200$ if interstted text me', 'price' => 200, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),
            array('id' => 48, 'sku' => '7209027865', 'title' => 'Honey for sale', 'description' => 'This Honey is for sale for 200$ if interstted text me', 'price' => 200, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),
            array('id' => 49, 'sku' => '7209027866', 'title' => 'Honey for sale', 'description' => 'This Honey is for sale for 200$ if interstted text me', 'price' => 200, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),
            array('id' => 50, 'sku' => '7209027867', 'title' => 'Honey for sale', 'description' => 'This Honey is for sale for 200$ if interstted text me', 'price' => 200, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),
            array('id' => 51, 'sku' => '7209027868', 'title' => 'Honey for sale', 'description' => 'This Honey is for sale for 200$ if interstted text me', 'price' => 200, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),
            array('id' => 52, 'sku' => '7209027869', 'title' => 'Honey for sale', 'description' => 'This Honey is for sale for 200$ if interstted text me', 'price' => 200, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),
            array('id' => 53, 'sku' => '7209027870', 'title' => 'Honey for sale', 'description' => 'This Honey is for sale for 200$ if interstted text me', 'price' => 200, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),
            array('id' => 54, 'sku' => '7209027871', 'title' => 'Honey for sale', 'description' => 'This Honey is for sale for 200$ if interstted text me', 'price' => 200, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),
            array('id' => 55, 'sku' => '7209027872', 'title' => 'Honey for sale', 'description' => 'This Honey is for sale for 200$ if interstted text me', 'price' => 200, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),
            array('id' => 56, 'sku' => '7209027873', 'title' => 'Honey for sale', 'description' => 'This Honey is for sale for 200$ if interstted text me', 'price' => 200, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),
            array('id' => 57, 'sku' => '7209027874', 'title' => 'Honey for sale', 'description' => 'This Honey is for sale for 200$ if interstted text me', 'price' => 200, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),
            array('id' => 58, 'sku' => '7209027875', 'title' => 'Honey for sale', 'description' => 'This Honey is for sale for 200$ if interstted text me', 'price' => 200, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),
            array('id' => 59, 'sku' => '7209027876', 'title' => 'Honey for sale', 'description' => 'This Honey is for sale for 200$ if interstted text me', 'price' => 200, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),
            array('id' => 60, 'sku' => '7209027877', 'title' => 'Honey for sale', 'description' => 'This Honey is for sale for 200$ if interstted text me', 'price' => 200, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),
            array('id' => 61, 'sku' => '7209027878', 'title' => 'Honey for sale', 'description' => 'This Honey is for sale for 200$ if interstted text me', 'price' => 200, 'user_id' => 2, 'negotiable' => true, 'status' => 'pending', 'created_at' => now()),
        );
        DB::table('ads')->insert($ads);
    }
}
