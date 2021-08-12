<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Taxonomy_contentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('taxonomy_contents')->delete();
        $taxonomy_contents = array(
            //    harajs
            array('title' => 'Cars', 'description' => "All ads about cars", 'taxonomy_id' => 1, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Devices', 'description' => "All ads about Devices including electronics...", 'taxonomy_id' => 1, 'published_at' => null, 'lang' => null),
            array('title' => 'Real Estate', 'description' => "All ads that deals with the buying, selling, management, or investment of real estate properties.", 'taxonomy_id' => 1, 'published_at' => null, 'lang' => null),


            // brands - cars
            array('title' => 'Honda', 'description' => "automobile manufacturers of Japan", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Infiniti', 'description' => "automobile manufacturers of Japan", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Lexus', 'description' => "automobile manufacturers of Japan", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Mazda', 'description' => "automobile manufacturers of Japan", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Mitsubishi', 'description' => "automobile manufacturers of Japan", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Nissan', 'description' => "automobile manufacturers of Japan", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Subaru', 'description' => "automobile manufacturers of Japan", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Suzuki', 'description' => "automobile manufacturers of Japan", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Toyota', 'description' => "automobile manufacturers of Japan", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),

            //  brands - mobiles
            array('title' => 'acer', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'alcatel', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'allview', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'amazon', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'amoi', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'apple', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'archos', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'asus', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'at&t', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'benefon', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'benq', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'benq-siemens', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'bird', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'blackberry', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'blackview', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'blu', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'bosch', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'bq', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'casio', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'cat', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'celkon', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'chea', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'coolpad', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'dell', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'emporia', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'energizer', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'ericsson', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'eten', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'fairphone', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'fujitsu siemens', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'garmin-asus', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'gigabyte', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'gionee', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'google', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'haier', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'honor', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'hp', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'htc', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'huawei', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'i-mate', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'i-mobile', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'icemobile', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'infinix', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'innostream', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'inq', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'intex', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'jolla', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'karbonn', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'kyocera', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'lava', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'leeco', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'lenovo', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'lg', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'maxon', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'maxwest', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'meizu', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'micromax', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'microsoft', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'mitac', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'mitsubishi', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'modu', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'motorola', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'mwg', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'nec', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'neonode', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'niu', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'nokia', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'nvidia', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'o2', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'oneplus', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'oppo', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'orange', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'palm', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'panasonic', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'pantech', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'parla', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'philips', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'plum', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'posh', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'prestigio', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'qmobile', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'qtek', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'razer', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'realme', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'sagem', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'samsung', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'sendo', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'sewon', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'sharp', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'siemens', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'sonim', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'sony', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'sony ericsson', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'spice', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 't-mobile', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'tcl', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'tecno', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'tel.me.', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'telit', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'thuraya', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'toshiba', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'ulefone', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'unnecto', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'vertu', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'verykool', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'vivo', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'vk mobile', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'vodafone', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'wiko', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'wnd', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'xcute', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'xiaomi', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'xolo', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'yezz', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'yota', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'yu', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'zte', 'description' => "Mobile Brands", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),

            // models - mobile - apple
            array('title' => 'iPhone 12 Pro', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'iPhone 12 Pro Max', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'iPhone 12 Pro Max', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'iPhone 12', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'iPhone 12 mini', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'iPhone 12', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'iPhone 12', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'iPhone SE (2020)', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'iPhone SE (2020)', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'iPhone 11 Pro', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'iPhone 11 Pro', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'iPhone 11 Pro Max', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'iPhone 11 Pro Max', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'iPhone 11', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'iPhone 11', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Apple iPhone XR', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Apple iPhone XR', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Apple iPhone XS Max', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Apple iPhone XS Max', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Apple iPhone XS', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Apple iPhone XS', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Apple iPhone 8', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Apple iPhone 8', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),

            // models - mobile - apple
            array('title' => 'iPhone 12 Pro', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'iPhone 12 Pro Max', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'iPhone 12 Pro Max', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'iPhone 12', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'iPhone 12 mini', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'iPhone 12', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'iPhone 12', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'iPhone SE (2020)', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'iPhone SE (2020)', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'iPhone 11 Pro', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'iPhone 11 Pro', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'iPhone 11 Pro Max', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'iPhone 11 Pro Max', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'iPhone 11', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'iPhone 11', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Apple iPhone XR', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Apple iPhone XR', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Apple iPhone XS Max', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Apple iPhone XS Max', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Apple iPhone XS', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Apple iPhone XS', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Apple iPhone 8', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Apple iPhone 8', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'iPhone 11 Pro', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'iPhone 11 Pro', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'iPhone 11 Pro Max', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'iPhone 11 Pro Max', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'iPhone 11', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'iPhone 11', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Apple iPhone XR', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Apple iPhone XR', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Apple iPhone XS Max', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Apple iPhone XS Max', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Apple iPhone XS', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Apple iPhone XS', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Apple iPhone 8', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Apple iPhone 8', 'description' => "Apple Brand", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),



//
//            Samsung A12 Nacho
//Samsung Galaxy M21 2021 Edition
//Samsung Galaxy M21 2021 Edition
//Samsung Galaxy F22
//Samsung Galaxy F22
//Samsung Galaxy A22
//Samsung Galaxy A22
//Samsung Galaxy M32
//Samsung Galaxy M32
//Samsung Galaxy A22 5G
//Samsung Galaxy A22 5G
//Samsung Galaxy F52 5G
//Samsung Galaxy F52 5G
//Samsung Galaxy Quantum 2
//Samsung Galaxy Quantum 2
//Samsung Galaxy F02s
//Samsung Galaxy F02s
//Samsung Galaxy F12
//Samsung Galaxy F12
//Samsung Galaxy M42 5G
//Samsung Galaxy M42 5G
//upcomingSamsung Galaxy Xcover 5
//Samsung Galaxy Xcover 5
//Samsung Galaxy A52 5G
//Samsung Galaxy A52 5G
//Samsung Galaxy A52
//Samsung Galaxy A52
//Samsung Galaxy A72
//Samsung Galaxy A72
//Samsung Galaxy S20 FE 5G
//Samsung Galaxy S20 FE 5G
//Samsung Galaxy A32 4G
//Samsung Galaxy A32 4G
//Samsung Galaxy M62
//Samsung Galaxy M62
//Samsung Galaxy F62
//Samsung Galaxy F62
//Samsung Galaxy M12
//Samsung Galaxy M12
//Samsung Galaxy M02
//Samsung Galaxy M02
//Samsung Galaxy A02
//Samsung Galaxy A02
//Samsung Galaxy A32 5G
//Samsung Galaxy A32 5G
//Samsung Galaxy M02s
//Samsung Galaxy M02s
//Samsung Galaxy S21 Ultra
//Samsung Galaxy S21 Ultra
//Samsung Galaxy S21+
//    Samsung Galaxy S21+
//    Samsung Galaxy S21
//Samsung Galaxy S21
//Samsung Galaxy A02s
//Samsung Galaxy A02s
//Samsung Galaxy A12
//Samsung Galaxy A12
//Samsung Galaxy M21s
//Samsung Galaxy M21s
//Samsung W21 5G
//Samsung W21 5G
//Samsung Galaxy F41
//Samsung Galaxy F41
//Samsung Galaxy A3 Core
//Samsung Galaxy A3 Core
//Samsung Galaxy S20 FE
//Samsung Galaxy S20 FE
//Samsung Galaxy A42 5G
//Samsung Galaxy A42 5G
//Samsung Galaxy Z Fold 2
//Samsung Galaxy Z Fold 2
//Samsung Galaxy M51
//Samsung Galaxy M51
//Samsung Galaxy Note 20 Ultra 5G
//Samsung Galaxy Note 20 Ultra 5G
//Samsung Galaxy Note 20 5G
//Samsung Galaxy Note 20 5G
//Samsung Galaxy Note 20 Ultra
//Samsung Galaxy Note 20 Ultra



















            array('title' => 'iphone 7', 'description' => "Mobile model", 'taxonomy_id' => 4, 'published_at' => null, 'lang' => 'en'),

            //  models - mobile
            array('title' => '2017', 'mobile' => "Car model", 'taxonomy_id' => 4, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'zte', 'mobile' => "Mobile Brands", 'taxonomy_id' => 4, 'published_at' => null, 'lang' => 'en'),




































































































































        );
        DB::table('taxonomy_contents')->insert($taxonomy_contents);
    }
}
