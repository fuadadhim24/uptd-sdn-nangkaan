<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExtracurricularsTableSeeder extends Seeder
{
    /**
     * Seed the extracurricular activities table.
     */
    public function run(): void
    {
        DB::table('extracurriculars')->insert([
            [
                'name' => 'Basketball Club',
                'description' => 'A club for students interested in playing basketball.',
            ],
            [
                'name' => 'Music Band',
                'description' => 'Join the school music band and explore your musical talents.',
            ],
        ]);
    }
}
