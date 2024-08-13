<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacilitiesTableSeeder extends Seeder
{
    /**
     * Seed the facilities table.
     */
    public function run(): void
    {
        DB::table('facilities')->insert([
            [
                'name' => 'Library',
                'description' => 'Our library is well-stocked with books and study materials.',
                'photo' => 'nWNvAZWsUs.png',
            ],
            [
                'name' => 'Sports Complex',
                'description' => 'The sports complex includes a gymnasium, swimming pool, and courts for various sports.',
                'photo' => '0hpnaOpUw1.png',
            ],
        ]);
    }
}
