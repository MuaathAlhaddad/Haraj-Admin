<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CountrySeeder::class,
            StateSeeder::class,
            UserSeeder::class,
            AdSeeder::class,
            CommentSeeder::class,
            OrderSeeder::class,
            MessageSeeder::class,
            ReviewSeeder::class,

        ]);
    }
}
