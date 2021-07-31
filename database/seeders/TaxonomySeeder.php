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
            array('id' => 1, 'type' => 'tags', 'parent' => 1, 'sort' => 1, 'published_at' => null),
            array('id' => 2, 'type' => 'tags', 'parent' => 1, 'sort' => 1, 'published_at' => null),
        );
        DB::table('taxonomies')->insert($taxonomies);
    }
}
