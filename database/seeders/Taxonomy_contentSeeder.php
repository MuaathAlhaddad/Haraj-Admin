<?php

namespace Database\Seeders;

use App\Models\Taxonomy;
use App\Models\TaxonomyContent;
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

        /*********************************
         *            harajs
         ********************************/
        $harajs_id = DB::table('taxonomies')->where('type', Taxonomy::TYPE_HARAJS)->pluck('id');

        $taxonomy_contents = array(
            // harajs
            array('title' => 'cars', 'description' => "all ads about cars", 'taxonomy_id' => $harajs_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en'),
            array('title' => 'devices', 'description' => "all ads about devices including electronics...", 'taxonomy_id' => $harajs_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en'),
            array('title' => 'real estate', 'description' => "all ads that deals with buying, selling, management, or investment of real estate properties.", 'taxonomy_id' => $harajs_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en'),
            array('title' => 'animals, livestock, and bird', 'description' => "categories", 'taxonomy_id' => $harajs_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en'),
            array('title' => 'personal accessories', 'description' => "categories", 'taxonomy_id' => $harajs_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en'),
            array('title' => 'services', 'description' => "categories", 'taxonomy_id' => $harajs_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en'),
            array('title' => 'food and beverages', 'description' => "categories", 'taxonomy_id' => $harajs_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en'),
            array('title' => 'games and entertainment', 'description' => "categories", 'taxonomy_id' => $harajs_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en'),
            array('title' => 'hunting and trips', 'description' => "categories", 'taxonomy_id' => $harajs_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en'),
            array('title' => 'programming and designs', 'description' => "categories", 'taxonomy_id' => $harajs_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en'),
            array('title' => 'parties and events', 'description' => "categories", 'taxonomy_id' => $harajs_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en'),
            array('title' => 'library and arts', 'description' => "categories", 'taxonomy_id' => $harajs_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en'),
            array('title' => 'travel and tourism', 'description' => "categories", 'taxonomy_id' => $harajs_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en'),
            array('title' => 'others', 'description' => "all ads with different categories", 'taxonomy_id' => $harajs_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en'),
        );
        DB::table('taxonomy_contents')->insert($taxonomy_contents);

        /*********************************
         *            brands
         ********************************/
        $cars_id = DB::table('taxonomy_contents')->where('title', TaxonomyContent::TITLE_CARS)->pluck('id');

        $brands_id = DB::table('taxonomies')->where('type', Taxonomy::TYPE_BRANDS)->pluck('id');

        $taxonomy_contents = array(
            // harajs > brands
            // cars
            array('title' => 'toyota', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $cars_id, 'lang' => 'en'),
            array('title' => 'ford', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $cars_id, 'lang' => 'en'),
            array('title' => 'chevrolet', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $cars_id, 'lang' => 'en'),
            array('title' => 'hyundai', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $cars_id, 'lang' => 'en'),
            array('title' => 'mercedes', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $cars_id, 'lang' => 'en'),
            array('title' => 'honda', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $cars_id, 'lang' => 'en'),
            array('title' => 'bmw', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $cars_id, 'lang' => 'en'),
            array('title' => 'dodge', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $cars_id, 'lang' => 'en'),
            array('title' => 'gms', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $cars_id, 'lang' => 'en'),
            array('title' => 'chrysler', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $cars_id, 'lang' => 'en'),
            array('title' => 'pocket', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $cars_id, 'lang' => 'en'),
            array('title' => 'mitsubishi', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $cars_id, 'lang' => 'en'),
            array('title' => 'mazda', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $cars_id, 'lang' => 'en'),
            array('title' => 'land rover', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $cars_id, 'lang' => 'en'),
            array('title' => 'isuzu', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $cars_id, 'lang' => 'en'),
            array('title' => 'cadillac', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $cars_id, 'lang' => 'en'),
            array('title' => 'porsche', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $cars_id, 'lang' => 'en'),
            array('title' => 'audi', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $cars_id, 'lang' => 'en'),
            array('title' => 'suzuki', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $cars_id, 'lang' => 'en'),
            array('title' => 'infinity', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $cars_id, 'lang' => 'en'),
            array('title' => 'hummer', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $cars_id, 'lang' => 'en'),
            array('title' => 'lincoln', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $cars_id, 'lang' => 'en'),
            array('title' => 'volks', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $cars_id, 'lang' => 'en'),
            array('title' => 'wagon', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $cars_id, 'lang' => 'en'),
            array('title' => 'daihatsu', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $cars_id, 'lang' => 'en'),
            array('title' => 'jelly', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $cars_id, 'lang' => 'en'),
            array('title' => 'mercury', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $cars_id, 'lang' => 'en'),
            array('title' => 'volvo', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $cars_id, 'lang' => 'en'),
            array('title' => 'peugeot', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $cars_id, 'lang' => 'en'),
            array('title' => 'bentley', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $cars_id, 'lang' => 'en'),
            array('title' => 'jaguar', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $cars_id, 'lang' => 'en'),
            array('title' => 'subaru', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $cars_id, 'lang' => 'en'),
            array('title' => 'changan', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $cars_id, 'lang' => 'en'),
            array('title' => 'buick', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $cars_id, 'lang' => 'en'),
            array('title' => 'maserati', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $cars_id, 'lang' => 'en'),
            array('title' => ' rolls-royce', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $cars_id, 'lang' => 'en'),
            array('title' => 'lamborghini', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $cars_id, 'lang' => 'en'),
            array('title' => 'opel', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $cars_id, 'lang' => 'en'),
            array('title' => 'skoda', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $cars_id, 'lang' => 'en'),
            array('title' => 'ferrari', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $cars_id, 'lang' => 'en'),
            array('title' => 'citroen', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $cars_id, 'lang' => 'en'),
            array('title' => 'cherry', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $cars_id, 'lang' => 'en'),
        );
        DB::table('taxonomy_contents')->insert($taxonomy_contents);

        $devices_id = DB::table('taxonomy_contents')->where('title', TaxonomyContent::TITLE_DEVICES)->pluck('id');

        $brands_id = DB::table('taxonomies')->where('type', Taxonomy::TYPE_BRANDS)->pluck('id');

        // harajs  > brands
        // devices
        $taxonomy_contents = array(
            array('title' => 'acer', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'alcatel', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'allview', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'amazon', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'amoi', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'apple', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'archos', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'asus', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'at&t', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'benefon', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'benq', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'benq-siemens', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'bird', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'blackberry', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'blackview', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'blu', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'bosch', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'bq', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'casio', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'cat', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'celkon', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'chea', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'coolpad', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'dell', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'emporia', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'energizer', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'ericsson', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'eten', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'fairphone', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'fujitsu siemens', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'garmin-asus', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'gigabyte', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'gionee', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'google', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'haier', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'honor', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'hp', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'htc', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'huawei', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'i-mate', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'i-mobile', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'icemobile', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'infinix', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'innostream', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'inq', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'intex', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'jolla', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'karbonn', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'kyocera', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'lava', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'leeco', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'lenovo', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'lg', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'maxon', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'maxwest', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'meizu', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'micromax', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'microsoft', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'mitac', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'mitsubishi', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'modu', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'motorola', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'mwg', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'nec', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'neonode', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'niu', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'nokia', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'nvidia', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'o2', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'oneplus', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'oppo', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'orange', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'palm', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'panasonic', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'pantech', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'parla', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'philips', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'plum', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'posh', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'prestigio', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'qmobile', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'qtek', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'razer', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'realme', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'sagem', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'samsung', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'sendo', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'sewon', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'sharp', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'siemens', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'sonim', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'sony', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'sony ericsson', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'spice', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 't-mobile', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'tcl', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'tecno', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'tel.me.', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'telit', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'thuraya', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'toshiba', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'ulefone', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'unnecto', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'vertu', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'verykool', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'vivo', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'vk mobile', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'vodafone', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'wiko', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'wnd', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'xcute', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'xiaomi', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'xolo', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'yezz', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'yota', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'yu', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array( 'title' => 'zte', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
        );
        DB::table('taxonomy_contents')->insert($taxonomy_contents);

        /*********************************
         *            models
         ********************************/
        $cars_id = DB::table('taxonomy_contents')->where('title', TaxonomyContent::TITLE_CARS)->pluck('id');

        $models_id = DB::table('taxonomies')->where('type', Taxonomy::TYPE_MODELS)->pluck('id');
      
        $types_id = DB::table('taxonomies')->where('type', Taxonomy::TYPE_TYPES)->pluck('id');

        $real_estate_id = DB::table('taxonomies')->where('type', TaxonomyContent::TITLE_REAL_ESTATE)->pluck('id');
       
        $animals_livestock_bird = DB::table('taxonomies')->where('type', TaxonomyContent::TITLE_ANIMALS_LIVESTOCK_BIRD)->pluck('id');
 
        $apple_id = DB::table('taxonomy_contents')->where('title', TaxonomyContent::TITLE_APPLE)->pluck('id');

        $samsung_id = DB::table('taxonomy_contents')->where('title', TaxonomyContent::TITLE_SAMSUNG)->pluck('id');

        $toyota_id = DB::table('taxonomy_contents')->where('title', TaxonomyContent::TITLE_TOYOTA)->pluck('id');

        $tags_id = DB::table('taxonomies')->where('type', Taxonomy::TYPE_TAGS)->pluck('id');
    
        $taxonomy_contents = array(
            // harajs > models
            // cars
            array('id' => 174, 'title' => '1996', 'description' => "car model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>  $cars_id, 'lang' => 'en'),
            array('id' => 175, 'title' => '1997', 'description' => "car model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>  $cars_id, 'lang' => 'en'),
            array('id' => 176, 'title' => '1998', 'description' => "car model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>  $cars_id, 'lang' => 'en'),
            array('id' => 177, 'title' => '1999', 'description' => "car model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>  $cars_id, 'lang' => 'en'),
            array('id' => 178, 'title' => '2000', 'description' => "car model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>  $cars_id, 'lang' => 'en'),
            array('id' => 179, 'title' => '2001', 'description' => "car model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>  $cars_id, 'lang' => 'en'),
            array('id' => 180, 'title' => '2002', 'description' => "car model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>  $cars_id, 'lang' => 'en'),
            array('id' => 181, 'title' => '2003', 'description' => "car model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>  $cars_id, 'lang' => 'en'),
            array('id' => 182, 'title' => '2004', 'description' => "car model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>  $cars_id, 'lang' => 'en'),
            array('id' => 183, 'title' => '2005', 'description' => "car model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>  $cars_id, 'lang' => 'en'),
            array('id' => 184, 'title' => '2006', 'description' => "car model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>  $cars_id, 'lang' => 'en'),
            array('id' => 185, 'title' => '2007', 'description' => "car model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>  $cars_id, 'lang' => 'en'),
            array('id' => 186, 'title' => '2008', 'description' => "car model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>  $cars_id, 'lang' => 'en'),
            array('id' => 187, 'title' => '2009', 'description' => "car model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>  $cars_id, 'lang' => 'en'),
            array('id' => 188, 'title' => '2010', 'description' => "car model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>  $cars_id, 'lang' => 'en'),
            array('id' => 189, 'title' => '2011', 'description' => "car model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>  $cars_id, 'lang' => 'en'),
            array('id' => 190, 'title' => '2012', 'description' => "car model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>  $cars_id, 'lang' => 'en'),
            array('id' => 191, 'title' => '2013', 'description' => "car model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>  $cars_id, 'lang' => 'en'),
            array('id' => 192, 'title' => '2014', 'description' => "car model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>  $cars_id, 'lang' => 'en'),
            array('id' => 193, 'title' => '2015', 'description' => "car model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>  $cars_id, 'lang' => 'en'),
            array('id' => 194, 'title' => '2016', 'description' => "car model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>  $cars_id, 'lang' => 'en'),
            array('id' => 195, 'title' => '2017', 'description' => "car model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>  $cars_id, 'lang' => 'en'),
            array('id' => 196, 'title' => '2018', 'description' => "car model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>  $cars_id, 'lang' => 'en'),
            array('id' => 197, 'title' => '2019', 'description' => "car model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>  $cars_id, 'lang' => 'en'),
            array('id' => 198, 'title' => '2020', 'description' => "car model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>  $cars_id, 'lang' => 'en'),
            array('id' => 199, 'title' => '2021', 'description' => "car model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>  $cars_id, 'lang' => 'en'),


            // harajs  > brands > models
            // devices > apple

            
            array('id' => 200, 'title' => 'iphone 12 pro', 'description' => "apple model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$apple_id, 'lang' => 'en'),
            array('id' => 201, 'title' => 'iphone 12 pro max', 'description' => "apple model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$apple_id, 'lang' => 'en'),
            array('id' => 202, 'title' => 'apple watch', 'description' => "apple model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$apple_id, 'lang' => 'en'),
            array('id' => 203, 'title' => 'iphone 12', 'description' => "apple model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$apple_id, 'lang' => 'en'),
            array('id' => 204, 'title' => 'iphone 12 mini', 'description' => "apple model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$apple_id, 'lang' => 'en'),
            array('id' => 205, 'title' => 'airpods', 'description' => "apple model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$apple_id, 'lang' => 'en'),
            array('id' => 206, 'title' => 'ipad pro', 'description' => "apple model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$apple_id, 'lang' => 'en'),
            array('id' => 207, 'title' => 'iphone se (2020)', 'description' => "apple model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$apple_id, 'lang' => 'en'),
            array('id' => 208, 'title' => 'imac', 'description' => "apple model", 'taxonomy_id' =>$models_id, 'published_at' => now(), 'parent_id' =>$apple_id, 'lang' => 'en'),
            array('id' => 209, 'title' => 'iphone 11 pro', 'description' => "apple model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$apple_id, 'lang' => 'en'),
            array('id' => 210, 'title' => 'lightning to usb cable', 'description' => "apple model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$apple_id, 'lang' => 'en'),
            array('id' => 211, 'title' => 'iphone 11 pro max', 'description' => "apple model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$apple_id, 'lang' => 'en'),
            array('id' => 212, 'title' => 'mac pro feet kit', 'description' => "apple model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$apple_id, 'lang' => 'en'),
            array('id' => 213, 'title' => 'iphone 11', 'description' => "apple model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$apple_id, 'lang' => 'en'),
            array('id' => 214, 'title' => 'smart folio', 'description' => "apple model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$apple_id, 'lang' => 'en'),
            array('id' => 215, 'title' => 'iphone xr', 'description' => "apple model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$apple_id, 'lang' => 'en'),
            array('id' => 216, 'title' => 'vesa mount adapter', 'description' => "apple model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$apple_id, 'lang' => 'en'),
            array('id' => 217, 'title' => 'iphone xs max', 'description' => "apple model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$apple_id, 'lang' => 'en'),
            array('id' => 218, 'title' => 'macbook pro', 'description' => "apple model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$apple_id, 'lang' => 'en'),
            array('id' => 219, 'title' => 'iphone xs', 'description' => "apple model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$apple_id, 'lang' => 'en'),
            array('id' => 220, 'title' => 'iphone 6', 'description' => "apple model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$apple_id, 'lang' => 'en'),
            array('id' => 221, 'title' => 'iphone 8', 'description' => "apple model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$apple_id, 'lang' => 'en'),
            array('id' => 222, 'title' => 'macbook air', 'description' => "apple model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$apple_id, 'lang' => 'en'),

            // harajs  > brands > models
            // devices > samsung
            array('id' => 223, 'title' => 'samsung a12 nacho', 'description' => "samsung brand", 'taxonomy_id' =>$models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 224, 'title' => 'samsung galaxy m21 2021 edition', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 225, 'title' => 'samsung galaxy m21 2021 edition', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 226, 'title' => 'samsung galaxy f22', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 227, 'title' => 'samsung galaxy f22', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 228, 'title' => 'samsung galaxy a22', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 229, 'title' => 'samsung galaxy a22', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 230, 'title' => 'samsung galaxy m32', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 231, 'title' => 'samsung galaxy m32', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 232, 'title' => 'samsung galaxy a22 5g', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 233, 'title' => 'samsung galaxy a22 5g', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 234, 'title' => 'samsung galaxy f52 5g', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 235, 'title' => 'samsung galaxy f52 5g', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 236, 'title' => 'samsung galaxy quantum 2', 'description' => "samsung brand", 'taxonomy_id' =>$models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 237, 'title' => 'samsung galaxy quantum 2', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 238, 'title' => 'samsung galaxy f02s', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 239, 'title' => 'samsung galaxy f02s', 'description' => "samsung brand", 'taxonomy_id' =>$models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 240, 'title' => 'samsung galaxy f12', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 241, 'title' => 'samsung galaxy f12', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 242, 'title' => 'samsung galaxy m42 5g', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 243, 'title' => 'samsung galaxy m42 5g', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 244, 'title' => 'upcomingsamsung galaxy xcover 5', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 245, 'title' => 'samsung galaxy xcover 5', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 246, 'title' => 'samsung galaxy a52 5g', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 247, 'title' => 'samsung galaxy a52 5g', 'description' => "samsung brand", 'taxonomy_id' =>$models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 248, 'title' => 'samsung galaxy a52', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 249, 'title' => 'samsung galaxy a52', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 250, 'title' => 'samsung galaxy a72', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 251, 'title' => 'samsung galaxy a72', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 252, 'title' => 'samsung galaxy s20 fe 5g', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 253, 'title' => 'samsung galaxy s20 fe 5g', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 254, 'title' => 'samsung galaxy a32 4g', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 255, 'title' => 'samsung galaxy a32 4g', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 256, 'title' => 'samsung galaxy m62', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 257, 'title' => 'samsung galaxy m62', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 258, 'title' => 'samsung galaxy f62', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 259, 'title' => 'samsung galaxy f62', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 260, 'title' => 'samsung galaxy m12', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 261, 'title' => 'samsung galaxy m12', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 262, 'title' => 'samsung galaxy m02', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 263, 'title' => 'samsung galaxy m02', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 264, 'title' => 'samsung galaxy a02', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 265, 'title' => 'samsung galaxy a02', 'description' => "samsung brand", 'taxonomy_id' =>$models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 266, 'title' => 'samsung galaxy a32 5g', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 267, 'title' => 'samsung galaxy a32 5g', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 268, 'title' => 'samsung galaxy m02s', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 269, 'title' => 'samsung galaxy m02s', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 270, 'title' => 'samsung galaxy s21 ultra', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 271, 'title' => 'samsung galaxy s21 ultra', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 272, 'title' => 'samsung galaxy s21+', 'description' => "samsung brand", 'taxonomy_id' =>$models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 273, 'title' => 'samsung galaxy s21+', 'description' => "samsung brand", 'taxonomy_id' =>$models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 274, 'title' => 'samsung galaxy s21', 'description' => "samsung brand", 'taxonomy_id' =>$models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 275, 'title' => 'samsung galaxy s21', 'description' => "samsung brand", 'taxonomy_id' =>$models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 276, 'title' => 'samsung galaxy a02s', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 277, 'title' => 'samsung galaxy a02s', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 278, 'title' => 'samsung galaxy a12', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 279, 'title' => 'samsung galaxy a12', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 280, 'title' => 'samsung galaxy m21s', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 281, 'title' => 'samsung galaxy m21s', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 282, 'title' => 'samsung w21 5g', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 283, 'title' => 'samsung w21 5g', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 284, 'title' => 'samsung galaxy f41', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 285, 'title' => 'samsung galaxy f41', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 286, 'title' => 'samsung galaxy a3 core', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 287, 'title' => 'samsung galaxy a3 core', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 288, 'title' => 'samsung galaxy s20 fe', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 289, 'title' => 'samsung galaxy s20 fe', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 290, 'title' => 'samsung galaxy a42 5g', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 291, 'title' => 'samsung galaxy a42 5g', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 292, 'title' => 'samsung galaxy z fold 2', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 293, 'title' => 'samsung galaxy z fold 2', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 294, 'title' => 'samsung galaxy m51', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 295, 'title' => 'samsung galaxy m51', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 296, 'title' => 'samsung galaxy note 20 ultra 5g', 'description' => "samsung brand", ' ' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 297, 'title' => 'samsung galaxy note 20 ultra 5g', 'description' => "samsung brand", ' ' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 298, 'title' => 'samsung galaxy note 20 5g', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 299, 'title' => 'samsung galaxy note 20 5g', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 300, 'title' => 'samsung galaxy note 20 ultra', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),
            array('id' => 301, 'title' => 'samsung galaxy note 20 ultra', 'description' => "samsung brand", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' =>$samsung_id, 'lang' => 'en'),

            /*********************************
             *            types
             ********************************/
            // harajs > brands > types
            // cars > toyota
            array('id' => 302, 'title' => 'land cruiser', 'description' => "car type", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' => $toyota_id, 'lang' => 'en'),
            array('id' => 303, 'title' => 'camry', 'description' => "car type", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' =>  $toyota_id, 'lang' => 'en'),
            array('id' => 304, 'title' => 'avalon', 'description' => "car type", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' =>  $toyota_id, 'lang' => 'en'),
            array('id' => 305, 'title' => 'hilux', 'description' => "car type", 'taxonomy_id' =>$types_id, 'published_at' => now(), 'parent_id' =>  $toyota_id, 'lang' => 'en'),
            array('id' => 306, 'title' => 'corolla', 'description' => "car type", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' =>  $toyota_id, 'lang' => 'en'),
            array('id' => 307, 'title' => 'ns', 'description' => "car type", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' =>  $toyota_id, 'lang' => 'en'),
            array('id' => 308, 'title' => 'prado', 'description' => "car type", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' =>  $toyota_id, 'lang' => 'en'),
            array('id' => 309, 'title' => 'orion', 'description' => "car type", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' =>  $toyota_id, 'lang' => 'en'),
            array('id' => 310, 'title' => 'sequoia', 'description' => "car type", 'taxonomy_id' =>$types_id, 'published_at' => now(), 'parent_id' =>  $toyota_id, 'lang' => 'en'),
            array('id' => 311, 'title' => 'bus', 'description' => "car type", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' =>  $toyota_id, 'lang' => 'en'),
            array('id' => 312, 'title' => 'rav', 'description' => "car type", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' =>  $toyota_id, 'lang' => 'en'),
            array('id' => 313, 'title' => 'innova', 'description' => "car type", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' =>  $toyota_id, 'lang' => 'en'),
            array('id' => 314, 'title' => 'rav', 'description' => "car type", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' =>  $toyota_id, 'lang' => 'en'),
            array('id' => 315, 'title' => 'eco', 'description' => "car type", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' =>  $toyota_id, 'lang' => 'en'),
            array('id' => 316, 'title' => 'toyota 86', 'description' => "car type", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' =>  $toyota_id, 'lang' => 'en'),
            array('id' => 317, 'title' => 'prius', 'description' => "car type", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' =>  $toyota_id, 'lang' => 'en'),

            // harajs > types
            // real estate
            array('id' => 318, 'title' => 'lands', 'description' => "real estate", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' => $real_estate_id, 'lang' => 'en'),
            array('id' => 319, 'title' => 'for sale', 'description' => "real estate", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' => $real_estate_id, 'lang' => 'en'),
            array('id' => 320, 'title' => 'apartments', 'description' => "real estate", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' => $real_estate_id, 'lang' => 'en'),
            array('id' => 321, 'title' => 'for rent', 'description' => "real estate", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' => $real_estate_id, 'lang' => 'en'),
            array('id' => 322, 'title' => 'villas', 'description' => "real estate", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' => $real_estate_id, 'lang' => 'en'),
            array('id' => 323, 'title' => 'for sale', 'description' => "real estate", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' => $real_estate_id, 'lang' => 'en'),
            array('id' => 324, 'title' => 'apartments', 'description' => "real estate", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' => $real_estate_id, 'lang' => 'en'),
            array('id' => 325, 'title' => 'houses', 'description' => "real estate", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' => $real_estate_id, 'lang' => 'en'),
            array('id' => 326, 'title' => 'building', 'description' => "real estate", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' => $real_estate_id, 'lang' => 'en'),
            array('id' => 327, 'title' => 'breaks', 'description' => "real estate", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' => $real_estate_id, 'lang' => 'en'),
            array('id' => 328, 'title' => 'shops', 'description' => "real estate", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' => $real_estate_id, 'lang' => 'en'),
            array('id' => 329, 'title' => 'villas', 'description' => "real estate", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' => $real_estate_id, 'lang' => 'en'),
            array('id' => 330, 'title' => 'farmer', 'description' => "real estate", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' => $real_estate_id, 'lang' => 'en'),
            array('id' => 331, 'title' => 'roles', 'description' => "real estate", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' => $real_estate_id, 'lang' => 'en'),


            // harajs > types
            // animals, livestock, and birds
            array('id' => 332, 'title' => 'sheep', 'description' => "animals, livestock, and birds", 'taxonomy_id' =>$types_id, 'published_at' => now(), 'parent_id' =>$animals_livestock_bird, 'lang' => 'en'),
            array('id' => 333, 'title' => 'parrot', 'description' => "animals, livestock, and birds", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' => $animals_livestock_bird, 'lang' => 'en'),
            array('id' => 334, 'title' => 'pigeons', 'description' => "animals, livestock, and birds", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' => $animals_livestock_bird, 'lang' => 'en'),
            array('id' => 335, 'title' => 'cats', 'description' => "animals, livestock, and birds", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' => $animals_livestock_bird, 'lang' => 'en'),
            array('id' => 336, 'title' => 'chicken', 'description' => "animals, livestock, and birds", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' => $animals_livestock_bird, 'lang' => 'en'),
            array('id' => 337, 'title' => 'goats', 'description' => "animals, livestock, and birds", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' =>  $animals_livestock_bird, 'lang' => 'en'),
            array('id' => 338, 'title' => 'camels', 'description' => "animals, livestock, and birds", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' =>  $animals_livestock_bird, 'lang' => 'en'),
            array('id' => 339, 'title' => 'horses', 'description' => "animals, livestock, and birds", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' =>  $animals_livestock_bird, 'lang' => 'en'),
            array('id' => 340, 'title' => 'fish', 'description' => "animals, livestock, and birds", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' =>  $animals_livestock_bird, 'lang' => 'en'),
            array('id' => 341, 'title' => 'turtles', 'description' => "animals, livestock, and birds", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' =>  $animals_livestock_bird, 'lang' => 'en'),
            array('id' => 342, 'title' => 'rabbits', 'description' => "animals, livestock, and birds", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' =>  $animals_livestock_bird, 'lang' => 'en'),
            array('id' => 343, 'title' => 'squirrels', 'description' => "animals, livestock, and birds", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' =>  $animals_livestock_bird, 'lang' => 'en'),
            array('id' => 344, 'title' => 'hyrax', 'description' => "animals, livestock, and birds", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' =>  $animals_livestock_bird, 'lang' => 'en'),


            // tags
            array('id' => 345, 'title' => 'new', 'description' => "new ads", 'taxonomy_id' =>$tags_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en'),
            array('id' => 346, 'title' => 'second-hand', 'description' => "second-hand ads", 'taxonomy_id' =>$tags_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en'),
            array('id' => 347, 'title' => 'used', 'description' => "used ads", 'taxonomy_id' =>$tags_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en'),
            array('id' => 348, 'title' => 'cheap', 'description' => "cheap ads", 'taxonomy_id' =>$tags_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en'),
            array('id' => 349, 'title' => 'latest', 'description' => "latest ads", 'taxonomy_id' =>$tags_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en'),
        );
        DB::table('taxonomy_contents')->insert($taxonomy_contents);
    }
}
