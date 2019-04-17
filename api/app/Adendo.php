<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adendo extends Model
{
    protected $fillable = [
        "contrato_id",
        "descricao",
        "data_cadastro",
    ];
}
