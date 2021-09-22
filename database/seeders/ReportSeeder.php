<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reports')->delete();

        $reports = array(
            array('body' => null, 'reportable_id' => 1, 'reportable_type' => 'ad', 'user_id' => 1, 'report_content_id' => 1, 'created_at' => now()),
            array('body' => null, 'reportable_id' => 2, 'reportable_type' => 'user', 'user_id' => 1, 'report_content_id' => 1, 'created_at' => now()),
            array('body' => null, 'reportable_id' => 1, 'reportable_type' => 'comment', 'user_id' => 1, 'report_content_id' => 2, 'created_at' => now()),

            // others option  - custom report
            array('body' => 'this is a custom report', 'reportable_id' => 1, 'reportable_type' => 'ad', 'user_id' => 1, 'report_content_id' => null, 'created_at' => now()),

        );
        DB::table('reports')->insert($reports);
    }
}
