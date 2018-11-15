<?php

namespace App\Controllers;

use App\Core\App;

class EnderecosController
{
    public function cadastrarEnderecoFaturamento($enderecoFaturamento)
    {
        $enderecoFaturamentoId = App::get('db')->insert('enderecos_faturamentos', [
            'rua' => $enderecoFaturamento['rua'],
            'numero' => $enderecoFaturamento['numero'],
            'complemento' => $enderecoFaturamento['complemento'],
            'bairro' => $enderecoFaturamento['bairro'],
            'cidade' => $enderecoFaturamento['cidade'],
            'estado' => $enderecoFaturamento['estado'],
            'cep' => $enderecoFaturamento['cep'],
            'cliente_id' => $enderecoFaturamento['cliente_id'],
        ]);
        // $enderecoFaturamento = App::get('db')->selectWhere('enderecos_faturamentos', ["id", $enderecoFaturamentoId]);
        // echo json_encode($enderecoFaturamento);
        return $enderecoFaturamentoId;

    }

    public function cadastrarEnderecoEntrega($enderecoEntrega)
    {
        $enderecoEntregaId = App::get('db')->insert('enderecos_entregas', [
            'rua' => $enderecoEntrega['rua'],
            'numero' => $enderecoEntrega['numero'],
            'complemento' => $enderecoEntrega['complemento'],
            'bairro' => $enderecoEntrega['bairro'],
            'cidade' => $enderecoEntrega['cidade'],
            'estado' => $enderecoEntrega['estado'],
            'cep' => $enderecoEntrega['cep'],
            'cliente_id' => $enderecoEntrega['cliente_id'],
        ]);

        // $enderecoEntrega = App::get('db')->selectWhere('enderecos_entregas', ["id", $enderecoEntregaId]);
        // echo json_encode($enderecoEntrega);
        return $enderecoEntregaId;
    }
}
