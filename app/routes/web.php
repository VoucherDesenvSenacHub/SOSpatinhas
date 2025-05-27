<?php
// GET
Route::get('/', function() { include('app/views/user/paginaInicio.php');});
Route::get('/quemsomos', function() { include('app/views/compartilhada/quemSomos.php');});
Route::get('/eventos', function() { include('app/views/user/eventos.php');});
Route::get('/comoajudar', function() { include('app/views/compartilhada/comoAjudar.php');});
Route::get('/adm/login', function() { include('app/views/adm/loginADM.php');});
Route::get('/cadastro', function() { include('app/views/user/cadastroUsuario.php');});
Route::get('/login/esquecisenha', function() { include('app/views/user/esqueciSenha.php');});
Route::get('/login/esquecisenha/confirmacaoemail', function() { include('app/views/user/confirmacaoEmail.php');});
Route::get('/novasenha', function() { include('app/views/user/novaSenha.php');});
Route::get('/developers', function() { include('app/views/user/developers.php');});
Route::get('/eventos/detalhesevento/{idEvento}', 'EventoController@index');
Route::get('/eventos/arrecadacao/{idArrecadacao}', 'ArrecadacaoController@index');
Route::get('/adocao', 'AnimalController@adocao');
Route::get('/adocao/detalhesanimal/{idAnimal}', 'AnimalController@detalhesAnimal');

// Route::get('/adocao/detalhesanimal/{idAnimal}/formularioadocao', 'FormularioAdocaoController@index', ['AuthMiddleware']); ORIGINAL
Route::get('/adocao/detalhesanimal/{idAnimal}/formularioadocao', 'AnimalController@detalhesAnimalForm', ['AuthMiddleware']);

Route::get('/perfil/{tipoUsuario}/{idUsuario}', 'PerfilController@index', ['AuthMiddleware']);

Route::get('/formulario/{acao}/{obj}/{id}', 'CriarEditarController@index', ['PermissaoMiddleware', 'AdminMiddleware', 'AuthMiddleware']);

Route::get('/lista/{obj}', 'ListaDevController@index', ['PermissaoMiddleware', 'AdminMiddleware', 'AuthMiddleware']); // !!Tem q arrumar

// POST
// Route::post('/adocao/detalhesanimal/{idAnimal}/formularioadocao', 'FormularioAdocaoController@CRUD', ['AuthMiddleware']); ORIGINAL
Route::post('/adocao/detalhesanimal/{idAnimal}/formularioadocao', 'AnimalController@CRUD', ['AuthMiddleware']);
Route::post('/login', 'UsuarioController@login');
Route::post('/loginadm', 'AdmController@login');
Route::post('/cadastro', 'UsuarioController@CRUD');

Route::post('/formulario/{acao}/{obj}/{id}', 'CriarEditarController@CRUD', ['PermissaoMiddleware', 'AdminMiddleware', 'AuthMiddleware']); // !!Tem q arrumar

Route::post('/perfil/{tipoUsuario}/{idUsuario}/e', 'PerfilController@index', ['AuthMiddleware']);
Route::post('/salvar/{obj}', 'FrmDevController@index', ['AuthMiddleware']);
=======
Route::get('/adocao/detalhesanimal/{idAnimal}/formularioadocao', 'FormularioAdocaoController@index');
Route::get('/adm/formulario/criar/{obj}', function($obj, $id = null) { include('app/views/adm/frmCadastarEditar.php');}, ['PermissaoMiddleware', 'AuthMiddleware']);
Route::get('/adm/formulario/editar/{obj}/{id}', function($obj, $id) { include('app/views/adm/frmCadastarEditar.php');}, ['PermissaoMiddleware', 'AuthMiddleware']);
Route::get('/adm/lista/{obj}', 'ListaDevController@index', ['PermissaoMiddleware', 'AuthMiddleware']);

// POST
Route::post('/adm/login', 'AdmController@login');
Route::post('/adocao/detalhesanimal/{idAnimal}/formularioadocao', 'FormularioAdocaoController@CRUD');
Route::post('/adm/formulario/{obj}/salvar', 'CriarEditarController@CRUD');