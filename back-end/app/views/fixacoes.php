<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fixações</title>
</head>
<style>
       * {
        margin: 0;
        padding: 0;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 12px !important;
        text-align: justify;
    }
    body {
        margin-top: 2.5cm;
        margin-bottom: 2.5cm;
        margin-left: 3cm;
        margin-right: 3cm;
    }

    .data, .assinatura {
        float: right;
    }
    .assinatura {
        margin-right: 10%;
    }
    .confirmacao,
    .vendedor {
        margin-top: 3%;
    }
    .nome {
        float: left;
        background-color: red
    }
    .comprador {
        margin-top: 2%;
    }
    .produto {
        margin-top: 2%;
    }
    .tdproduto {
        width: 400px;
    }
    .paddingTop20 {
        padding-top: 10px;
    }
    .linha {
        margin-top: 300px;
    }
    .center{
        padding-left:33.33%;
    }
    .cnpjCeagro{
        padding-left:60%;
    }
    .ac{
        text-align:left;
        vertical-align: top;

    }
    .halfSize{
        text-align:left;
        width: 30rem;
        word-wrap: break-word !important;
    } word-wrap: break-word !important; 
    }
    table {
        width: 567px !important;
    }

    .table {
        position:fixed;
        top:870px;
        left:115px;
    }
</style>

<body>
    <header>
        <div class="log">
            <img src="public/img/logo.png" alt="">
        </div>
        <div class="data">Fixação feita na data:<strong> 
        <?= strftime('%d/%m/%Y', strtotime($fixacao->data_cadastro)) ?></strong>
        </div>
    </header>
    <section>
        <div class="confirmacao" >
            <span>Confirmação número: <strong><?=$fixacao->contrato()->numero_confirmacao ?></strong></span>
        </div>
        <div>
            <span>Contrato feito na data: <?= strftime('%d/%m/%Y', strtotime($fixacao->contrato()->data_cadastro)) ?></span>
        </div>
    </section>
    <section>
        <div class="vendedor">
            <table>
                <tr>
                    <td class="halfSize">Vendedor:
                        <?= $fixacao->contrato()->unidadeVendedor()->razao_social ?></td>
                        <td class="ac" > A/C:
                    <?= $fixacao->contrato()->assinatura_vendedor ?></td>
                </tr>
               
                <tr>
                    <td>
                        <?= ($fixacao->contrato()->unidadeVendedor->endereco->rua && strlen($fixacao->contrato()->unidadeVendedor->endereco->rua) > 0) ? "{$fixacao->contrato()->unidadeVendedor->endereco->rua}, " : 'Não cadastrada, ' ?>
                        <?= ($fixacao->contrato()->unidadeVendedor->endereco->numero && strlen($fixacao->contrato()->unidadeVendedor->endereco->numero) > 0) ? "{$fixacao->contrato()->unidadeVendedor->endereco->numero}, " : ' -,  ' ?>
                    
                        <?= ($fixacao->contrato()->unidadeVendedor->endereco->cidade && strlen($fixacao->contrato()->unidadeVendedor->endereco->cidade)) ? "{$fixacao->contrato()->unidadeVendedor->endereco->cidade} - " : "" ?>
                            <?= ($fixacao->contrato()->unidadeVendedor->endereco->estado) ? $fixacao->contrato()->unidadeVendedor->endereco->estado : " - " . $fixacao->contrato()->unidadeVendedor->endereco->estado ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        CNPJ/CPF:
                        <?= $fixacao->contrato()->unidadeVendedor->cnpj ?>
                    </td>
                </tr>
                <tr>
                    <td >
                    Inscrição Estadual:
                        <?= ($fixacao->contrato()->unidadeVendedor->inscricao_estadual && strlen($fixacao->contrato()->unidadeVendedor->inscricao_estadual) > 0) ? $fixacao->contrato()->unidadeVendedor->inscricao_estadual : "-" ?>
                    </td>
                    
                </tr>
            </table>
        </div>
    </section>
    <section>
        <div class="comprador">
            <table>
                <tr>
                    <td class="halfSize">Comprador:
                        <?= $fixacao->contrato()->unidadeComprador()->razao_social ?></td>
                        <td class="ac">A/C:
                        <?= $fixacao->contrato()->assinatura_comprador ?></td>
                </tr>
                <tr>
                    <td>
                        <?= ($fixacao->contrato()->unidadeComprador->endereco->rua && strlen($fixacao->contrato()->unidadeComprador->endereco->rua) > 0) ? "{$fixacao->contrato()->unidadeComprador->endereco->rua}, " : 'Não cadastrada, ' ?>
                        <?= ($fixacao->contrato()->unidadeComprador->endereco->numero && strlen($fixacao->contrato()->unidadeComprador->endereco->numero) > 0) ? "{$fixacao->contrato()->unidadeComprador->endereco->numero}, " : ' -,  ' ?>
                    
                        <?= ($fixacao->contrato()->unidadeComprador->endereco->cidade && strlen($fixacao->contrato()->unidadeComprador->endereco->cidade)) ? "{$fixacao->contrato()->unidadeComprador->endereco->cidade} - " : "" ?>
                            <?= ($fixacao->contrato()->unidadeComprador->endereco->estado) ? $fixacao->contrato()->unidadeComprador->endereco->estado : " - " . $fixacao->contrato()->unidadeComprador->endereco->estado ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        CNPJ/CPF:
                        <?= $fixacao->contrato()->unidadeComprador->cnpj ?>
                    </td>
                </tr>
                <tr>
                    <td>
                    Inscrição Estadual:
                        <?= ($fixacao->contrato()->unidadeComprador->inscricao_estadual && strlen($fixacao->contrato()->unidadeComprador->inscricao_estadual) > 0) ? $fixacao->contrato()->unidadeComprador->inscricao_estadual : "-" ?>
                    </td>
                
                        </tr>
            </table>
        </div>
    </section>
    <section>
        <div class="produto">
            <table>
                <tr>
                    <td  style="width: 333px">Produto:
                        <?= $fixacao->contrato()->produto->nome ?></td>
                    <td  >Safra:
                        <?= $fixacao->contrato()->safra ?? "Nenhum" ?></td>
                </tr>
                <tr>
                    <td class="paddingTop20">Quantidade:
                        <?= $fixacao->contrato()->quantidade ?>
                    </td>
                    <td class="paddingTop20">Unidade: <?= $fixacao->contrato()->unidade()->titulo ?>
                    </td>
                </tr>
                
            </table>
    </section>
    <section style="margin-top: 20px">
        <table style="margin-top:10px">
            <tr>
                <td class="padding20">
                <strong>Descrição: </strong> Conforme acordado entre as partes, fica fixado  <?= $fixacao->quantidade ?>, 
                a <?= $fixacao->preco ?> por saco de sessenta quilos. 
                <?= $fixacao->contrato()->retirada_entrega?>
                <?= $fixacao->local_embarque ?> e pagamento 
                <?= $fixacao->data_pagamento ?>. Remessa via 
                <?='Banco:'. $fixacao->contasBancarias()->banco .'- agência:'. $fixacao->contasBancarias()->agencia .'- conta:'.$fixacao->contasBancarias()->conta?>.
            </tr>
        </table>
    </section>
    <section class="table">
        <table>
            <tr>
                <td>_________________________
                    <br>Assinatura do Comprador
                    <br>
                    <?= $fixacao->contrato()->unidadeComprador->cnpj ?></td>
                <td>_________________________
                    <br>Assinatura do Vendedor
                    <br>
                    <?= $fixacao->contrato()->unidadeVendedor->cnpj ?></td>
                </td>
            </tr>
            <tr>
                <td class="linha center"><pre>____________________________________________</pre></td>
            </tr>
            <tr>
                <td class="center"><pre>CEAGRO CORRETORA DE MERCADORIAS LTDA</pre></td>
            </tr>
            <tr>
                <td class="cnpjCeagro"><pre>90.880.204/0001-57</pre></td>
            </tr>
        </table>
    </section>
</body>

</html>