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

    table {
        width: 567px !important;
    }

    .data,
    .assinatura {float: right;}

    .assinatura {margin-right: 10%;}
    .confirmacao,
    .vendedor {
        margin-top: 3%;
        word-break: break-all;
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
        text-align:left;
        vertical-align: top;

    }
    .halfSize{
        text-align:left;
        width: 30rem;
        word-wrap: break-word !important;
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
        ?></strong>
        </div>
    </header>
    <section>
    </section>
    <section>
        <div class="vendedor">
            <table>
                <tr>
                    <td><?php foreach($contrato as $campo){
                        $id = $campo->id;
                    } 
                    echo $id;?></td>
                </tr>
            </table>
    </section>
</body>
<!--Developed by Lucas Monteiro and Ruan Vinícius-->
</html>
