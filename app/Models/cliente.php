<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    /** @use HasFactory<\Database\Factories\ClienteFactory> */
    use HasFactory;

    protected $fillable = [
        'whatsapp',
        'foto',
        'user_id'
    ];


    public function regras(){
        return [
                'produto_id' => 'required',
            ];
    }

    public function feedbacks() {
        return [
            'required' => 'O campo :attribute deve ser preenchido.'
        ];
    }
}
