<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisiMisi extends Model
{
    use HasFactory;
    protected $table = 'visi_misi';
    protected $fillable = [
        'description',
        'type',
    ];

    public function getTypeAttribute($value)
    {
        return $value == '0' ? 'Visi' : 'Misi';
    }
}
