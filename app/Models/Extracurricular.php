<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extracurricular extends Model
{
    use HasFactory;
    protected $table = 'extracurriculars';

    protected $fillable = [
        'name',
        'description',
    ];
}
