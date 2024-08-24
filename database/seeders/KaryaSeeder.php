<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KaryaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('karya')->insert([
            'photo_path' => 'activity-gallery-1.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
