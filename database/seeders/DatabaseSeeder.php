<?php

namespace Database\Seeders;

use App\Imports\AdsImport;
use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call( [
            CountrySeeder::class,
            StateSeeder::class,
            UserSeeder::class,
            //AdSeeder::class,
            //CommentSeeder::class,
            //MessageSeeder::class,
            //ReviewSeeder::class,
            TaxonomySeeder::class,
            //Taxonomy_contentSeeder::class,
            //AdTaxonomyContentSeeder::class,
            //FavoriteSeeder::class,
            //AttachmentSeeder::class,
            //ReportContentSeeder::class,
            //ReportSeeder::class,
        ] );

        Excel::import( new AdsImport, 'Copy of Data Collection - Sheet1.csv', 'import', \Maatwebsite\Excel\Excel::CSV );
        Excel::import( new AdsImport, 'Copy of Data Collection - Sheet2.csv', 'import', \Maatwebsite\Excel\Excel::CSV );
    }
}
