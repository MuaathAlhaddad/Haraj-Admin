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
            array('title' => 'Furniture', 'description' => "All ads that deals with the buying, selling, management, or investment of real estate properties.", 'taxonomy_id' => 1, 'published_at' => null, 'lang' => null),
 
 
 
             // brands - cars
            array('title' =>'Toyota', 'description' => "automobile manufacturers of Japan", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Ford' , 'description' => "automobile manufacturers of Japan", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Chevrolet' , 'description' => "automobile manufacturers of Japan", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Hyundai' , 'description' => "automobile manufacturers of Japan", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' =>  'mercedes', 'description' => "automobile manufacturers of Japan", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' =>  'Honda', 'description' => "automobile manufacturers of Japan", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' =>  'BMW', 'description' => "automobile manufacturers of Japan", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' =>  'dodge', 'description' => "automobile manufacturers of Japan", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' =>   'GMS', 'description' => "automobile manufacturers of Japan", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' =>  'Chrysler', 'description' => "automobile manufacturers of Japan", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' =>  'pocket', 'description' => "automobile manufacturers of Japan", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' =>  'Mitsubishi', 'description' => "automobile manufacturers of Japan", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' =>  'Mazda', 'description' => "automobile manufacturers of Japan", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' =>  'land Rover', 'description' => "automobile manufacturers of Japan", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' =>  'Isuzu', 'description' => "automobile manufacturers of Japan", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' =>  'Cadillac', 'description' => "automobile manufacturers of Japan", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' =>  'Porsche', 'description' => "automobile manufacturers of Japan", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' =>  'Audi', 'description' => "automobile manufacturers of Japan", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' =>  'suzuki', 'description' => "automobile manufacturers of Japan", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' =>  'infinity', 'description' => "automobile manufacturers of Japan", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Hummer' , 'description' => "automobile manufacturers of Japan", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Lincoln' , 'description' => "automobile manufacturers of Japan", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'volks' , 'description' => "automobile manufacturers of Japan", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' =>  'wagon', 'description' => "automobile manufacturers of Japan", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Daihatsu' , 'description' => "automobile manufacturers of Japan", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' =>'jelly', 'description' => "automobile manufacturers of Japan", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Mercury' , 'description' => "automobile manufacturers of Japan", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' =>  'Volvo', 'description' => "automobile manufacturers of Japan", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' =>  'Peugeot', 'description' => "automobile manufacturers of Japan", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Bentley' , 'description' => "automobile manufacturers of Japan", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Jaguar' , 'description' => "automobile manufacturers of Japan", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' =>  'Subaru', 'description' => "automobile manufacturers of Japan", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' =>  'Changan', 'description' => "automobile manufacturers of Japan", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'buick' , 'description' => "automobile manufacturers of Japan", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' =>  'Maserati', 'description' => "automobile manufacturers of Japan", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => ' Rolls-Royce' , 'description' => "automobile manufacturers of Japan", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' =>  'Lamborghini', 'description' => "automobile manufacturers of Japan", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' =>  'Opel', 'description' => "automobile manufacturers of Japan", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Skoda' , 'description' => "automobile manufacturers of Japan", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' =>  'Ferrari', 'description' => "automobile manufacturers of Japan", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' =>  'Citroen', 'description' => "automobile manufacturers of Japan", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            array('title' =>  'cherry', 'description' => "automobile manufacturers of Japan", 'taxonomy_id' => 2, 'published_at' => null, 'lang' => 'en'),
            

             // brands - cars - types
             array('title' => 'Land Cruiser', 'description' => "Mobile Brands", 'taxonomy_id' => 3, 'parent_id' => 2, 'published_at' => null, 'lang' => 'en'),
             array('title' => 'camry', 'description' => "Mobile Brands", 'taxonomy_id' => 3, 'parent_id' => 2, 'published_at' => null, 'lang' => 'en'),
             array('title' => 'Avalon', 'description' => "Mobile Brands", 'taxonomy_id' => 3, 'parent_id' => 2, 'published_at' => null, 'lang' => 'en'),
             array('title' => 'Hilux', 'description' => "Mobile Brands", 'taxonomy_id' => 3, 'parent_id' => 2, 'published_at' => null, 'lang' => 'en'),
             array('title' => 'Corolla', 'description' => "Mobile Brands", 'taxonomy_id' => 3, 'parent_id' => 2, 'published_at' => null, 'lang' => 'en'),
             array('title' => 'NS', 'description' => "Mobile Brands", 'taxonomy_id' => 3, 'parent_id' => 2, 'published_at' => null, 'lang' => 'en'),
             array('title' => 'Prado', 'description' => "Mobile Brands", 'taxonomy_id' => 3, 'parent_id' => 2, 'published_at' => null, 'lang' => 'en'),
             array('title' => 'Orion', 'description' => "Mobile Brands", 'taxonomy_id' => 3, 'parent_id' => 2, 'published_at' => null, 'lang' => 'en'),
             array('title' => 'sequoia', 'description' => "Mobile Brands", 'taxonomy_id' => 3, 'parent_id' => 2, 'published_at' => null, 'lang' => 'en'),
             array('title' => 'Bus', 'description' => "Mobile Brands", 'taxonomy_id' => 3, 'parent_id' => 2, 'published_at' => null, 'lang' => 'en'),
             array('title' => 'Rav', 'description' => "Mobile Brands", 'taxonomy_id' => 3, 'parent_id' => 2, 'published_at' => null, 'lang' => 'en'),
             array('title' => 'Innova', 'description' => "Mobile Brands", 'taxonomy_id' => 3, 'parent_id' => 2, 'published_at' => null, 'lang' => 'en'),
             array('title' => 'Rav', 'description' => "Mobile Brands", 'taxonomy_id' => 3, 'parent_id' => 2, 'published_at' => null, 'lang' => 'en'),
             array('title' => 'eco', 'description' => "Mobile Brands", 'taxonomy_id' => 3, 'parent_id' => 2, 'published_at' => null, 'lang' => 'en'),
             array('title' => 'Toyota 86', 'description' => "Mobile Brands", 'taxonomy_id' => 3, 'parent_id' => 2, 'published_at' => null, 'lang' => 'en'),
             array('title' => 'Prius', 'description' => "Mobile Brands", 'taxonomy_id' => 3, 'parent_id' => 2, 'published_at' => null, 'lang' => 'en'),

            // brands - cars - types-models
            array('title' => '1996', 'description' => "Mobile Brands", 'taxonomy_id' => 4, 'parent_id' => 3, 'published_at' => null, 'lang' => 'en'),
            array('title' => '1997', 'description' => "Mobile Brands", 'taxonomy_id' => 4, 'parent_id' => 3, 'published_at' => null, 'lang' => 'en'),
            array('title' => '1998', 'description' => "Mobile Brands", 'taxonomy_id' => 4, 'parent_id' => 3, 'published_at' => null, 'lang' => 'en'),
            array('title' => '1999', 'description' => "Mobile Brands", 'taxonomy_id' => 4, 'parent_id' => 3, 'published_at' => null, 'lang' => 'en'),
            array('title' => '2000', 'description' => "Mobile Brands", 'taxonomy_id' => 4, 'parent_id' => 3, 'published_at' => null, 'lang' => 'en'),
            array('title' => '2001', 'description' => "Mobile Brands", 'taxonomy_id' => 4, 'parent_id' => 3, 'published_at' => null, 'lang' => 'en'),
            array('title' => '2002', 'description' => "Mobile Brands", 'taxonomy_id' => 4, 'parent_id' => 3, 'published_at' => null, 'lang' => 'en'),
            array('title' => '2003', 'description' => "Mobile Brands", 'taxonomy_id' => 4, 'parent_id' => 3, 'published_at' => null, 'lang' => 'en'),
            array('title' => '2004', 'description' => "Mobile Brands", 'taxonomy_id' => 4, 'parent_id' => 3, 'published_at' => null, 'lang' => 'en'),
            array('title' => '2005', 'description' => "Mobile Brands", 'taxonomy_id' => 4, 'parent_id' => 3, 'published_at' => null, 'lang' => 'en'),
            array('title' => '2006', 'description' => "Mobile Brands", 'taxonomy_id' => 4, 'parent_id' => 3, 'published_at' => null, 'lang' => 'en'),
            array('title' => '2007', 'description' => "Mobile Brands", 'taxonomy_id' => 4, 'parent_id' => 3, 'published_at' => null, 'lang' => 'en'),
            array('title' => '2008', 'description' => "Mobile Brands", 'taxonomy_id' => 4, 'parent_id' => 3, 'published_at' => null, 'lang' => 'en'),
            array('title' => '2009', 'description' => "Mobile Brands", 'taxonomy_id' => 4, 'parent_id' => 3, 'published_at' => null, 'lang' => 'en'),
            array('title' => '2010', 'description' => "Mobile Brands", 'taxonomy_id' => 4, 'parent_id' => 3, 'published_at' => null, 'lang' => 'en'),
            array('title' => '2011', 'description' => "Mobile Brands", 'taxonomy_id' => 4, 'parent_id' => 3, 'published_at' => null, 'lang' => 'en'),
            array('title' => '2012', 'description' => "Mobile Brands", 'taxonomy_id' => 4, 'parent_id' => 3, 'published_at' => null, 'lang' => 'en'),
            array('title' => '2013', 'description' => "Mobile Brands", 'taxonomy_id' => 4, 'parent_id' => 3, 'published_at' => null, 'lang' => 'en'),
            array('title' => '2014', 'description' => "Mobile Brands", 'taxonomy_id' => 4, 'parent_id' => 3, 'published_at' => null, 'lang' => 'en'),
            array('title' => '2015', 'description' => "Mobile Brands", 'taxonomy_id' => 4, 'parent_id' => 3, 'published_at' => null, 'lang' => 'en'),
            array('title' => '2016', 'description' => "Mobile Brands", 'taxonomy_id' => 4, 'parent_id' => 3, 'published_at' => null, 'lang' => 'en'),
            array('title' => '2017', 'description' => "Mobile Brands", 'taxonomy_id' => 4, 'parent_id' => 3, 'published_at' => null, 'lang' => 'en'),
            array('title' => '2018', 'description' => "Mobile Brands", 'taxonomy_id' => 4, 'parent_id' => 3, 'published_at' => null, 'lang' => 'en'),
            array('title' => '2019', 'description' => "Mobile Brands", 'taxonomy_id' => 4, 'parent_id' => 3, 'published_at' => null, 'lang' => 'en'),
            array('title' => '2020', 'description' => "Mobile Brands", 'taxonomy_id' => 4, 'parent_id' => 3, 'published_at' => null, 'lang' => 'en'),
            array('title' => '2021', 'description' => "Mobile Brands", 'taxonomy_id' => 4, 'parent_id' => 3, 'published_at' => null, 'lang' => 'en'),
 
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


            // Real Estate
            array('title' => 'lands', 'description' => "Real Estate", 'taxonomy_id' => 1, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'for sale', 'description' => "Real Estate", 'taxonomy_id' => 1, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Apartments', 'description' => "Real Estate", 'taxonomy_id' => 1, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'For Rent', 'description' => "Real Estate", 'taxonomy_id' => 1, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Villas', 'description' => "Real Estate", 'taxonomy_id' => 1, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'for sale', 'description' => "Real Estate", 'taxonomy_id' => 1, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Apartments', 'description' => "Real Estate", 'taxonomy_id' => 1, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'houses', 'description' => "Real Estate", 'taxonomy_id' => 1, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Building', 'description' => "Real Estate", 'taxonomy_id' => 1, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'breaks', 'description' => "Real Estate", 'taxonomy_id' => 1, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Shops', 'description' => "Real Estate", 'taxonomy_id' => 1, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Villas', 'description' => "Real Estate", 'taxonomy_id' => 1, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Farmer', 'description' => "Real Estate", 'taxonomy_id' => 1, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'roles', 'description' => "Real Estate", 'taxonomy_id' => 1, 'published_at' => null, 'lang' => 'en'),
            
            
            
            //Furniture
            array('title' => 'Animals, livestock, and bird', 'description' => "Real Estate", 'taxonomy_id' => 1, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Personal Accessories', 'description' => "Real Estate", 'taxonomy_id' => 1, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Services', 'description' => "Real Estate", 'taxonomy_id' => 1, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Food and beverages', 'description' => "Real Estate", 'taxonomy_id' => 1, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Games and Entertainment', 'description' => "Real Estate", 'taxonomy_id' => 1, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Hunting and Trips', 'description' => "Real Estate", 'taxonomy_id' => 1, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Programming and designs', 'description' => "Real Estate", 'taxonomy_id' => 1, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Parties and events', 'description' => "Real Estate", 'taxonomy_id' => 1, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Library and Arts', 'description' => "Real Estate", 'taxonomy_id' => 1, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Travel and Tourism', 'description' => "Real Estate", 'taxonomy_id' => 1, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Uncategorized Section', 'description' => "Real Estate", 'taxonomy_id' => 1, 'published_at' => null, 'lang' => 'en'),
 


            //Furniture-types(Animals, livestock, and birds)
            array('title' => 'Sheep', 'description' => "Furniture type", 'taxonomy_id' => 3, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Parrot', 'description' => "Furniture type", 'taxonomy_id' => 3, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Pigeons', 'description' => "Furniture type", 'taxonomy_id' => 3, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Cats', 'description' => "Furniture type", 'taxonomy_id' => 3, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Chicken', 'description' => "Furniture type", 'taxonomy_id' => 3, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Goats', 'description' => "Furniture type", 'taxonomy_id' => 3, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Camels', 'description' => "Furniture type", 'taxonomy_id' => 3, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Horses', 'description' => "Furniture type", 'taxonomy_id' => 3, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Fish', 'description' => "Furniture type", 'taxonomy_id' => 3, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'turtles', 'description' => "Furniture type", 'taxonomy_id' => 3, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Rabbits', 'description' => "Furniture type", 'taxonomy_id' => 3, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Squirrels', 'description' => "Furniture type", 'taxonomy_id' => 3, 'published_at' => null, 'lang' => 'en'),
            array('title' => 'Hyrax', 'description' => "Furniture type", 'taxonomy_id' => 3, 'published_at' => null, 'lang' => 'en'),





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
