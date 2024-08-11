<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respondent extends Model
{
    use HasFactory;

    protected $table = 'respondents';

    protected $fillable = [
        'name'
    ];

    // Relasi dengan Response
    public function responses()
    {
        return $this->hasMany(Response::class);
    }

    public function surveys()
    {
        return $this->belongsToMany(Survey::class, 'responses', 'respondent_id', 'question_id')
                    ->distinct(); 
    }
}
