<?php

namespace App\Models;

use App\Core\App;
use App\Models\Cliente;
use App\Models\Produto;
use App\Models\Unidade;
use App\Models\Cfop;

class Contrato extends Model
{
    public $id;
    public $numero_confirmacao;
    public $vendedor_id;
    public $comprador_id;
    public $produto_id;
    public $preco;
    public $unidade_medida_id;
    public $safra;
    public $quantidade;
    public $descricao;
    public $pagamento;
    public $tipo_embarque;
    public $local;
    public $data_embarque;
    public $peso_qualidade;
    public $cfop;
    public $solicitacao_cotas;
    public $carregamento;
    public $assinatura_vendedor;
    public $assinatura_comprador;
    public $observacao;
    public $comissao;
    public $data_cadastro;
    public $valor_contrato;
    public $peso_total;
    public $vendedor_conta_bancaria_id;
    public $unidade_vendedor_id;
    public $unidade_comprador_id;
    public $retirada_entrega;

    public $unidadeComprador;
    public $unidadeVendedor;
    public $vendedor;
    public $comprador;
    public $contaBancaria;
    public $produto;
    public $unidadeMedida;

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


    public function unidadeComprador()
    {
        return $this->unidadeComprador = Unidade::find(["id", $this->unidade_comprador_id]);
    }

    public function adendos()
    {
        return $this->adendos = Adendo::get(["contrato_id", '=', $this->id]);
    }
    public function unidadeVendedor()
    {
        return $this->unidadeVendedor = Unidade::find(["id", $this->unidade_vendedor_id]);
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

    public function unidade()
    {

        return $this->unidadeMedida = UnidadeMedida::find(["id", $this->unidade_medida_id]);
    }

    public function contaBancaria()
    {
        return $this->contaBancaria = ContaBancaria::find(['id', $this->vendedor_conta_bancaria_id]);
    }

    public function cfop()
    {
        return Cfop::find(['id', $this->cfop]);
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
