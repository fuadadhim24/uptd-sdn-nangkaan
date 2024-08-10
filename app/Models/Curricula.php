<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curricula extends Model
{
    use HasFactory;
    protected $table = 'curricula';

    protected $fillable = [
        'title',
        'file_path',
    ];
}
