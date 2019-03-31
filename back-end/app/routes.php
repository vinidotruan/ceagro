<?php
use App\Core\App;

$urlBase = App::get('config')['rotas'];
$router->get("{$urlBase}numero-confirmacao", "ContratosController@numeroConfirmacao");

$router->get("{$urlBase}adaptar", "AdaptacaoController@index");

$router->get("{$urlBase}clientes", "ClientesController@index");
$router->post("{$urlBase}clientes", "ClientesController@store");
$router->put("{$urlBase}clientes/{cliente}", "ClientesController@update");
$router->delete("{$urlBase}clientes/{cliente}", "ClientesController@destroy");
$router->get("{$urlBase}clientes/{cliente}", "ClientesController@show");

$router->get("{$urlBase}clientes/{cliente}/unidades", "UnidadesController@index");
$router->post("{$urlBase}unidades", "UnidadesController@store");
$router->put("{$urlBase}unidades/{unidade}", "UnidadesController@update");
$router->delete("{$urlBase}unidades/{unidade}", "UnidadesController@destroy");

$router->get("{$urlBase}enderecos", "EnderecosController@index");
$router->delete("{$urlBase}enderecos/{endereco}", "EnderecosController@destroy");
$router->get("{$urlBase}clientes/{cliente}/enderecos", "EnderecosController@index");
$router->post("{$urlBase}clientes/enderecos", "EnderecosController@store");
$router->put("{$urlBase}clientes/enderecos/{endereco}", "EnderecosController@update");

$router->post("{$urlBase}clientes/contas-bancarias", "ContasBancariasController@store");
$router->put("{$urlBase}contas-bancarias/{contaBancaria}", "ContasBancariasController@update");
$router->delete("{$urlBase}contas-bancarias/{contaBancaria}", "ContasBancariasController@destroy");
$router->get("{$urlBase}clientes/{cliente}/contas-bancarias", "ContasBancariasController@show");

$router->get("{$urlBase}produtos", "ProdutosController@index");
$router->post("{$urlBase}produtos", "ProdutosController@store");
$router->put("{$urlBase}produtos/{produto}", "ProdutosController@update");
$router->delete("{$urlBase}produtos/{produto}", "ProdutosController@destroy");

$router->post("{$urlBase}cfops", "CfopsController@store");
$router->get("{$urlBase}cfops", "CfopsController@index");
$router->delete("{$urlBase}cfops/{cfop}", "CfopsController@destroy");
$router->put("{$urlBase}cfops/{cfop}", "CfopsController@update");
$router->get("{$urlBase}cfops/{cfop}", "CfopsController@show");

$router->get("{$urlBase}contratos", "ContratosController@index");
$router->get("{$urlBase}contratos/{contrato}", "ContratosController@show");
$router->post("{$urlBase}contratos", "ContratosController@store");
$router->put("{$urlBase}contratos/{contrato}", "ContratosController@update");
$router->delete("{$urlBase}contratos/{contrato}", "ContratosController@destroy");
$router->get("{$urlBase}contratos/futuros", "ContratosController@contratosFuturos");
$router->get("{$urlBase}contratos/atuais", "ContratosController@contratosAtuais");
$router->get("{$urlBase}contratos/dados-compradores", "ContratosController@dados");
$router->get("{$urlBase}contratos/dados-vendedores", "ContratosController@dados2");

$router->get("{$urlBase}contratos/{contrato}/adendos", "AdendosController@index");
$router->post("{$urlBase}contratos/adendos", "AdendosController@store");
$router->put("{$urlBase}adendos/{adendo}", "AdendosController@update");
$router->delete("{$urlBase}adendos/{adendo}", "AdendosController@destroy");

$router->get("{$urlBase}contratos/{contrato}/ContratosFuturos", "ContratosFuturosController@index");
$router->post("{$urlBase}contratos/ContratosFuturos", "ContratosFuturosController@store");
$router->put("{$urlBase}ContratosFuturos/{contratoFuturo}", "ContratosFuturosController@update");
$router->delete("{$urlBase}ContratosFuturos/{contratoFuturo}", "ContratosFuturosController@destroy");

$router->get("{$urlBase}contratos/{contrato}/ContratosAtuais", "ContratosAtuaisController@index");
$router->post("{$urlBase}contratos/ContratosAtuais", "ContratosAtuaisController@store");
$router->put("{$urlBase}ContratosAtuais/{contratoAtual}", "ContratosAtuaisController@update");
$router->delete("{$urlBase}ContratosAtuais/{contratoAtual}", "ContratosAtuaisController@destroy");

$router->post("{$urlBase}contratos/fixacoes", "FixacoesController@store");
$router->get("{$urlBase}contratos/{contrato}/fixacoes", "FixacoesController@index");
$router->put("{$urlBase}fixacoes/{fixacao}", "FixacoesController@update");
$router->delete("{$urlBase}fixacoes/{fixacao}", "FixacoesController@destroy");

$router->get("{$urlBase}unidades-medidas", "UnidadesMedidasController@index");

$router->get("{$urlBase}pdfs/contratos/{contrato}", "PDF\ContratosController@index");
$router->get("{$urlBase}pdfs/contratos/adendos/{adendo}", "PDF\AdendosController@index");
$router->get("{$urlBase}pdfs/contratos/fixacoes/{contrato}", "PDF\FixacoesController@index");
$router->get("{$urlBase}pdfs/contratos/contratosFuturos/{contrato}", "PDF\ContratosFuturosController@index");
$router->get("{$urlBase}pdfs/contratos/contratosAtuais/{contrato}", "PDF\ContratosAtuaisController@index");
