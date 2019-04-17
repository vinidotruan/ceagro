<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        "nome_fantasia",
        "logistica_cotas",
        "razao_social",
        "cnpj",
        "inscricao_estadual",
    ];
}
