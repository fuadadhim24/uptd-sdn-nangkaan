<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurriculaTableSeeder extends Seeder
{
    /**
     * Seed the curricula table.
     */
    public function run(): void
    {
        DB::table('curricula')->insert([
            [
                'title' => 'Curriculum 2024',
                'file_path' => 'h4H8S6cz8A.pdf',
            ]
        ]);
    }
}
