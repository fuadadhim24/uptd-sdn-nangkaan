<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicCalendar extends Model
{
    use HasFactory;
    protected $table = 'academic_calendars';

    protected $fillable = [
        'title',
        'file_path',
    ];
}
