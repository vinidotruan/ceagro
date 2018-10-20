<?php
    include "../resources/security.php"; 
    include "../resources/dadosClientes.php"; 
    safeWeb();
?>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale = 1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ceagro | Web</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

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
				</div>
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
				<table class="table">
					<thead>
						<td colspan="2">
							<!-- Content -->	
							<form method="post">                      
								<div class="row">
									<div class="col-md-12">
										<div class="box">
											<div class="box-header with-border">


												<div class="input-group col-xs-6">
													<div class="input-group-prepend">
														<button type="button" class="btn btn-primary">Buscar</button>
														<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<span class="sr-only">Busca</span>
														</button>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="#">Busca Pelo Cliente</a>
															<a class="dropdown-item" href="#">Busca Pelo Cnpj</a>
															<div role="separator" class="dropdown-divider"></div>
															<a class="dropdown-item" href="#">Busca  N° Contrato</a>
														</div>
													</div>
													<input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
												</div>


											</div><!-- /.box-header -->

											<div class="box-body">
												<table class="table table-bordered">
													<tr>
														<th style="width: 20px"></th>
														<th hidden="">Id Cliente</th>
														<th style="width: 200px">Razão Social</th>
														<th>Cnpj</th>
														<th style="width: 150px">Insc Estadual</th>
													</tr>
													<?php 
													# Pegou as informações do Post
													if(isset($_POST["criterio"]) && isset($_POST["operacao"]) ){
														loadClientes($_POST["criterio"]);
													} 
													?>
												</table>
											</div><!-- /.box-body -->
											<div class="box-footer clearfix">
												<ul class="pagination pagination-sm no-margin pull-right">
													<li><a href="#">&laquo;</a></li>
													<li><a href="#">1</a></li>
													<li><a href="#">2</a></li>
													<li><a href="#">3</a></li>
													<li><a href="#">&raquo;</a></li>
												</ul>
											</div>
										</div><!-- /.box -->
									</div><!-- /.col -->
									<!-- Content -->
								</td>
							</thead>
						</table>


<!-- CONTEÚDO DA PÁGINA -->
</form>
</section>
</div>
<footer class="main-footer">
	<div class="pull-right hidden-xs">
		<i class="fab fa-optin-monster"></i>
	</div>
	Copyright &copy; 2018 - 2019 - ektech.com.br - Todos Direitos Reservados. | Endereço Ip: <?php mostraIP(); ?>
</footer>
<div class="control-sidebar-bg"></div>
</div>
<!-- Optional JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
crossorigin="anonymous"></script>
<script src="http://code.jquery.com/jquery-2.1.4.js" integrity="sha256-siFczlgw4jULnUICcdm9gjQPZkw/YPDqhQ9+nAOScE4="
crossorigin="anonymous"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script src="../bootstrap/js/app.min.js"></script>

</body>
</html>
