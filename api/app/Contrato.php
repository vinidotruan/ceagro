<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    protected $fillable = [
        "numero_confirmacao",
        "vendedor_id",
        "comprador_id",
        "produto_id",
        "unidade_medida_id",
        "vendedor_conta_bancaria_id",
        "unidade_vendedor_id",
        "unidade_comprador_id",
        "preco",
        "safra",
        "quantidade",
        "descricao",
        "pagamento",
        "tipo_embarque",
        "local",
        "data_embarque",
        "peso_qualidade",
        "cfop",
        "solicitacao_cotas",
        "carregamento",
        "assinatura_vendedor",
        "assinatura_comprador",
        "observacao",
        "comissao",
        "data_cadastro",
        "valor_contrato",
        "peso_total",
        "retirada_entrega"
    ];

    public function unidadeComprador()
    {
        return $this->belongsTo(Unidade::class, 'unidade_comprador_id');
    }

    public function unidadeVendedor()
    {
        return $this->belongsTo(Unidade::class, 'unidade_vendedor_id');
    }

    public function produto() {
        return $this->belongsTo(Produto::class, 'produto_id');
    }
}
