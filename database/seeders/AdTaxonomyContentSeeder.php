<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdTaxonomyContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ad_taxonomy_content')->delete();
        $ad_taxonomy_content = array(

            array('ad_id' => 1, 'taxonomy_content_id' => 1,  'created_at' => now()),    // cars
            array('ad_id' => 1, 'taxonomy_content_id' => 5,  'created_at' => now()),    // toyota
            array('ad_id' => 1, 'taxonomy_content_id' => 164,  'created_at' => now()),  // land cruiser
            array('ad_id' => 1, 'taxonomy_content_id' => 204,  'created_at' => now()),  // 2020

            array('ad_id' => 2, 'taxonomy_content_id' => 1,  'created_at' => now()),    // cars
            array('ad_id' => 2, 'taxonomy_content_id' => 5,  'created_at' => now()),    // toyota
            array('ad_id' => 2, 'taxonomy_content_id' => 165,  'created_at' => now()),  // camry
            array('ad_id' => 2, 'taxonomy_content_id' => 204,  'created_at' => now()),  // 2020

            array('ad_id' => 2, 'taxonomy_content_id' => 1,  'created_at' => now()),    // cars
            array('ad_id' => 2, 'taxonomy_content_id' => 5,  'created_at' => now()),    // toyota
            array('ad_id' => 2, 'taxonomy_content_id' => 166,  'created_at' => now()),  // avalon
            array('ad_id' => 2, 'taxonomy_content_id' => 204,  'created_at' => now()),  // 2020

            array('ad_id' => 2, 'taxonomy_content_id' => 1,  'created_at' => now()),    // cars
            array('ad_id' => 2, 'taxonomy_content_id' => 5,  'created_at' => now()),    // toyota
            array('ad_id' => 2, 'taxonomy_content_id' => 167,  'created_at' => now()),  // hilux
            array('ad_id' => 2, 'taxonomy_content_id' => 204,  'created_at' => now()),  // 2020

            array('ad_id' => 2, 'taxonomy_content_id' => 1,  'created_at' => now()),    // cars
            array('ad_id' => 2, 'taxonomy_content_id' => 5,  'created_at' => now()),    // toyota
            array('ad_id' => 2, 'taxonomy_content_id' => 168,  'created_at' => now()),  // corolla
            array('ad_id' => 2, 'taxonomy_content_id' => 204,  'created_at' => now()),  // 2020

            array('ad_id' => 6, 'taxonomy_content_id' => 2,  'created_at' => now()),    // devices
            array('ad_id' => 6, 'taxonomy_content_id' => 52,  'created_at' => now()),    // apple
            array('ad_id' => 6, 'taxonomy_content_id' => 206,  'created_at' => now()),  // iphone 12 pro

            array('ad_id' => 7, 'taxonomy_content_id' => 2,  'created_at' => now()),    // devices
            array('ad_id' => 7, 'taxonomy_content_id' => 52,  'created_at' => now()),    // apple
            array('ad_id' => 7, 'taxonomy_content_id' => 207,  'created_at' => now()),  // iphone 12 pro max

            array('ad_id' => 8, 'taxonomy_content_id' => 2,  'created_at' => now()),    // devices
            array('ad_id' => 8, 'taxonomy_content_id' => 52,  'created_at' => now()),    // apple
            array('ad_id' => 8, 'taxonomy_content_id' => 208,  'created_at' => now()),  // apple watch

            array('ad_id' => 9, 'taxonomy_content_id' => 2,  'created_at' => now()),    // devices
            array('ad_id' => 9, 'taxonomy_content_id' => 52,  'created_at' => now()),    // apple
            array('ad_id' => 9, 'taxonomy_content_id' => 209,  'created_at' => now()),  // iphone 12

            array('ad_id' => 10, 'taxonomy_content_id' => 2,  'created_at' => now()),    // devices
            array('ad_id' => 10, 'taxonomy_content_id' => 52,  'created_at' => now()),    // apple
            array('ad_id' => 10, 'taxonomy_content_id' => 210,  'created_at' => now()),  // iphone 12 mini

            array('ad_id' => 11, 'taxonomy_content_id' => 2,  'created_at' => now()),    // devices
            array('ad_id' => 11, 'taxonomy_content_id' => 52,  'created_at' => now()),    // apple
            array('ad_id' => 11, 'taxonomy_content_id' => 211,  'created_at' => now()),  // airpods
        );
        DB::table('ad_taxonomy_content')->insert($ad_taxonomy_content);
    }
}
