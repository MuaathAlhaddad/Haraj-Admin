<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaxonomySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('taxonomies')->delete();
        $taxonomies = array(
            array('id' => 1, 'type' => 'harajs', 'parent' => null, 'published_at' => null, 'lang' => 'en'),
            array('id' => 2, 'type' => 'brands', 'parent' => null, 'published_at' => null, 'lang' => 'en'),
            array('id' => 3, 'type' => 'types', 'parent' => null, 'published_at' => null, 'lang' => 'en'),
            array('id' => 4, 'type' => 'models', 'parent' => null, 'published_at' => null, 'lang' => 'en'),
            array('id' =>5, 'type' => 'tags', 'parent' => null, 'published_at' => null, 'lang' => 'en'),

//            array('id' => 2, 'type' => 'categories', 'parent' => null, 'level' => 1, 'published_at' => null, 'lang' => 'en'),

// level 2
            array('id' => 5, 'type' => 'cars', 'parent' => 1, 'level' => 2, 'published_at' => null, 'lang' => 'en'),
            array('id' => 6, 'type' => 'devices',  'parent' => 1, 'level' => 2, 'published_at' => null, 'lang' => 'en'),
            array('id' => 7, 'type' => 'real estate', 'parent' => 1, 'level' => 2, 'published_at' => null, 'lang' => 'en'),

// level 3
            array('reference' => 'categories_cars_8','id' => 8, 'type' => 'Honda', 'parent' => 2, 'level' => 3, 'published_at' => null, 'lang' => 'en'),
            array('id' => 9, 'type' => 'Infiniti', 'parent' => 2, 'level' => 3, 'published_at' => null, 'lang' => 'en'),
            array('id' => 10, 'type' => 'Lexus', 'parent' => 2, 'level' => 3, 'published_at' => null, 'lang' => 'en'),
            array('id' => 11, 'type' => 'Mazda', 'parent' => 2, 'level' => 3, 'published_at' => null, 'lang' => 'en'),
            array('id' => 12, 'type' => 'Mitsubishi', 'parent' => 2, 'level' => 3, 'published_at' => null, 'lang' => 'en'),
            array('id' => 13, 'type' => 'Nissan', 'parent' => 2, 'level' => 3, 'published_at' => null, 'lang' => 'en'),
            array('id' => 14, 'type' => 'Subaru', 'parent' => 2, 'level' => 3, 'published_at' => null, 'lang' => 'en'),
            array('id' => 15, 'type' => 'Suzuki', 'parent' => 2, 'level' => 3, 'published_at' => null, 'lang' => 'en'),
            array('id' => 16, 'type' => 'Toyota', 'parent' => 2, 'level' => 3, 'published_at' => null, 'lang' => 'en'),


        );
        DB::table('taxonomies')->insert($taxonomies);
    }
}
