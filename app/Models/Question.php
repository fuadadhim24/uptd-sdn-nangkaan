<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $table = 'questions';

    protected $fillable = [
        'survey_id',
        'question_type',
        'question_text',
        'options',
        'range'
    ];

    // Relasi dengan Survey
    public function survey()
    {
        return $this->belongsTo(Survey::class);
    }

    // Relasi dengan Response
    public function responses()
    {
        return $this->hasMany(Response::class);
    }
}
