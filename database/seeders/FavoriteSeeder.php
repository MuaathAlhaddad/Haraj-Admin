<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FavoriteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $favorites = [
            [
                'user_id' => 1,
                'favoriteable_id' => 1,
                'favoriteable_type' => 'ad',
            ],
            [
                'user_id' => 1,
                'favoriteable_id' => 2,
                'favoriteable_type' => 'ad',
            ],
            [
                'user_id' => 1,
                'favoriteable_id' => 3,
                'favoriteable_type' => 'ad',
            ],
            [
                'user_id' => 2,
                'favoriteable_id' => 1,
                'favoriteable_type' => 'ad',
            ],
            [
                'user_id' => 2,
                'favoriteable_id' => 2,
                'favoriteable_type' => 'ad',
            ],
            [
                'user_id' => 2,
                'favoriteable_id' => 3,
                'favoriteable_type' => 'ad',
            ],
        ];

        DB::table('favorites')->insert($favorites);
    }
}
