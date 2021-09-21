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
        $harajs_id = DB::table('taxonomies')->where('type', Taxonomy::TYPE_HARAJS)->pluck('id')->first();

        $taxonomy_contents = array(
            // harajs
            array('title' => 'cars', 'description' => "all ads about cars", 'taxonomy_id' => $harajs_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en', 'icon' => 'fa fa-car'),
            array('title' => 'devices', 'description' => "all ads about devices including electronics...", 'taxonomy_id' => $harajs_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en', 'icon' => 'fa fa-desktop'),
            array('title' => 'real estate', 'description' => "all ads that deals with buying, selling, management, or investment of real estate properties.", 'taxonomy_id' => $harajs_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en', 'icon' => 'fa fa-home'),
            array('title' => 'animals, livestock, and bird', 'description' => "categories", 'taxonomy_id' => $harajs_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en', 'icon' => 'fas fa-horse'),
            array('title' => 'personal accessories', 'description' => "categories", 'taxonomy_id' => $harajs_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en', 'icon' => 'fas fa-keyboard'),
            array('title' => 'services', 'description' => "categories", 'taxonomy_id' => $harajs_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en', 'icon' => 'fas fa-concierge-bell'),
            array('title' => 'food and beverages', 'description' => "categories", 'taxonomy_id' => $harajs_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en', 'icon' => 'fas fa-pizza-slice'),
            array('title' => 'games and entertainment', 'description' => "categories", 'taxonomy_id' => $harajs_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en', 'icon' => 'fas fa-gamepad'),
            array('title' => 'hunting and trips', 'description' => "categories", 'taxonomy_id' => $harajs_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en', 'icon' => 'fas fa-fish'),
            array('title' => 'programming and designs', 'description' => "categories", 'taxonomy_id' => $harajs_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en', 'icon' => 'fab fa-free-code-camp'),
            array('title' => 'parties and events', 'description' => "categories", 'taxonomy_id' => $harajs_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en', 'icon' => 'fas fa-birthday-cake'),
            array('title' => 'library and arts', 'description' => "categories", 'taxonomy_id' => $harajs_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en', 'icon' => 'fas fa-book-reader'),
            array('title' => 'travel and tourism', 'description' => "categories", 'taxonomy_id' => $harajs_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en', 'icon' => 'fas fa-plane'),
            array('title' => 'others', 'description' => "all ads with different categories", 'taxonomy_id' => $harajs_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en', 'icon' => 'fas fa-ellipsis-h'),
        );

        DB::table('taxonomy_contents')->insert($taxonomy_contents);

        /*********************************
         *            brands
         ********************************/
        // harajs > brands
        // cars
        $cars_id = DB::table('taxonomy_contents')->where('title', TaxonomyContent::TITLE_CARS)->pluck('id')->first();

        $brands_id = DB::table('taxonomies')->where('type', Taxonomy::TYPE_BRANDS)->pluck('id')->first();

        $taxonomy_contents = array(
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


        // harajs  > brands
        // devices
        $devices_id = DB::table('taxonomy_contents')->where('title', TaxonomyContent::TITLE_DEVICES)->pluck('id')->first();

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
            array('title' => 'innostream', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'inq', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'intex', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'jolla', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'karbonn', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'kyocera', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'lava', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'leeco', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'lenovo', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'lg', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'maxon', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'maxwest', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'meizu', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'micromax', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'microsoft', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'mitac', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'mitsubishi', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'modu', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'motorola', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'mwg', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'nec', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'neonode', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'niu', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'nokia', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'nvidia', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'o2', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'oneplus', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'oppo', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'orange', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'palm', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'panasonic', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'pantech', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'parla', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'philips', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'plum', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'posh', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'prestigio', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'qmobile', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'qtek', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'razer', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'realme', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'sagem', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'samsung', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'sendo', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'sewon', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'sharp', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'siemens', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'sonim', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'sony', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'sony ericsson', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'spice', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 't-mobile', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'tcl', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'tecno', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'tel.me.', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'telit', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'thuraya', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'toshiba', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'ulefone', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'unnecto', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'vertu', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'verykool', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'vivo', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'vk mobile', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'vodafone', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'wiko', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'wnd', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'xcute', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'xiaomi', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'xolo', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'yezz', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'yota', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'yu', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
            array('title' => 'zte', 'description' => "mobile brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => $devices_id, 'lang' => 'en'),
        );

        DB::table('taxonomy_contents')->insert($taxonomy_contents);

        /*********************************
         *            models
         ********************************/
        // harajs > models
        // cars
        $models_id = DB::table('taxonomies')->where('type', Taxonomy::TYPE_MODELS)->pluck('id')->first();

        $taxonomy_contents = array(
            array('title' => '1996', 'description' => "car model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en'),
            array('title' => '1997', 'description' => "car model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en'),
            array('title' => '1998', 'description' => "car model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en'),
            array('title' => '1999', 'description' => "car model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en'),
            array('title' => '2000', 'description' => "car model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en'),
            array('title' => '2001', 'description' => "car model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en'),
            array('title' => '2002', 'description' => "car model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en'),
            array('title' => '2003', 'description' => "car model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en'),
            array('title' => '2004', 'description' => "car model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en'),
            array('title' => '2005', 'description' => "car model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en'),
            array('title' => '2006', 'description' => "car model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en'),
            array('title' => '2007', 'description' => "car model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en'),
            array('title' => '2008', 'description' => "car model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en'),
            array('title' => '2009', 'description' => "car model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en'),
            array('title' => '2010', 'description' => "car model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en'),
            array('title' => '2011', 'description' => "car model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en'),
            array('title' => '2012', 'description' => "car model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en'),
            array('title' => '2013', 'description' => "car model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en'),
            array('title' => '2014', 'description' => "car model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en'),
            array('title' => '2015', 'description' => "car model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en'),
            array('title' => '2016', 'description' => "car model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en'),
            array('title' => '2017', 'description' => "car model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en'),
            array('title' => '2018', 'description' => "car model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en'),
            array('title' => '2019', 'description' => "car model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en'),
            array('title' => '2020', 'description' => "car model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en'),
            array('title' => '2021', 'description' => "car model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en'),
        );

        DB::table('taxonomy_contents')->insert($taxonomy_contents);

        // harajs  > brands > models
        // devices > apple
        $apple_id = DB::table('taxonomy_contents')->where('title', TaxonomyContent::TITLE_APPLE)->pluck('id')->first();

        $taxonomy_contents = array(
            array('title' => 'iphone 12 pro', 'description' => "apple model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $apple_id, 'lang' => 'en'),
            array('title' => 'iphone 12 pro max', 'description' => "apple model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $apple_id, 'lang' => 'en'),
            array('title' => 'apple watch', 'description' => "apple model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $apple_id, 'lang' => 'en'),
            array('title' => 'iphone 12', 'description' => "apple model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $apple_id, 'lang' => 'en'),
            array('title' => 'iphone 12 mini', 'description' => "apple model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $apple_id, 'lang' => 'en'),
            array('title' => 'airpods', 'description' => "apple model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $apple_id, 'lang' => 'en'),
            array('title' => 'ipad pro', 'description' => "apple model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $apple_id, 'lang' => 'en'),
            array('title' => 'iphone se (2020)', 'description' => "apple model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $apple_id, 'lang' => 'en'),
            array('title' => 'imac', 'description' => "apple model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $apple_id, 'lang' => 'en'),
            array('title' => 'iphone 11 pro', 'description' => "apple model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $apple_id, 'lang' => 'en'),
            array('title' => 'lightning to usb cable', 'description' => "apple model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $apple_id, 'lang' => 'en'),
            array('title' => 'iphone 11 pro max', 'description' => "apple model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $apple_id, 'lang' => 'en'),
            array('title' => 'mac pro feet kit', 'description' => "apple model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $apple_id, 'lang' => 'en'),
            array('title' => 'iphone 11', 'description' => "apple model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $apple_id, 'lang' => 'en'),
            array('title' => 'smart folio', 'description' => "apple model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $apple_id, 'lang' => 'en'),
            array('title' => 'iphone xr', 'description' => "apple model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $apple_id, 'lang' => 'en'),
            array('title' => 'vesa mount adapter', 'description' => "apple model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $apple_id, 'lang' => 'en'),
            array('title' => 'iphone xs max', 'description' => "apple model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $apple_id, 'lang' => 'en'),
            array('title' => 'macbook pro', 'description' => "apple model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $apple_id, 'lang' => 'en'),
            array('title' => 'iphone xs', 'description' => "apple model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $apple_id, 'lang' => 'en'),
            array('title' => 'iphone 6', 'description' => "apple model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $apple_id, 'lang' => 'en'),
            array('title' => 'iphone 8', 'description' => "apple model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $apple_id, 'lang' => 'en'),
            array('title' => 'macbook air', 'description' => "apple model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $apple_id, 'lang' => 'en'),
        );

        DB::table('taxonomy_contents')->insert($taxonomy_contents);

        // harajs  > brands > models
        // devices > samsung
        $samsung_id = DB::table('taxonomy_contents')->where('title', TaxonomyContent::TITLE_SAMSUNG)->pluck('id')->first();

        $taxonomy_contents = array(
            array('title' => 'samsung a12 nacho', 'description' => "samsung model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $samsung_id, 'lang' => 'en'),
            array('title' => 'samsung galaxy m21 2021 edition', 'description' => "samsung model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $samsung_id, 'lang' => 'en'),
            array('title' => 'samsung galaxy f22', 'description' => "samsung model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $samsung_id, 'lang' => 'en'),
            array('title' => 'samsung galaxy a22', 'description' => "samsung model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $samsung_id, 'lang' => 'en'),
            array('title' => 'samsung galaxy m32', 'description' => "samsung model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $samsung_id, 'lang' => 'en'),
            array('title' => 'samsung galaxy a22 5g', 'description' => "samsung model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $samsung_id, 'lang' => 'en'),
            array('title' => 'samsung galaxy f52 5g', 'description' => "samsung model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $samsung_id, 'lang' => 'en'),
            array('title' => 'samsung galaxy quantum 2', 'description' => "samsung model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $samsung_id, 'lang' => 'en'),
            array('title' => 'samsung galaxy f02s', 'description' => "samsung model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $samsung_id, 'lang' => 'en'),
            array('title' => 'samsung galaxy f12', 'description' => "samsung model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $samsung_id, 'lang' => 'en'),
            array('title' => 'samsung galaxy m42 5g', 'description' => "samsung model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $samsung_id, 'lang' => 'en'),
            array('title' => 'samsung galaxy xcover 5', 'description' => "samsung model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $samsung_id, 'lang' => 'en'),
            array('title' => 'samsung galaxy a52 5g', 'description' => "samsung model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $samsung_id, 'lang' => 'en'),
            array('title' => 'samsung galaxy a52', 'description' => "samsung model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $samsung_id, 'lang' => 'en'),
            array('title' => 'samsung galaxy a72', 'description' => "samsung model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $samsung_id, 'lang' => 'en'),
            array('title' => 'samsung galaxy f62', 'description' => "samsung model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $samsung_id, 'lang' => 'en'),
            array('title' => 'samsung galaxy m12', 'description' => "samsung model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $samsung_id, 'lang' => 'en'),
            array('title' => 'samsung galaxy m02', 'description' => "samsung model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $samsung_id, 'lang' => 'en'),
            array('title' => 'samsung galaxy a02', 'description' => "samsung model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $samsung_id, 'lang' => 'en'),
            array('title' => 'samsung galaxy a32 5g', 'description' => "samsung model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $samsung_id, 'lang' => 'en'),
            array('title' => 'samsung galaxy m02s', 'description' => "samsung model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $samsung_id, 'lang' => 'en'),
            array('title' => 'samsung galaxy s21 ultra', 'description' => "samsung model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $samsung_id, 'lang' => 'en'),
            array('title' => 'samsung galaxy s21+', 'description' => "samsung model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $samsung_id, 'lang' => 'en'),
            array('title' => 'samsung galaxy s21', 'description' => "samsung model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $samsung_id, 'lang' => 'en'),
            array('title' => 'samsung galaxy a02s', 'description' => "samsung model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $samsung_id, 'lang' => 'en'),
            array('title' => 'samsung galaxy a12', 'description' => "samsung model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $samsung_id, 'lang' => 'en'),
            array('title' => 'samsung galaxy m21s', 'description' => "samsung model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $samsung_id, 'lang' => 'en'),
            array('title' => 'samsung w21 5g', 'description' => "samsung model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $samsung_id, 'lang' => 'en'),
            array('title' => 'samsung galaxy f41', 'description' => "samsung model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $samsung_id, 'lang' => 'en'),
            array('title' => 'samsung galaxy a3 core', 'description' => "samsung model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $samsung_id, 'lang' => 'en'),
            array('title' => 'samsung galaxy s20 fe', 'description' => "samsung model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $samsung_id, 'lang' => 'en'),
            array('title' => 'samsung galaxy a42 5g', 'description' => "samsung model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $samsung_id, 'lang' => 'en'),
            array('title' => 'samsung galaxy z fold 2', 'description' => "samsung model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $samsung_id, 'lang' => 'en'),
            array('title' => 'samsung galaxy m51', 'description' => "samsung model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $samsung_id, 'lang' => 'en'),
            array('title' => 'samsung galaxy note 20 ultra 5g', 'description' => "samsung model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $samsung_id, 'lang' => 'en'),
            array('title' => 'samsung galaxy note 20 5g', 'description' => "samsung model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $samsung_id, 'lang' => 'en'),
            array('title' => 'samsung galaxy note 20 ultra', 'description' => "samsung model", 'taxonomy_id' => $models_id, 'published_at' => now(), 'parent_id' => $samsung_id, 'lang' => 'en'),
        );

        DB::table('taxonomy_contents')->insert($taxonomy_contents);

        /*********************************
         *            types
         ********************************/
        // harajs > brands > types
        // cars > toyota
        $types_id = DB::table('taxonomies')->where('type', Taxonomy::TYPE_TYPES)->pluck('id')->first();

        $toyota_id = DB::table('taxonomy_contents')->where('title', TaxonomyContent::TITLE_TOYOTA)->pluck('id')->first();

        $taxonomy_contents = array(
            array('title' => 'land cruiser', 'description' => "car type", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' => $toyota_id, 'lang' => 'en'),
            array('title' => 'camry', 'description' => "car type", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' => $toyota_id, 'lang' => 'en'),
            array('title' => 'avalon', 'description' => "car type", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' => $toyota_id, 'lang' => 'en'),
            array('title' => 'hilux', 'description' => "car type", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' => $toyota_id, 'lang' => 'en'),
            array('title' => 'corolla', 'description' => "car type", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' => $toyota_id, 'lang' => 'en'),
            array('title' => 'ns', 'description' => "car type", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' => $toyota_id, 'lang' => 'en'),
            array('title' => 'prado', 'description' => "car type", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' => $toyota_id, 'lang' => 'en'),
            array('title' => 'orion', 'description' => "car type", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' => $toyota_id, 'lang' => 'en'),
            array('title' => 'sequoia', 'description' => "car type", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' => $toyota_id, 'lang' => 'en'),
            array('title' => 'bus', 'description' => "car type", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' => $toyota_id, 'lang' => 'en'),
            array('title' => 'rav', 'description' => "car type", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' => $toyota_id, 'lang' => 'en'),
            array('title' => 'innova', 'description' => "car type", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' => $toyota_id, 'lang' => 'en'),
            array('title' => 'rav', 'description' => "car type", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' => $toyota_id, 'lang' => 'en'),
            array('title' => 'eco', 'description' => "car type", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' => $toyota_id, 'lang' => 'en'),
            array('title' => 'toyota 86', 'description' => "car type", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' => $toyota_id, 'lang' => 'en'),
            array('title' => 'prius', 'description' => "car type", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' => $toyota_id, 'lang' => 'en'),
        );

        DB::table('taxonomy_contents')->insert($taxonomy_contents);

        // harajs > types
        // real estate
        $real_estate_id = DB::table('taxonomy_contents')->where('title', TaxonomyContent::TITLE_REAL_ESTATE)->pluck('id')->first();

        $taxonomy_contents = array(
            array('title' => 'lands', 'description' => "real estate", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' => $real_estate_id, 'lang' => 'en'),
            array('title' => 'for sale', 'description' => "real estate", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' => $real_estate_id, 'lang' => 'en'),
            array('title' => 'apartments', 'description' => "real estate", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' => $real_estate_id, 'lang' => 'en'),
            array('title' => 'for rent', 'description' => "real estate", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' => $real_estate_id, 'lang' => 'en'),
            array('title' => 'villas', 'description' => "real estate", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' => $real_estate_id, 'lang' => 'en'),
            array('title' => 'for sale', 'description' => "real estate", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' => $real_estate_id, 'lang' => 'en'),
            array('title' => 'apartments', 'description' => "real estate", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' => $real_estate_id, 'lang' => 'en'),
            array('title' => 'houses', 'description' => "real estate", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' => $real_estate_id, 'lang' => 'en'),
            array('title' => 'building', 'description' => "real estate", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' => $real_estate_id, 'lang' => 'en'),
            array('title' => 'breaks', 'description' => "real estate", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' => $real_estate_id, 'lang' => 'en'),
            array('title' => 'shops', 'description' => "real estate", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' => $real_estate_id, 'lang' => 'en'),
            array('title' => 'villas', 'description' => "real estate", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' => $real_estate_id, 'lang' => 'en'),
            array('title' => 'farmer', 'description' => "real estate", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' => $real_estate_id, 'lang' => 'en'),
            array('title' => 'roles', 'description' => "real estate", 'taxonomy_id' => $types_id, 'published_at' => now(), 'parent_id' => $real_estate_id, 'lang' => 'en'),
        );

        DB::table('taxonomy_contents')->insert($taxonomy_contents);

        // harajs > types
        // animals, livestock, and birds
        $categories_id = DB::table('taxonomies')->where('type', Taxonomy::TYPE_CATEGORIES)->pluck('id')->first();

        $animals_livestock_bird_id = DB::table('taxonomy_contents')->where('title', TaxonomyContent::TITLE_ANIMALS_LIVESTOCK_BIRD)->pluck('id')->first();


        $taxonomy_contents = array(
            array('title' => 'sheep', 'description' => "animals, livestock, and birds", 'taxonomy_id' => $categories_id, 'published_at' => now(), 'parent_id' => $animals_livestock_bird_id, 'lang' => 'en'),
            array('title' => 'parrot', 'description' => "animals, livestock, and birds", 'taxonomy_id' => $categories_id, 'published_at' => now(), 'parent_id' => $animals_livestock_bird_id, 'lang' => 'en'),
            array('title' => 'pigeons', 'description' => "animals, livestock, and birds", 'taxonomy_id' => $categories_id, 'published_at' => now(), 'parent_id' => $animals_livestock_bird_id, 'lang' => 'en'),
            array('title' => 'cats', 'description' => "animals, livestock, and birds", 'taxonomy_id' => $categories_id, 'published_at' => now(), 'parent_id' => $animals_livestock_bird_id, 'lang' => 'en'),
            array('title' => 'chicken', 'description' => "animals, livestock, and birds", 'taxonomy_id' => $categories_id, 'published_at' => now(), 'parent_id' => $animals_livestock_bird_id, 'lang' => 'en'),
            array('title' => 'goats', 'description' => "animals, livestock, and birds", 'taxonomy_id' => $categories_id, 'published_at' => now(), 'parent_id' => $animals_livestock_bird_id, 'lang' => 'en'),
            array('title' => 'camels', 'description' => "animals, livestock, and birds", 'taxonomy_id' => $categories_id, 'published_at' => now(), 'parent_id' => $animals_livestock_bird_id, 'lang' => 'en'),
            array('title' => 'horses', 'description' => "animals, livestock, and birds", 'taxonomy_id' => $categories_id, 'published_at' => now(), 'parent_id' => $animals_livestock_bird_id, 'lang' => 'en'),
            array('title' => 'fish', 'description' => "animals, livestock, and birds", 'taxonomy_id' => $categories_id, 'published_at' => now(), 'parent_id' => $animals_livestock_bird_id, 'lang' => 'en'),
            array('title' => 'turtles', 'description' => "animals, livestock, and birds", 'taxonomy_id' => $categories_id, 'published_at' => now(), 'parent_id' => $animals_livestock_bird_id, 'lang' => 'en'),
            array('title' => 'rabbits', 'description' => "animals, livestock, and birds", 'taxonomy_id' => $categories_id, 'published_at' => now(), 'parent_id' => $animals_livestock_bird_id, 'lang' => 'en'),
            array('title' => 'squirrels', 'description' => "animals, livestock, and birds", 'taxonomy_id' => $categories_id, 'published_at' => now(), 'parent_id' => $animals_livestock_bird_id, 'lang' => 'en'),
            array('title' => 'hyrax', 'description' => "animals, livestock, and birds", 'taxonomy_id' => $categories_id, 'published_at' => now(), 'parent_id' => $animals_livestock_bird_id, 'lang' => 'en'),
        );

        DB::table('taxonomy_contents')->insert($taxonomy_contents);

        // tags
        $tags_id = DB::table('taxonomies')->where('type', Taxonomy::TYPE_TAGS)->pluck('id')->first();

        $taxonomy_contents = array(
            array('title' => 'new', 'description' => "new ads", 'taxonomy_id' => $tags_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en'),
            array('title' => 'second-hand', 'description' => "second-hand ads", 'taxonomy_id' => $tags_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en'),
            array('title' => 'used', 'description' => "used ads", 'taxonomy_id' => $tags_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en'),
            array('title' => 'cheap', 'description' => "cheap ads", 'taxonomy_id' => $tags_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en'),
            array('title' => 'latest', 'description' => "latest ads", 'taxonomy_id' => $tags_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en'),
        );

        DB::table('taxonomy_contents')->insert($taxonomy_contents);
    }
}
