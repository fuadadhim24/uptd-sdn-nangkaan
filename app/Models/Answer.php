<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;
    protected $table = 'answers';

    protected $fillable = [
        'question_id',
        'answer_type',
        'answer_text',
        'file_path',
        'options',
        'min_value',
        'max_value',
    ];

    protected $casts = [
        'options' => 'array',
    ];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function responses()
    {
        return $this->hasMany(Response::class);
    }
}
