<?php

namespace Database\Seeders;

use App\Models\TaxonomyContent;
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

        /**
         * cars
         */
        $cars_id = DB::table('taxonomy_contents')->where('title', TaxonomyContent::TITLE_CARS)->pluck('id')->first();

        $toyota_id = DB::table('taxonomy_contents')->where('title', TaxonomyContent::TITLE_TOYOTA)->pluck('id')->first();

        $land_cruiser_id = DB::table('taxonomy_contents')->where('title', 'land cruiser')->pluck('id')->first();

        $camry_id = DB::table('taxonomy_contents')->where('title', 'camry')->pluck('id')->first();

        $avalon_id = DB::table('taxonomy_contents')->where('title', 'avalon')->pluck('id')->first();

        $hilux_id = DB::table('taxonomy_contents')->where('title', 'hilux')->pluck('id')->first();

        $corolla_id = DB::table('taxonomy_contents')->where('title', 'corolla')->pluck('id')->first();

        $car_model_2022_id = DB::table('taxonomy_contents')->where('title', '2020')->pluck('id')->first();

        $ad_taxonomy_content = array(

            array('ad_id' => 1, 'taxonomy_content_id' => $cars_id,  'created_at' => now()),    // cars
            array('ad_id' => 1, 'taxonomy_content_id' => $toyota_id,  'created_at' => now()),    // toyota
            array('ad_id' => 1, 'taxonomy_content_id' => $land_cruiser_id,  'created_at' => now()),  // land cruiser
            array('ad_id' => 1, 'taxonomy_content_id' => $car_model_2022_id,  'created_at' => now()),  // 2020

            array('ad_id' => 2, 'taxonomy_content_id' => $cars_id,  'created_at' => now()),    // cars
            array('ad_id' => 2, 'taxonomy_content_id' => $toyota_id,  'created_at' => now()),    // toyota
            array('ad_id' => 2, 'taxonomy_content_id' => $camry_id,  'created_at' => now()),  // camry
            array('ad_id' => 2, 'taxonomy_content_id' => $car_model_2022_id,  'created_at' => now()),  // 2020

            array('ad_id' => 2, 'taxonomy_content_id' => $cars_id,  'created_at' => now()),    // cars
            array('ad_id' => 2, 'taxonomy_content_id' => $toyota_id,  'created_at' => now()),    // toyota
            array('ad_id' => 2, 'taxonomy_content_id' => $avalon_id,  'created_at' => now()),  // avalon
            array('ad_id' => 2, 'taxonomy_content_id' => $car_model_2022_id,  'created_at' => now()),  // 2020

            array('ad_id' => 2, 'taxonomy_content_id' => $cars_id,  'created_at' => now()),    // cars
            array('ad_id' => 2, 'taxonomy_content_id' => $toyota_id,  'created_at' => now()),    // toyota
            array('ad_id' => 2, 'taxonomy_content_id' => $hilux_id,  'created_at' => now()),  // hilux
            array('ad_id' => 2, 'taxonomy_content_id' => $car_model_2022_id,  'created_at' => now()),  // 2020

            array('ad_id' => 2, 'taxonomy_content_id' => $cars_id,  'created_at' => now()),    // cars
            array('ad_id' => 2, 'taxonomy_content_id' => $toyota_id,  'created_at' => now()),    // toyota
            array('ad_id' => 2, 'taxonomy_content_id' => $corolla_id,  'created_at' => now()),  // corolla
            array('ad_id' => 2, 'taxonomy_content_id' => $car_model_2022_id,  'created_at' => now()),  // 2020
        );
        DB::table('ad_taxonomy_content')->insert($ad_taxonomy_content);

        /**
         * devices
         */

        $devices_id = DB::table('taxonomy_contents')->where('title', TaxonomyContent::TITLE_DEVICES)->pluck('id')->first();

        $apple_id = DB::table('taxonomy_contents')->where('title', TaxonomyContent::TITLE_APPLE)->pluck('id')->first();

        $iphone_12_pro_id = DB::table('taxonomy_contents')->where('title', 'iphone 12 pro')->pluck('id')->first();

        $iphone_12_pro_max_id = DB::table('taxonomy_contents')->where('title', 'iphone 12 pro max')->pluck('id')->first();

        $apple_watch_id = DB::table('taxonomy_contents')->where('title', 'apple watch')->pluck('id')->first();

        $iphone_12_id = DB::table('taxonomy_contents')->where('title', 'iphone 12')->pluck('id')->first();

        $iphone_12_mini_id = DB::table('taxonomy_contents')->where('title', 'iphone 12 mini')->pluck('id')->first();

        $airpods_id = DB::table('taxonomy_contents')->where('title', 'airpods')->pluck('id')->first();

        $ad_taxonomy_content = array(

            array('ad_id' => 6, 'taxonomy_content_id' => $devices_id,  'created_at' => now()),    // devices
            array('ad_id' => 6, 'taxonomy_content_id' => $apple_id,  'created_at' => now()),    // apple
            array('ad_id' => 6, 'taxonomy_content_id' => $iphone_12_pro_id,  'created_at' => now()),  // iphone 12 pro

            array('ad_id' => 7, 'taxonomy_content_id' => $devices_id,  'created_at' => now()),    // devices
            array('ad_id' => 7, 'taxonomy_content_id' => $apple_id,  'created_at' => now()),    // apple
            array('ad_id' => 7, 'taxonomy_content_id' => $iphone_12_pro_max_id,  'created_at' => now()),  // iphone 12 pro max

            array('ad_id' => 8, 'taxonomy_content_id' => $devices_id,  'created_at' => now()),    // devices
            array('ad_id' => 8, 'taxonomy_content_id' => $apple_id,  'created_at' => now()),    // apple
            array('ad_id' => 8, 'taxonomy_content_id' => $apple_watch_id,  'created_at' => now()),  // apple watch

            array('ad_id' => 9, 'taxonomy_content_id' => $devices_id,  'created_at' => now()),    // devices
            array('ad_id' => 9, 'taxonomy_content_id' => $apple_id,  'created_at' => now()),    // apple
            array('ad_id' => 9, 'taxonomy_content_id' => $iphone_12_id,  'created_at' => now()),  // iphone 12

            array('ad_id' => 10, 'taxonomy_content_id' => $devices_id,  'created_at' => now()),    // devices
            array('ad_id' => 10, 'taxonomy_content_id' => $apple_id,  'created_at' => now()),    // apple
            array('ad_id' => 10, 'taxonomy_content_id' => $iphone_12_mini_id,  'created_at' => now()),  // iphone 12 mini

            array('ad_id' => 11, 'taxonomy_content_id' => $devices_id,  'created_at' => now()),    // devices
            array('ad_id' => 11, 'taxonomy_content_id' => $apple_id,  'created_at' => now()),    // apple
            array('ad_id' => 11, 'taxonomy_content_id' => $airpods_id,  'created_at' => now()),  // airpods
        );

        DB::table('ad_taxonomy_content')->insert($ad_taxonomy_content);
    }
}
