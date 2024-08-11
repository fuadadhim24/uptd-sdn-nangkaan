<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    use HasFactory;
    
    protected $table = 'responses';

    protected $fillable = [
        'respondent_id',
        'question_id',
        'answer_text',
        'file_path',
        'checkbox_answers'
    ];

    // Relasi dengan Question
    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    // Relasi dengan Respondent
    public function respondent()
    {
        return $this->belongsTo(Respondent::class);
    }
}
