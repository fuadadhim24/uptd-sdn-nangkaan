<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSekolah extends Model
{
    use HasFactory;
    protected $table = 'data_sekolah';

    protected $fillable = [
        'nama_sekolah',
        'status_sekolah',
        'nss',
        'npsn',
        'alamat_sekolah',
        'desa_kelurahan',
        'kecamatan',
        'kabupaten_kota',
        'provinsi',
        'kode_pos',
        'tanggal_sk_pendirian',
        'sk_ijin_operasional',
        'tanggal_sk_ijin_operasional',
    ];
    protected $casts = [
        'tanggal_sk_pendirian' => 'date',
        'tanggal_sk_ijin_operasional' => 'date',
    ];
}
