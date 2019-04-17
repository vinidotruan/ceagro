<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnidadeMedida extends Model
{
    protected $fillable = ["titulo"];
    protected $table = "unidades_medidas";
}
