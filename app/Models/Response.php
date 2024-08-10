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
        'answer_id',
    ];

    public function respondent()
    {
        return $this->belongsTo(Respondent::class);
    }

    public function answer()
    {
        return $this->belongsTo(Answer::class);
    }
}
