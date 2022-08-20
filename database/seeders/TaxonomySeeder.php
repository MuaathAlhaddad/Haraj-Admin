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

        DB::table( 'taxonomies' )->delete();
        $taxonomies = array(
            array( 'type' => 'harajs', 'parent_id' => null, 'published_at' => now(), 'lang' => 'en' ),
            array( 'type' => 'brands', 'parent_id' => null, 'published_at' => now(), 'lang' => 'en' ),
            array( 'type' => 'types', 'parent_id' => null, 'published_at' => now(), 'lang' => 'en' ),
            array( 'type' => 'models', 'parent_id' => null, 'published_at' => now(), 'lang' => 'en' ),
            array( 'type' => 'categories', 'parent_id' => null, 'published_at' => now(), 'lang' => 'en' ),
            array( 'type' => 'tags', 'parent_id' => null, 'published_at' => now(), 'lang' => 'en' ),
            array( 'type' => 'others', 'parent_id' => null, 'published_at' => now(), 'lang' => 'en' ),
        );
        DB::table( 'taxonomies' )->insert( $taxonomies );
    }
}
