<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'users' )->delete();

        //\App\Models\User::factory(10)->create();

        DB::table( 'users' )->insert( [
            'name'     => 'admin',
            'email'    => 'admin@example.com',
            'phone_no' => '01128853086',
            'password' => Hash::make( 'password' ),
            'isAdmin'  => true
        ] );
    }
}
