<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PpdbInformationTableSeeder extends Seeder
{
    /**
     * Seed the PPDB information table.
     */
    public function run(): void
    {
        DB::table('ppdb_information')->insert([
            [
                'title' => 'PPDB Guidelines 2024',
                'file_path' => '5DXU78Aahk.png',
            ]
        ]);
    }
}
