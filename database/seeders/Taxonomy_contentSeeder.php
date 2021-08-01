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
            array('id' => 1, 'title' => 'content 1', 'description' => "This is content 1", 'taxonomy_id' => 1, 'published_at' => null, 'lang' => null),
            array('id' => 2, 'title' => 'content 2', 'description' => "This is content 2", 'taxonomy_id' => 1, 'published_at' => null, 'lang' => null),
        );
        DB::table('taxonomy_contents')->insert($taxonomy_contents);
    }
}
