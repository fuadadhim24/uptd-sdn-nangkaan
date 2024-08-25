<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VisiMisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menambahkan data visi
        DB::table('visi_misi')->insert([
            [
                'description' => 'Terwujudnya Insan yang Berkarakter, Berprestasi, Berwawasan Lingkungan',
                'type' => '0', // 0 untuk visi
            ],
        ]);

        // Menambahkan data misi
        DB::table('visi_misi')->insert([
            [
                'description' => 'Mengamalkan Ajaran Agama dengan Baik Dari Rumah',
                'type' => '1', // 1 untuk misi
            ],
            [
                'description' => 'Meraih Prestasi yang Tinggi Baik dalam Akademik Maupun Non Akademik',
                'type' => '1', // 1 untuk misi
            ],
            [
                'description' => 'Meningkatkan Kinerja Guru yang Profesional dengan Melaksanakan Pembelajaran',
                'type' => '1', // 1 untuk misi
            ],
            [
                'description' => 'PAIKEM Melalui Pembelajaran Daring, Luring , atau Gabungkan dari Kedduanya',
                'type' => '1', // 1 untuk misi
            ],
            [
                'description' => 'Terjalin Kerjasama Sekolah dengan Masyarakat dalam Rangka Memaksimalkan/ Peran Orang Tua Sebagai Guru Pembelajar Utama Di Rumah.',
                'type' => '1', // 1 untuk misi
            ],
            [
                'description' => 'Terciptanya Keamanan, Kebersihan, Ketertiban, Keindahan, Kekeluargaan, Kerindangan Sekolah.',
                'type' => '1', // 1 untuk misi
            ],
        ]);
    }
}
