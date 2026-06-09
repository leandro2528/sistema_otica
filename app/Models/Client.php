<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_completo',
        'cpf',
        'telefone',
        'whatsapp',
        'data_nascimento',
        'observacoes'
    ];
}
