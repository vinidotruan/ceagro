<?php include 'partials/cabecalho.html' ?>

<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<?php include "partials/header.html"; ?>
		<?php include "partials/menu.html"; ?>
		<div class="wrapper">
			<div class="content-wrapper" style="min-height: 1080px;">
				<br>
				<div class="row">
					<div class="col-xs-12">
						<form role="form" id="contrato">
							<div class="row">
								<!-- Dados do Contrato -->
								<div class="col-xs-12">
									<section class="invoice" id="contrato">
										<div class="row">
											<div class="col-xs-12">
												<h2 class="page-header">

													<i class="fa fa-file"></i> Número do Contrato
												</h2>
											</div>
										</div>
										<div class="row invoice-info">
											<div class="box-body">
												<div class="form-row">
													<div class="col-xs-12 col-lg-8">
														<div class="form-group">
															<label for="numero_confirmacao">Numero de Confirmação</label>
															<input type="text" class="form-control" name="numero_confirmacao" id="numero_confirmacao" placeholder="Digite o numero de confirmacao" autocomplete="off" readonly>
														</div>
													</div>
													<div class="col-xs-12 col-lg-4">
														<div class="form-group">
															<label>
																<input type="radio" name="futuro" id="a" class="minimal" value="0" checked> Atual 
															</label>
														</div>
														<div class="form-group">
															<label>
																<input type="radio" name="futuro" id="f" class="minimal" value="true"> Futuro 
															</label>
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
							</div>
							<div class="row">
								<!-- Dados do Vendedor -->
								<div class="col-xs-12 col-lg-6">
									<section class="invoice box cliente" id="vendedor" style="width: auto">
										<div class="row">
											<div class="col-xs-12">
												<h2 class="page-header">
													<i class="fa fa-address-card"></i> Dados do Vendedor
												</h2>
											</div>
										</div>
										<div class="row invoice-info">
											<div class="box-body">
												<div class="form-row">
													<div class="col-xs-12">
														<div class="form-group">
															<label for="vendedor_id">Nome Fantasia</label>
															<select class="form-control select2 clientes" name="vendedor_id" style="width: 100%;" id="nome_fantasia" required></select>
														</div>
													</div>
													<div class="col-xs-12">
														<div class="form-group">
															<label for="unidade_comprador_id">Unidades</label>
															<select class="form-control select2 unidades" name="unidade_vendedor_id" style="width: 100%;" id="cnpj" required></select>
														</div>
													</div>

													<div class="col-xs-12">
														<div class="form-group">
															<label for="vendedor_conta_bancaria_id">Contas Bancárias</label>
															<select class="form-control select2" name="vendedor_conta_bancaria_id" style="width: 100%;" id="contas" required></select>
														</div>
													</div>
													<div class="col-xs-12">
														<div class="form-group">
															<label for="assinatura">Assinatura do Vendedor</label>
															<input type="text" class="form-control" name="assinatura_vendedor" placeholder="Digite a Assinatura do Vendedor" autocomplete="off" required> </div>
													</div>
												</div>
											</div>
										</div>
										<div class="overlay overlay"> <i class="fa fa-refresh fa-spin"></i> </div>
									</section>
								</div>
								<!-- Dados do Comprador -->
								<div class="col-xs-12 col-lg-6">
									<section class="invoice box cliente" id="comprador" style="width: auto">
										<div class="row">
											<div class="col-xs-12">
												<h2 class="page-header">
													<i class="fa fa-address-card"></i> Dados do Comprador
												</h2>
											</div>
										</div>
										<div class="row invoice-info">
											<div class="box-body">
												<div class="form-row">
													<div class="col-xs-12">
														<div class="form-group">
															<label for="clientes">Clientes</label>
															<select class="form-control select2 clientes" name="comprador_id" style="width: 100%;" id="nome_fantasia" required></select>
														</div>
													</div>
													<div class="col-xs-12">
														<div class="form-group">
															<label for="unidade_comprador_id">Unidades</label>
															<select class="form-control select2 unidades" name="unidade_comprador_id" style="width: 100%;" id="cnpj" required></select>
														</div>
													</div>
													<div class="col-xs-12">
														<div class="form-group">
															<label for="assinatura">Assinatura do Comprador</label>
															<input type="text" class="form-control" name="assinatura_comprador" placeholder="Digite a Assinatura do Comprador" autocomplete="off" required> 
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="overlay overlay"> <i class="fa fa-refresh fa-spin"></i> </div>
									</section>
								</div>
							</div>
							<div class="row">
								<!-- Dados do Produto -->
								<div class="col-xs-12">
									<section class="invoice" id="produto">
										<div class="row">
											<div class="col-xs-12">
												<h2 class="page-header">
													<i class="fa fa-cart-plus"></i> Dados do Contrato
												</h2>
											</div>
										</div>
										<div class="row invoice-info">
											<div class="col-xs-12">
												<div class="box-body">
													<div class="form-row">
														<div class="col-xs-12 col-lg-4">
															<div class="form-group">
																<label for="cnpj">Produto</label>
																<select class="form-control select2" name="produto_id" style="width: 100%;" id="produtos" required></select>
															</div>
														</div>
														<div class="col-xs-12 col-lg-4">
															<div class="form-group">
																<label for="unidade_medida_id">Unidades</label>
																<select class="form-control" name="unidade_medida_id" style="width: 100%;" id="unidades" required></select>
															</div>
														</div>
														<div class="col-xs-12 col-lg-4">
															<div class="form-group">
																<label for="">Safra</label>
																<input type="text" class="form-control" name="safra" placeholder="Digite a safra do produto" autocomplete="off" required> </div>
														</div>
														<div class="col-xs-12 col-lg-4">
															<div class="form-group">
																<label for="">Quantidade</label>
																<input type="text" class="form-control" name="quantidade" placeholder="Digite a quantidade do produto" autocomplete="off" required> 
															</div>
														</div>
														<div class="col-xs-12 col-lg-4">
															<div class="form-group">
																<label for="descricao">Descricao</label>
																<textarea type="text" class="form-control" name="descricao" id="descricao" placeholder="Descricao do contrato" rows="1" disabled></textarea>
															</div>
														</div>
														<div class="col-xs-12 col-lg-4">
															<div class="form-group">
																<label for="preco">Preço</label>
																<input type="text" class="form-control" name="preco" placeholder="Digite o preco" autocomplete="off" required>
															</div>
														</div>
														
														<div class="col-xs-12 col-lg-4">
															<div class="form-group">
																<label for="tipo_embarque">Tipo de Embarque</label>
																<input type="text" class="form-control" name="tipo_embarque" placeholder="Digite o tipo de retirada" autocomplete="off" required>
															</div>
														</div>

														<div class="col-xs-12 col-lg-4">
															<div class="form-group">
																<label for="local">Local</label>
																<input type="text" class="form-control" name="local" placeholder="Informe o local do contrato" autocomplete="off" required> 
															</div>
														</div>
													
														<div class="col-xs-12 col-lg-4">
															<div class="form-group">
																<label for="data_embarque">Data do Embarque</label>
																<div class="input-group">
																	<div class="input-group-addon">
																		<i class="fa fa-calendar"></i>
																	</div>
																	<input type="text" name="data_embarque" class="form-control pull-right" id="reservation">
																</div>
															</div>
														</div>

														<div class="col-xs-12 col-lg-8"></div>
														<div class="col-xs-12 col-lg-4">
															<div class="form-group">
																<label for="retirada_entrega">Opção de Embarque</label>
																<select name="retirada_entrega" class="form-control">
																	<option value="retirada">Retirada</option>
																	<option value="entrega">Entrega</option>
																	<option value="transferencia">Transferência</option>
																</select>
															</div>
														</div>

														<div class="form-row">
															<div class="col-xs-12">
																<div class="form-group">
																	<label for="pagamento">Pagamento</label>
																	<textarea type="text" class="form-control" name="pagamento" rows="4" placeholder="Digite as informações sobre o pagamento" required></textarea>
																</div>
															</div>
															<div class="col-xs-12">
																<div class="form-group">
																	<label for="observacao">Observações</label>
																	<textarea type="text" class="form-control" name="observacao" rows="4" placeholder="Digite as observações"></textarea>
																</div>
															</div>
															<div class="col-xs-12">
																<div class="form-group">
																	<label for="peso_qualidade">Peso & Qualidade</label>
																	<select name="peso_qualidade" class="form-control">
																		<option value="Na origem">Na origem</option>
																		<option value="No destino">No destino</option>
																	</select>
																</div>
															</div>
														</div>
														<div class="form-row">
															<div class="col-xs-12 col-lg-4">
															<div class="form-group">
																<label for="cfop">CFOP</label>
																<select name="cfop" class="form-control" id="cfops">
																</select>
															</div>
															</div>
															<div class="col-xs-12 col-lg-4">
																<div class="form-group">
																	<label for="comissao">Comissão</label>
																	<input type="text" class="form-control" name="comissao" placeholder="Informe sobre a comissao do contrato" autocomplete="off" required>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12">
								<section class="invoice" id="button">
									<div class="box-footer">
										<?php require('partials/components/erro.html') ?>
										<?php require('partials/components/success.html') ?>
									<button type="submit" class="btn btn-primary pull-right" id="enviar"></button>
									</div>
								</section>
								</div>
							</div>
					  	</form>
				  	</div>
				</div>
				  
				<div class="row">
					<div class="col-xs-12">
						<section class="invoice">
							<div class="row">
								<div class="col-xs-12">
									<div class="nav-tabs-custom">
										<ul class="nav nav-tabs">
											<li class="active"><a href="#ade" data-toggle="tab">Adendos</a></li>
											<li><a href="#fix" data-toggle="tab">Fixações</a></li>
										</ul>
										
										<div class="tab-content">
											<div class="tab-pane active" id="ade">
												<div class="row">
													<div class="col-xs-12 col-lg-12">
														<div class="row invoice-info">
															<form role="form" id="adendo">
																<div class="box-body">
																	<div class="form-row">
																		<div class="col-xs-12">
																			<div class="form-group">
																				<label for="pagamento">Descrição</label>
																				<textarea type="text" class="form-control" name="descricao" rows="6" placeholder="Digite as informações sobre o Adendo" required></textarea>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="box-footer">
																	<button type="submit" class="btn btn-primary pull-right">Salvar</button>
																</div>
															</form>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-xs-12">
														<h2 class="page-header">
															Adendos
														</h2>
													</div>
												</div>
												<div class="row">
													<div class="col-xs-12 table-responsive">
														<table class="table table-striped">
															<thead>
																<tr>
																	<th>Descrição</th>
																	<th width="10%">Imprimir</th>
																	<th width="10%">Deletar</th>
																</tr>
															</thead>
															<tbody id="adendos">
															</tbody>
														</table>
													</div>
												</div>
											</div>

											<div class="tab-pane" id="fix">
												<div class="row">
													<div class="col-xs-12 col-lg-12">
														<div class="row invoice-info">
															<form role="form" id="fixacao">
																<div class="box-body">
																	<div class="form-row">
																		<div class="col-xs-12 col-lg-6">
																			<div class="form-group">
																				<label for="volume">Quantidade</label>
																				<input type="text" class="form-control" name="quantidade" id="quantidade" placeholder="informe o volume" autocomplete="off">
																			</div>
																		</div>
																		<div class="col-xs-12 col-lg-6">
																			<div class="form-group">
																				<label for="preco">Preço</label>
																				<input type="text" class="form-control" name="preco" id="preco" placeholder="informe o preço" autocomplete="off">
																			</div>
																		</div>
																		<div class="col-xs-12 col-lg-6">
																			<div class="form-group">
																				<label for="local_embarque">Local do embarque</label>
																				<input type="text" class="form-control" name="local_embarque" id="local_embarque" placeholder="informe o preço" autocomplete="off">
																			</div>
																		</div>
																		<div class="col-xs-12 col-lg-6">
																			<div class="form-group">
																				<label for="data_embarque">Data de pagamento</label>
																				<div class="input-group">
																					<div class="input-group-addon">
																						<i class="fa fa-calendar"></i>
																					</div>
																					<input type="text" class="form-control pull-right" name="data_pagamento" id="reservation2" autocomplete="off">
																				</div>
																			</div>
																		</div>
																		<div class="col-xs-12 col-lg-6">
																			<div class="form-group">
																				<label for="vendedor_conta_bancaria_id">Contas Bancárias</label>
																				<select class="form-control select2" name="conta_bancaria_vendedor_id" style="width: 100%;" id="contas2" required></select>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="box-footer">
																	<button type="submit" class="btn btn-primary pull-right">Salvar</button>
																</div>
															</form>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-xs-12">
														<h2 class="page-header">
															Fixações
														</h2>
													</div>
												</div>
												<div class="row">
													<div class="col-xs-12 table-responsive">
														<table class="table table-striped">
															<thead>
																<tr>
																	<th>Quantidade</th>
																	<th>Preço</th>
																	<th>Local do Embarque</th>
																	<th>Data de Pagamento</th>
																	<th>Conta Bancária</th>
																	<th width="10%">Imprimir</th>
																	<th width="10%">Deletar</th>
																</tr>
															</thead>
															<tbody id="fixacoes">
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
			  	<div class="clearfix"></div>
			</div>
			<div class="control-sidebar-bg"></div>
		</div>
		<div class="modal fade" id="modal-aviso">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<h4 class="modal-title">AVISO!</h4>
					</div>
					<div class="modal-body">
						<p>Você deseja realmente excluir este adendo?</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default btn-danger pull-left" style="color:white" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary" id="deletarAdendo">Excluir</button>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="modal-aviso-fixacoes">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<h4 class="modal-title">AVISO!</h4>
					</div>
					<div class="modal-body">
						<p>Você deseja realmente excluir esta fixação?</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default btn-danger pull-left" style="color:white" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary" id="deletarFixacao">Excluir</button>
					</div>
				</div>
			</div>
		</div>
		
		<div class="modal fade" id="modal-default">
			<div class="modal-dialog">
				<div class="modal-content" style="background: rgba(0,0,0,0)">
				<div class="modal-body" style="background: rgba(0,0,0,0)"> </div>
				</div>
			</div>
		</div>
		<footer class="main-footer">
		<div class="pull-right hidden-xs"> 
					<i class="fab fa-optin-monster"></i> 
				</div> 
				Copyright © 2019 CEAGRO - Todos os Direitos Reservados. Feito com <img src="http://dom.com.vc/dom.com.vc.gif" alt="DOM Creative Consulting" height="20" width="20"> por <a href="https://dom.com.vc">DOM</a>
			</footer>
		<?php include 'partials/imports.html' ?>
		<script type="module" src="public/assets/js/comprador_vendedor.js"></script>
		<script type="module" src="public/assets/js/contratos.js"></script>
		<script src="adminlte/plugins/iCheck/icheck.min.js"></script>
		<script>
		$('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
			checkboxClass: 'icheckbox_minimal-blue',
			radioClass: 'iradio_minimal-blue'
		});
		</script>
	<script src="adminlte/bower_components/moment/min/moment.min.js"></script>
	<script src="adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
	<script src="adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

		<script>
		$('#reservation').daterangepicker({
				locale: {
				format: 'DD/MM/YYYY'
			}
		});
		$.fn.datepicker.dates['pt'] = {
			days: ["Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado"],
			daysShort: ["Dom", "Seg", "Ter", "Qua", "Qui", "Sex", "Sab"],
			daysMin: ["Dom", "Seg", "Ter", "Qua", "Qui", "Sex", "Sab"],
			months: ["Janeirp", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julio", "Agosto", "Setmebro", "Outubro", "Novembro", "Dezembro"],
			monthsShort: ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"],
			today: "Hoje",
			clear: "Limpar",
			format: "dd/mm/yyyy",
			titleFormat: "MM yyyy", /* Leverages same syntax as 'format' */
			weekStart: 0
		};
		$('#reservation2').datepicker({
			autoclose: true,
			language:'pt'
		})
		</script>
		<?php include 'partials/rodape.html' ?>