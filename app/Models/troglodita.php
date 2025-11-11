<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class troglodita extends Model
{
    /** @use HasFactory<\Database\Factories\TrogloditaFactory> */
    use HasFactory;

    protected $fillable = [
        'foto_profissional',
        'cpf',
        'data_nascimento',
        'status',
        'user_id'
    ];
}
