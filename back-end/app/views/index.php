<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contrato</title>
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
        padding-top: 30px;
    }
    .center{
        padding-left:33.33%;
    }
    .cnpjCeagro{
        padding-left:60%;
    }
    .ac{
	   width: 30vw;
	   text-align:left;
    }
    .halfSize{
        width:400px;
        text-align:left;
		/* overflow: auto; */
    }
</style>

<body>
    <header>
        <div class="log">
            <img src="public/img/logo.png" alt="">
        </div>
        <div class="data"><strong> Porto Alegre, 
        <?php
            setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
            date_default_timezone_set('America/Sao_Paulo');
            echo utf8_encode(strftime('%d de %B de %Y', strtotime($contrato->data_cadastro)));
        ?></strong>
        </div>
    </header>
    <section>
        <div class="confirmacao">
            <span>Confirmação número: <strong><?= $contrato->numero_confirmacao ?></strong></span>
        </div>
    </section>
    <section>
        <div class="vendedor">
            <table>
                <tr>
                    <td class="halfSize" style="word-break: break-all;">Vendedor:
                        <?= $contrato->unidadeVendedor()->razao_social ?>SDAIHAOSIJDOKLASDJHDAS</td>
                        <td class="ac" > A/C:
                    <?= $contrato->assinatura_vendedor ?></td>
                </tr>
               
                <tr>
                    <td>
                        <?= ($contrato->unidadeVendedor->endereco->rua && strlen($contrato->unidadeVendedor->endereco->rua) > 0) ? "{$contrato->unidadeVendedor->endereco->rua}, " : 'Não cadastrada, ' ?>
                        <?= ($contrato->unidadeVendedor->endereco->numero && strlen($contrato->unidadeVendedor->endereco->numero) > 0) ? "{$contrato->unidadeVendedor->endereco->numero}, " : ' -,  ' ?>
                    
                        <?= ($contrato->unidadeVendedor->endereco->cidade && strlen($contrato->unidadeVendedor->endereco->cidade)) ? "{$contrato->unidadeVendedor->endereco->cidade} - " : "" ?>
                            <?= ($contrato->unidadeVendedor->endereco->estado) ? $contrato->unidadeVendedor->endereco->estado : " - " . $contrato->unidadeVendedor->endereco->estado ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        CNPJ/CPF:
                        <?= $contrato->unidadeVendedor->cnpj ?>
                    </td>
                </tr>
                <tr>
                    <td >
                    Inscrição Estadual:
                        <?= ($contrato->unidadeVendedor->inscricao_estadual && strlen($contrato->unidadeVendedor->inscricao_estadual) > 0) ? $contrato->unidadeVendedor->inscricao_estadual : "-" ?>
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
                        <?= $contrato->unidadeComprador()->razao_social ?></td>
                        <td class="ac">A/C:
                        <?= $contrato->assinatura_comprador ?></td>
                </tr>
                <tr>
                    <td>
                        <?= ($contrato->unidadeComprador->endereco->rua && strlen($contrato->unidadeComprador->endereco->rua) > 0) ? "{$contrato->unidadeComprador->endereco->rua}, " : 'Não cadastrada, ' ?>
                        <?= ($contrato->unidadeComprador->endereco->numero && strlen($contrato->unidadeComprador->endereco->numero) > 0) ? "{$contrato->unidadeComprador->endereco->numero}, " : ' -,  ' ?>
                    
                        <?= ($contrato->unidadeComprador->endereco->cidade && strlen($contrato->unidadeComprador->endereco->cidade)) ? "{$contrato->unidadeComprador->endereco->cidade} - " : "" ?>
                            <?= ($contrato->unidadeComprador->endereco->estado) ? $contrato->unidadeComprador->endereco->estado : " - " . $contrato->unidadeComprador->endereco->estado ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        CNPJ/CPF:
                        <?= $contrato->unidadeComprador->cnpj ?>
                    </td>
                </tr>
                <tr>
                    <td>
                    Inscrição Estadual:
                        <?= ($contrato->unidadeComprador->inscricao_estadual && strlen($contrato->unidadeComprador->inscricao_estadual) > 0) ? $contrato->unidadeComprador->inscricao_estadual : "-" ?>
                    </td>
                
                        </tr>
            </table>
        </div>
    </section>
    <section>
        <div class="produto">
            <table>
                <tr>
                    <td>Produto:
                        <?= $contrato->produto->nome ?></td>
                    <td>Safra:
                        <?= $contrato->safra ?? "Nenhum" ?></td>
                </tr>
                <tr>
                    <td class="paddingTop20">Quantidade:
                        <?= $contrato->quantidade ?></td>
                        <td class="paddingTop20">Unidade: <?= $contrato->unidade()->titulo ?></td>
                </tr>
                <tr>
                    <td class="paddingTop20" colspan="3"> Descrição: <?= $contrato->produto()->descricao ?></td>
                </tr>
                <tr>
                    <td class="paddingTop20" colspan="3">
                        Preço: <?= $contrato->preco ?>. <?= $contrato->tipo_embarque ?>, <?= $contrato->local ?>.<br> 
                        <div class="paddingTop20"><?= ucfirst($contrato->retirada_entrega) . " de " . str_replace('-', 'à', $contrato->data_embarque) ?>.</div>
                        <div class=""><br>Pagamento: <?= $contrato->pagamento ?></div>
                    </td>
                    <tr>
                    <td class="paddingTop20" colspan="3">Dados Bancários: 
                        <?= ($contrato->contaBancaria()) ?"{$contrato->contaBancaria()->banco}, conta {$contrato->contaBancaria()->conta} agência {$contrato->contaBancaria()->agencia}" : "Não há conta bancária cadastrada" ?>
                    </td>
                </tr>
                <tr>
                    <td class="paddingTop20">Peso e Qualidade:
                        <?= $contrato->peso_qualidade ?? " - " ?></td>
                </tr>
                <tr>
                    <td class="paddingTop20" colspan="3"> CFOP: 
                        <?= $contrato->cfop()->descricao ?? "Nenhum" ?></td>
                </tr>
                <tr>
                <td class="paddingTop20">Logística/Cotas Vendedor:
                       <?= ($contrato->vendedor->logistica_cotas && strlen($contrato->vendedor->logistica_cotas) > 0) ? $contrato->vendedor->logistica_cotas : "-" ?></td>
                </tr>
                <tr>
                <td class="paddingTop10">Logística/Cotas Comprador:
                       <?= ($contrato->comprador->logistica_cotas && strlen($contrato->comprador->logistica_cotas) > 0) ? $contrato->comprador->logistica_cotas : "-" ?></td>
                </tr>
                <?php if ($contrato->observacao) {
                    echo "<tr>
                        <td class='paddingTop20' colspan='3'>Observações:
                            $contrato->observacao 
                        </td>
                    </tr>";
                }
                ?>
                <tr>
                    <td class="paddingTop20">Comissão:
                        <?= $contrato->comissao ?></td>
                </tr>
                <tr>
                    <td class="paddingTop20" colspan="3">*Nós, como intermediadores, confirmamos que realizamos nesta data esta transação em seu nome com base nas leis e regulamentos. Qualquer discrepância deverá ser comunicada imediatamente*</td>
                </tr>
                <tr>
                    <td class="linha">_________________________
                        <br>Assinatura do Comprador
                        <br>
                        <?= $contrato->unidadeComprador->cnpj ?></td>
                    <td class="linha">_________________________
                        <br>Assinatura do Vendedor
                        <br>
                        <?= $contrato->unidadeVendedor->cnpj ?></td>
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
<!--Developed by Lucas Monteiro and Ruan Vinícius-->
</html>
