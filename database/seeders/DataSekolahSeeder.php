<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DataSekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('data_sekolah')->insert([
            'nama_sekolah' => 'SDN Nangkaan Bondowoso',
            'status_sekolah' => 'Negeri',
            'nss' => '101052201023',
            'npsn' => '20521686',
            'alamat_sekolah' => 'Jln. Brigpol Sudarlan NO. 457',
            'desa_kelurahan' => 'Nangkaan',
            'kecamatan' => 'Bondowoso',
            'kabupaten_kota' => 'Bondowoso',
            'provinsi' => 'Jawa Timur',
            'kode_pos' => '68215',
            'tanggal_sk_pendirian' => Carbon::create('1976', '08', '17'),
            'sk_ijin_operasional' => 'Perbup. No. 34 Tahun 2018',
            'tanggal_sk_ijin_operasional' => Carbon::create('2018', '04', '16'),
        ]);
    }
}
