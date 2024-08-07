<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SurveySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('surveys')->insert([
            [
                'title' => 'Survei Kepuasan Pelanggan',
                'description' => 'Survei ini bertujuan untuk mengukur kepuasan pelanggan terhadap layanan kami.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Survei Kualitas Produk',
                'description' => 'Survei ini bertujuan untuk mengumpulkan umpan balik tentang kualitas produk kami.',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
