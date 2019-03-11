<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adendos</title>
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

    table {
        width: 567px !important;
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
    }
    .halfSize{
        text-align:left;
        width: 35rem;
        word-wrap: break-word !important; 
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
        <div class="data">Adendo feito na data:<strong> 
        <?= strftime('%d/%m/%Y', strtotime($adendo->data_cadastro)) ?></strong>
        </div>
    </header>
    <section>
        <div class="confirmacao" >
            <span>Confirmação número: <strong><?=$adendo->contrato()->numero_confirmacao ?></strong></span>
        </div>
        <div >
            <span>Contrato feito na data: <?= strftime('%d/%m/%Y', strtotime($adendo->contrato()->data_cadastro)) ?></span>
        </div>
    </section>
    <section>
        <div class="vendedor">
            <table>
                <tr>
                    <td class="halfSize">Vendedor:
                        <?= $adendo->contrato()->unidadeVendedor()->razao_social?></td>
                        <td class="ac" > A/C:
                    <?= $adendo->contrato()->assinatura_vendedor ?></td>
                </tr>
                <tr>
                    <td>
                        <?= ($adendo->contrato()->unidadeVendedor->endereco->rua && strlen($adendo->contrato()->unidadeVendedor->endereco->rua) > 0) ? "{$adendo->contrato()->unidadeVendedor->endereco->rua}, " : 'Não cadastrada, ' ?>
                        <?= ($adendo->contrato()->unidadeVendedor->endereco->numero && strlen($adendo->contrato()->unidadeVendedor->endereco->numero) > 0) ? "{$adendo->contrato()->unidadeVendedor->endereco->numero}, " : ' -,  ' ?>
                    
                        <?= ($adendo->contrato()->unidadeVendedor->endereco->cidade && strlen($adendo->contrato()->unidadeVendedor->endereco->cidade)) ? "{$adendo->contrato()->unidadeVendedor->endereco->cidade} - " : "" ?>
                            <?= ($adendo->contrato()->unidadeVendedor->endereco->estado) ? $adendo->contrato()->unidadeVendedor->endereco->estado : " - " . $adendo->contrato()->unidadeVendedor->endereco->estado ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        CNPJ/CPF:
                        <?= $adendo->contrato()->unidadeVendedor->cnpj ?>
                    </td>
                </tr>
                <tr>
                    <td >
                    Inscrição Estadual:
                        <?= ($adendo->contrato()->unidadeVendedor->inscricao_estadual && strlen($adendo->contrato()->unidadeVendedor->inscricao_estadual) > 0) ? $adendo->contrato()->unidadeVendedor->inscricao_estadual : "-" ?>
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
                        <?= $adendo->contrato()->unidadeComprador()->razao_social ?></td>
                        <td class="ac">A/C:
                        <?= $adendo->contrato()->assinatura_comprador ?></td>
                </tr>
                <tr>
                    <td>
                        <?= ($adendo->contrato()->unidadeComprador->endereco->rua && strlen($adendo->contrato()->unidadeComprador->endereco->rua) > 0) ? "{$adendo->contrato()->unidadeComprador->endereco->rua}, " : 'Não cadastrada, ' ?>
                        <?= ($adendo->contrato()->unidadeComprador->endereco->numero && strlen($adendo->contrato()->unidadeComprador->endereco->numero) > 0) ? "{$adendo->contrato()->unidadeComprador->endereco->numero}, " : ' -,  ' ?>
                    
                        <?= ($adendo->contrato()->unidadeComprador->endereco->cidade && strlen($adendo->contrato()->unidadeComprador->endereco->cidade)) ? "{$adendo->contrato()->unidadeComprador->endereco->cidade} - " : "" ?>
                            <?= ($adendo->contrato()->unidadeComprador->endereco->estado) ? $adendo->contrato()->unidadeComprador->endereco->estado : " - " . $adendo->contrato()->unidadeComprador->endereco->estado ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        CNPJ/CPF:
                        <?= $adendo->contrato()->unidadeComprador->cnpj ?>
                    </td>
                </tr>
                <tr>
                    <td>
                    Inscrição Estadual:
                        <?= ($adendo->contrato()->unidadeComprador->inscricao_estadual && strlen($adendo->contrato()->unidadeComprador->inscricao_estadual) > 0) ? $adendo->contrato()->unidadeComprador->inscricao_estadual : "-" ?>
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
                        <?= $adendo->contrato()->produto->nome ?></td>
                    <td  >Safra:
                        <?= $adendo->contrato()->safra ?? "Nenhum" ?></td>
                </tr>
                <tr>
                    <td class="paddingTop20">Quantidade:
                        <?= $adendo->contrato()->quantidade ?>
                    </td>
                    <td class="paddingTop20">Unidade: <?= $adendo->contrato()->unidade()->titulo ?>
                    </td>
                </tr>
                
            </table>
    </section>
    <section>
        <table style="margin-top:10px">
            <tr>
                <td class="" ><strong>Descrição</strong>: <?=$adendo->descricao; ?></td>
            </tr>
        </table>
    </section>
    <section class="table">
        <table>
            <tr>
                <td>_________________________
                    <br>Assinatura do Comprador
                    <br>
                    <?= $adendo->contrato()->unidadeComprador->cnpj ?></td>
                <td>_________________________
                    <br>Assinatura do Vendedor
                    <br>
                    <?= $adendo->contrato()->unidadeVendedor->cnpj ?></td>
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