<?php
   include "../resources/resources.php"; 
    include "../resources/security.php"; 
  
    safeWeb();
?>

<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php title(); ?></title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
		name="viewport">
	<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
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
					<span ><?php title(); ?></span>
			</a>
			<!-- nav -->
			<nav class="navbar navbar-static-top">
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>
				<div class="navbar-custom-menu">
					<p class="text-white">Olá!  !!!</p>
				</div>
			</nav>
			<!-- nav -->
		</header>
		<!-- /#menu -->
            <?php include("menu.htm"); ?>
        <!-- /#menu -->
		
		<div class="content-wrapper">
			<section class="content-header">
		<! #mensagem >
			</section>
			<section class="content">
				<!-- Your Page Content Here -->
				<form id="FrmMain" runat="server">
					<asp:Label ID="LbIdEscola" runat="server" Visible="false" Text="Label"></asp:Label>
					<!-- MODAL AREA -->

					<!-- MODAL AREA -->

					<!-- CONTEÚDO DA PÁGINA -->

					<table class="table">
						<thead>
							<tr>
								<td colspan="2">
									<!-- Content -->	
									<div class="row">
										<div class="col-md-12">
											<div class="box">
												<div class="box-header with-border">
													<h3 class="box-title">Principal</h3>
												</div><!-- /.box-header -->
												Informações que deseja deixar na área principal.	
											</div><!-- /.box -->

										</div><!-- /.col -->
									</div>
									<!-- Content -->

								</td>
							</tr>
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
			Copyright &copy; 2018 - 2019 - ektech.com.br - Todos Direitos Reservados. | Endereço Ip: <?php mostraIp(); ?>
		</footer>
		<div class="control-sidebar-bg"></div>
	</div>
	<!-- Optional JavaScript -->
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
		crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
		crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
		integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
		crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-2.1.4.min.js" integrity="sha256-8WqyJLuWKRBVhxXIL1jBDD7SDxU936oZkCnxQbWwJVw="
		crossorigin="anonymous"></script>
	<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
	<script src="../bootstrap/js/app.min.js"></script>
</body>
</html>
