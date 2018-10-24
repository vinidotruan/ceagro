<?php include 'imports/cabecalho.html'?>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
<?php include "imports/header.html"?>
		<?php include "menu.html";?>
		<div class="content-wrapper">
			<section class="content">
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
			<div class="container-fluid">

<form id="formulario">
    <div>
      <div>Dados Básicos</div>
    </div>
    <div>
      <div>
        <input type="text" class="form-control" name="razao_social" placeholder="Razão Social" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
      </div>
      <div>
        <input type="text" class="form-control col-xs-3" name="cnpj" placeholder="Cnpj" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
      </div>
      <div>
        <input type="text" class="form-control col-xs-3" name="inscricao_estadual" placeholder="I. Estadual" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
      </div>
			<div>
				<input type="text" class="form-control" name="email" placeholder="Email" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
			</div>
			<div>
				<input type="text" class="form-control" name="nome" placeholder="Nome" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
			</div>
		</div>
		<div class="row">
			<div id="botoes" class="row mx-2">
				<input type="submit" class="btn btn-warning" value="Enviar">
			</div>
    </div>
	</form>
	<div class="row"></div>
	<form id="formulario">
    <div>
      <div>Contatos</div>
    </div>
     <div>

      <div><input disabled type="text" class="form-control col-xs-3" name="telefone" placeholder="Telefone1" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
      <div><input disabled type="text" class="form-control col-xs-3" name="telefone2" placeholder="Telefone2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>

    </div>
    <div>

    </div>
    <div>
      <td colspan="4"><textarea class="form-control" name="obs" disabled rows="5" id="comment" placeholder="Obs"></textarea></div>
    </div>
    <div id="grupo_botoes">
    </div>
</form>
<div>
<form id="formulario">
	<div>
      <div>Endereço:</div>
    </div>
	<div>
		<div class="col-md-4 col-sm-4 col-xs-4" id="campo_direita"><input disabled type="text" name="numero" class="form-control" placeholder="Número" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
		<div class="col-md-8 col-sm-8 col-xs-8" id="campo"><input disabled type="text" name="endereco" class="form-control" placeholder="Endereço" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
    </div>
    <div>
		<div class="col-md-4 col-sm-4 col-xs-4" id="campo_direita"><input disabled type="text" name="cidade" class="form-control" placeholder="Cidade" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
		<div class="col-md-4 col-sm-4 col-xs-4" id="campo_direita"><input disabled type="text" name="cidade" class="form-control" placeholder="Bairro" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
        <div class="col-md-4 col-sm-4 col-xs-4" id="campo"><input disabled type="text" name="complemento" class="form-control" placeholder="Complemento" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>

    </div>
	<div>
	  <div class="col-md-6 col-sm-6 col-xs-6" id="campo_direita"><input disabled type="text" name="cep" class="form-control" placeholder="Cep" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
	  <div class="col-md-6 col-sm-6 col-xs-6" id="campo"><input disabled type="text" name="estado" class="form-control" placeholder="Estado" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>

	</div>
    <div id="grupo_botoes" class="row">
      <div id="botoes" class="col"><button disabled type="button" class="btn btn-danger">Alterar Dados</button></div>
      <div id="botoes" class="col"><button disabled type="button" class="btn btn-primary">Limpar Formulário</button></div>
      <div id="botoes" class="col"><input disabled type="submit" class="btn btn-warning" value="Enviar"></div>
    </div>
</form>
</div>
</div>
</form>
</section>
</div>
<footer class="main-footer">
	<div class="pull-right hidden-xs">
		<i class="fab fa-optin-monster"></i>
	</div>
	Copyright &copy; 2018 - 2019 - ektech.com.br - Todos Direitos Reservados. | Endereço Ip: <?php //mostraIP();?>
</footer>
<div class="control-sidebar-bg"></div>
</div>
<?php include 'imports/imports.html'?>
<script src="clientes.js"></script>
<?php include 'imports/rodape.html'?>