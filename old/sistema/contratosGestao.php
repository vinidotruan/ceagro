<?php
include "../resources/resources.php"; 
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ceagro | Web</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
  name="viewport">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
  <link rel="stylesheet" href="../bootstrap/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../bootstrap/css/skins/skin-blue.min.css">
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <header class="main-header">
      <a href="http://ceagro.ektech.com.br" class="logo">
        <span class="logo-mini">CW</span>
        <span >Ceagro | Web</span>
      </a>
      <!-- nav -->
      <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
          <p class="text-white"><!-- Mensagens --></p>
        </tr>
      </nav>
      <!-- nav -->
    </header>
    <!-- /#menu -->
    <?php include("menu.htm"); ?>
    <!-- /#menu -->
    
    <div class="content-wrapper">
      <section class="content">
        <!-- Your Page Content Here -->
        <!-- MODAL AREA -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                ...
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>

        <!-- MODAL AREA -->

<!-- CONTEÚDO DA PÁGINA -->

<div class="container-fluid">

<div class="table">
	
      <div id="titulo">Dados Confirmação</div>
    
    <div>
      <div class="col-md-12 col-sm-12 col-xs-12"><input type="text" class="form-control" placeholder="Confirmação Nº" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div></br>
    </div>
	
      <div id="titulo">Dados do Vendedor</div>
	
    <div>
      <div class="col-md-12 col-sm-12 col-xs-12" id="campo"><input type="text" class="form-control" class="form-control" placeholder="CNPJ" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
	  </div>
	  
      <div class="col-md-6 col-sm-6 col-xs-12" id="campo_direita">
	  <input type="text" class="form-control" placeholder="Nome" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
	  </div>
	  <div class="col-md-6 col-sm-6 col-xs-12" id="campo_direita">
	  <input type="text" class="form-control" placeholder="Razão Social" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
	  </div>
	  
	  <div class="linha2">
	  <div class="col-md-4 col-sm-4 col-xs-12" id="campo_direita"><input type="text" class="form-control" placeholder="Estado" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
      <div class="col-md-4 col-sm-4 col-xs-12" id="campo_direita"><input type="text" class="form-control" placeholder="Cidade" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
      <div class="col-md-4 col-sm-4 col-xs-12" id="campo"><input type="text" class="form-control" placeholder="Responsável" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
	  </div>
	  <div>
	  <div class="col-md-6 col-sm-6 col-xs-12" id="campo_direita"><input type="text" class="form-control" placeholder="Telefone" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
	  <div class="col-md-6 col-sm-6 col-xs-12" id="campo"><input type="text" class="form-control" placeholder="E-mail" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
	  <div class="col-md-6 col-sm-6 col-xs-12" id="campo_direita"><input type="text" class="form-control" placeholder="Assinatura" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
	  <div><select class="col-md-6 col-sm-6 col-xs-12" id="select">
			<option>Selecione o Banco do Vendedor</option>
			<option>Bradesco</option>
			<option>Itaú</option>
			<option>Banco do Brasil</option>
			<option>Banrisul</option>
			<option>Santander</option>
			<option>Caixa</option>
		  </select></div>
      <div></div>
    </div>
	<div id="titulo">Dados do Comprador</div>
	
    <div>
      <div class="col-md-12 col-sm-12 col-xs-12" id="campo"><input type="text" class="form-control" class="form-control" placeholder="CNPJ" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
	  </div>
	  
      <div class="col-md-6 col-sm-6 col-xs-12" id="campo_direita">
	  <input type="text" class="form-control" placeholder="Nome" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
	  </div>
	  <div class="col-md-6 col-sm-6 col-xs-12" id="campo_direita">
	  <input type="text" class="form-control" placeholder="Razão Social" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
	  </div>
	  
	  <div class="linha2">
	  <div class="col-md-4 col-sm-4 col-xs-12" id="campo_direita"><input type="text" class="form-control" placeholder="Estado" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
      <div class="col-md-4 col-sm-4 col-xs-12" id="campo_direita"><input type="text" class="form-control" placeholder="Cidade" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
      <div class="col-md-4 col-sm-4 col-xs-12" id="campo"><input type="text" class="form-control" placeholder="Responsável" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
	  </div>
	  <div>
	  <div class="col-md-6 col-sm-6 col-xs-12" id="campo_direita"><input type="text" class="form-control" placeholder="Telefone" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
	  <div class="col-md-6 col-sm-6 col-xs-12" id="campo"><input type="text" class="form-control" placeholder="E-mail" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
	  <div class="col-md-6 col-sm-6 col-xs-12" id="campo_direita"><input type="text" class="form-control" placeholder="Assinatura" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
	  <div><select class="col-md-6 col-sm-6 col-xs-12" id="select">
			<option>Selecione o Banco do Comprador</option>
			<option>Bradesco</option>
			<option>Itaú</option>
			<option>Banco do Brasil</option>
			<option>Banrisul</option>
			<option>Santander</option>
			<option>Caixa</option>
		  </select></div>
      <div></div>
    </div>
      <div id="titulo">Dados do Contrato</div>
    </div>
	<div>
      <div id="titulo">Produto:</div>
    </div>
    <div>
      <div class="col-md-12 col-sm-12 col-xs-12" id="campo"><input type="text" class="form-control" placeholder="Título" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
	   <div class="col-md-12 col-sm-12 col-xs-12" id="campo">
       <textarea class="form-control" rows="5" id="comment" placeholder="Descrição"></textarea>
	</div>
	<div class="col-md-6 col-sm-6 col-xs-12" id="campo_direita">
	  <select id="select">
	  <option>Grama</option>
	  <option>Quilo</option>
	  <option>Tonelada</option>
	  </select>
	</div>
	<div class="col-md-6 col-sm-6 col-xs-12" id="campo">
		<input type="text" class="form-control col-xs-3" placeholder="Quantidade" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
		</div>
		
	  
	   <div>
	   </div>
    </div>
	<div id="titulo">
      Contrato
    </div>
    <div>
	<div class="col-md-12 col-sm-12 col-xs-12" id="campo">
    <textarea class="form-control" rows="5" id="comment" placeholder="Peso e qualidade"></textarea>
	</div>
    <div class="col-md-12 col-sm-12 col-xs-12" id="campo">
    <textarea class="form-control" rows="5" id="comment" placeholder="Comissão..."></textarea>
	</div>
    <div id="titulo">
      Adendo
    </div>
    <div>
      <div class="col-md-12 col-sm-12 col-xs-12" id="campo">
    <textarea class="form-control" rows="5" id="comment" placeholder="Clausula1"></textarea>
	</div>
	  <div class="col-md-12 col-sm-12 col-xs-12" id="campo">
    <textarea class="form-control" rows="5" id="comment" placeholder="Clausula2"></textarea>
	</div>
	  <div class="col-md-12 col-sm-12 col-xs-12" id="campo">
    <textarea class="form-control" rows="5" id="comment" placeholder="Clausula3"></textarea>
	</div>
    <div id="titulo">
      Endereço de Faturamento
    </div>
    <div>
      <div class="col-md-4 col-sm-4 col-xs-4" id="campo_direita"><input type="text" class="form-control" placeholder="Número" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
      <div class="col-md-8 col-sm-8 col-xs-8" id="campo"><input type="text" class="form-control" placeholder="Endereço" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
      
      
    </div>
    <div>
		<div class="col-md-4 col-sm-4 col-xs-4" id="campo_direita"><input type="text" class="form-control" placeholder="Cidade" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
		<div class="col-md-4 col-sm-4 col-xs-4" id="campo_direita"><input type="text" class="form-control" placeholder="Bairro" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
        <div class="col-md-4 col-sm-4 col-xs-4" id="campo"><input type="text" class="form-control" placeholder="Complemento" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
	             	  
    </div>
	<div>
	  <div class="col-md-6 col-sm-6 col-xs-6" id="campo_direita"><input type="text" class="form-control" placeholder="Cep" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
	  <div class="col-md-6 col-sm-6 col-xs-6" id="campo"><input type="text" class="form-control" placeholder="Estado" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
	  
	</div>
    <div id="titulo">
      Endereço de Entrega
    </div>
    <div>
      <div class="col-md-4 col-sm-4 col-xs-4" id="campo_direita"><input type="text" class="form-control" placeholder="Número" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
      <div class="col-md-8 col-sm-8 col-xs-8" id="campo"><input type="text" class="form-control" placeholder="Endereço" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
      
      
    </div>
    <div>
		<div class="col-md-4 col-sm-4 col-xs-4" id="campo_direita"><input type="text" class="form-control" placeholder="Cidade" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
		<div class="col-md-4 col-sm-4 col-xs-4" id="campo_direita"><input type="text" class="form-control" placeholder="Bairro" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
        <div class="col-md-4 col-sm-4 col-xs-4" id="campo"><input type="text" class="form-control" placeholder="Complemento" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
	             	  
    </div>
	<div>
	  <div class="col-md-6 col-sm-6 col-xs-6" id="campo_direita"><input type="text" class="form-control" placeholder="Cep" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
	  <div class="col-md-6 col-sm-6 col-xs-6" id="campo"><input type="text" class="form-control" placeholder="Estado" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
	  
	</div>
    <div id="grupo_botoes">
      <div id="botoes"><button type="button" class="btn btn-danger">Alterar Dados</button></div>
      <div id="botoes"><button type="button" class="btn btn-primary">Limpar Formulário</button></div>
      <div id="botoes"><button type="button" class="btn btn-warning">Incluir Cadastro</button></div>
    </div>
  </tbody>
</table>
  
</div>


<!-- CONTEÚDO DA PÁGINA -->
</form>
</section>
</div>
<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <i class="fab fa-optin-monster"></i>
  </div>
  Copyright &copy; 2018 - 2019 - ektech.com.br - Todos Direitos Reservados. | Endereço Ip: <?php //mostraIP(); ?>
</footer>
<div class="control-sidebar-bg"></div>
</div>
<!-- Optional JavaScript -->
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
crossorigin="anonymous"></script>
<script src="http://code.jquery.com/jquery-2.1.4.js" integrity="sha256-siFczlgw4jULnUICcdm9gjQPZkw/YPDqhQ9+nAOScE4="
crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
      <script src="../bootstrap/js/app.min.js"></script>

</body>
</html>
