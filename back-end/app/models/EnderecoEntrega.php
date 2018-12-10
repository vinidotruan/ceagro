<?php

namespace App\Models;

class EnderecoEntrega extends Model
{

    public $id;
    public $cliente_id;
    public $cep;
    public $complemento;
    public $bairro;
    public $cidade;
    public $numero;
    public $estado;
    public $rua;

    public static $table = "enderecos_entregas";
}