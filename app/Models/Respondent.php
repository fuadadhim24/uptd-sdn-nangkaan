<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respondent extends Model
{
    use HasFactory;
    protected $table = 'respondents';

    protected $fillable = [
        'name',
    ];

    public function responses()
    {
        return $this->hasMany(Response::class);
    }
}
