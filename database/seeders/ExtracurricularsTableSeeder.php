<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExtracurricularsTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('extracurriculars')->insert([
            [
                'name' => 'Pramuka',
                'pertemuan' => 4,
                'manfaat' => json_encode([
                    'Menumbuhkan keterampilan hidup dan kepemimpinan',
                    'Mengenal dan menghargai alam',
                    'Melatih kerjasama dan tanggung jawab'
                ]),
                'nomor_handphone' => '08123456789',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kesenian',
                'pertemuan' => 2,
                'manfaat' => json_encode([
                    'Mengasah bakat seni',
                    'Meningkatkan kreativitas',
                    'Membangun rasa percaya diri'
                ]),
                'nomor_handphone' => '08234567890',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Olahraga',
                'pertemuan' => 3,
                'manfaat' => json_encode([
                    'Meningkatkan kesehatan dan kebugaran',
                    'Membangun semangat tim',
                    'Mengembangkan keterampilan olahraga'
                ]),
                'nomor_handphone' => '08345678901',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
