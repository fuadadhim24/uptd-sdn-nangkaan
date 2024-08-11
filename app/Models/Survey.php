<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;
    protected $table = 'surveys';

    protected $fillable = [
        'title',
        'description',
        'is_active',
    ];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
    public function respondents()
    {
        return $this->hasManyThrough(Respondent::class, Response::class, 'answer_id', 'id', 'id', 'respondent_id')
                    ->distinct(); // Untuk memastikan hanya responden unik yang dihitung
    }
    

}
