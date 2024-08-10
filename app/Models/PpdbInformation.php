<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PpdbInformation extends Model
{
    use HasFactory;
    protected $table = 'ppdb_information';

    protected $fillable = [
        'title',
        'file_path',
    ];
}
