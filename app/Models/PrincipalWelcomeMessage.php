<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrincipalWelcomeMessage extends Model
{
    use HasFactory;
    protected $table = 'principal_welcome_messages';

    protected $fillable = [
        'message',
        'photo_path',
    ];
}
