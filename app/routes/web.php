<?php
// GET
Route::get('/', function() { include('app/views/user/paginaInicio.php');});
Route::get('/quemsomos', function() { include('app/views/compartilhada/quemSomos.php');});
Route::get('/eventos', function() { include('app/views/user/eventos.php');});
Route::get('/comoajudar', function() { include('app/views/compartilhada/comoAjudar.php');});
Route::get('/login', function() { include('app/views/user/login.php');});
Route::get('/loginadm', function() { include('app/views/user/loginADM.php');});
Route::get('/cadastro', function() {  include('app/views/user/cadastroUsuario.php');});
Route::get('/login/esquecisenha', function() { include('app/views/user/esqueciSenha.php');});
Route::get('/login/esquecisenha/confirmacaoemail', function() { include('app/views/user/confirmacaoEmail.php');});
Route::get('/novasenha', function() { include('app/views/user/novaSenha.php');});
Route::get('/developers', function() { include('app/views/user/developers.php');});
Route::get('/eventos/detalhesevento/{idEvento}', 'EventoController@index');
Route::get('/eventos/arrecadacao/{idArrecadacao}', 'ArrecadacaoController@index');
Route::get('/adocao', 'AnimalController@adocao');
Route::get('/adocao/detalhesanimal/{idAnimal}', 'AnimalController@detalhesAnimal');
Route::get('/adocao/detalhesanimal/{idAnimal}/formularioadocao', 'FormularioAdocaoController@index', ['AuthMiddleware']);
Route::get('adm/formulario/{acao}/{obj}/{id}', 'CriarEditarController@index', ['PermissaoMiddleware', 'AdminMiddleware', 'AuthMiddleware']);
Route::get('adm/lista/{obj}', 'ListaDevController@index', ['PermissaoMiddleware', 'AdminMiddleware', 'AuthMiddleware']); // !!Tem q arrumar


Route::get('adm/perfil/{idAdm}', 'AdmController@perfil', ['AuthMiddleware']);
// POST

Route::post('/login', 'AdmController@login');
Route::post('/cadastro', 'AdmController@CRUD');
Route::post('/perfil/{acao}/{idAdm}', 'AdmController@perfil', ['AuthMiddleware']);


Route::post('/adocao/detalhesanimal/{idAnimal}/formularioadocao', 'FormularioAdocaoController@CRUD', ['AuthMiddleware']);
Route::post('/formulario/{acao}/{obj}/{id}', 'CriarEditarController@CRUD', ['PermissaoMiddleware', 'AdminMiddleware', 'AuthMiddleware']); // !!Tem q arrumar


Route::post('/salvar/{obj}', 'FrmDevController@index', ['AuthMiddleware']);
