<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReportContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('report_contents')->delete();

        $report_contents = array(
            // general
            array('body' => 'Sexual content', 'type' => 'option', 'created_at' => now()),
            array('body' => 'Violent or repulsive content', 'type' => 'option', 'created_at' => now()),
            array('body' => 'Hateful or abusive content', 'type' => 'option', 'created_at' => now()),
            array('body' => 'Harassment or bullying', 'type' => 'option', 'created_at' => now()),
            array('body' => 'Spam or misleading', 'type' => 'option', 'created_at' => now()),
            array('body' => 'Infringes my rights', 'type' => 'option', 'created_at' => now()),
        );
        DB::table('report_contents')->insert($report_contents);
    }
}
