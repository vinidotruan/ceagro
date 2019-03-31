<?php

namespace App\Models;

use App\Core\App;
use App\Models\Cliente;
use App\Models\Produto;
use App\Models\Unidade;
use App\Models\Cfop;

class ContratoAtual extends Model
{
    public $id;
    public $numero_confirmacao;
    public $vendedor_id;
    public $comprador_id;
    public $produto_id;
    public $preco;
    public $unidade_medida_id;
    public $safra;

    public $futuro = 160;
    public $atual = 1460;

    protected static $table = "contratos";


    public function __construct()
    {
        $this->unidadeComprador();
        $this->unidadeVendedor();
        $this->adendos();
        $this->comprador();
        $this->vendedor();
        $this->produto();
        $this->unidade();
        $this->contaBancaria();
    }

    public function comprador()
    {
        $reflection = new \ReflectionClass("App\Models\Cliente");
        $instance = $reflection->newInstanceWithoutConstructor();
        return $this->comprador = $instance::find(["id", $this->comprador_id]);
    }

    public function vendedor()
    {
        $reflection = new \ReflectionClass("App\Models\Cliente");
        $instance = $reflection->newInstanceWithoutConstructor();
        return $this->vendedor = $instance::find(["id", $this->comprador_id]);
    }

    public function produto()
    {
        return $this->produto = Produto::find(["id", $this->produto_id]);
    }

    public function ultimoFuturo()
    {
        return static::contratosFuturos()->futuros + $this->futuro;
    }

    public function ultimoAtual()
    {
        return static::contratosAtuais()->atuais + $this->atual;
    }

    public static function delete($campos = [])
    {
        Adendo::delete(['contrato_id', $campos[1]]);
        Fixacao::delete(['contrato_id', $campos[1]]);

        return parent::delete($campos);
    } 
}
