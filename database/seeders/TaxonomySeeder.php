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
            array('id' => 1, 'type' => 'harajs', 'parent_id' => null,  'published_at' => now(), 'lang' => 'en'),
            array('id' => 2, 'type' => 'brands', 'parent_id' => null,  'published_at' => now(), 'lang' => 'en'),
            array('id' => 3, 'type' => 'types', 'parent_id' => null,  'published_at' => now(), 'lang' => 'en'),
            array('id' => 4, 'type' => 'models', 'parent_id' => null,  'published_at' => now(), 'lang' => 'en'),
            array('id' => 5, 'type' => 'categories', 'parent_id' => null,  'published_at' => now(), 'lang' => 'en'),
            array('id' => 6, 'type' => 'tags', 'parent_id' => null,  'published_at' => now(), 'lang' => 'en'),
        );
        DB::table('taxonomies')->insert($taxonomies);
    }
}
