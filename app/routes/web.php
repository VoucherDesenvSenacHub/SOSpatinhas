<?php
// GET
Route::get('/', function() { include('app/views/user/paginaInicial.php');});
Route::get('/quemsomos', function() { include('app/views/compartilhada/quemSomos.php');});
Route::get('/eventos', function() { include('app/views/user/eventos.php');});
Route::get('/comoajudar', function() { include('app/views/compartilhada/comoAjudar.php');});
Route::get('/adm/login', function() { include('app/views/adm/loginADM.php');});
Route::get('/cadastro', function() { include('app/views/user/cadastroUsuario.php');});
Route::get('/eventos/detalhesevento/{idEvento}', 'EventoController@eventoDetalhado');
Route::get('/adocao', 'AnimalController@adocao');
Route::get('/adocao/detalhesanimal/{idAnimal}', 'AnimalController@detalhesAnimal');
Route::get('/141', function() { include('app/views/user/developers.php');});

Route::get('/adm/formulario/criar/{obj}', function($obj, $id = null) { include('app/views/adm/frmCadastarEditar.php');}, ['AuthMiddleware']);
Route::get('/adm/formulario/editar/{obj}/{id}', function($obj, $id) { include('app/views/adm/frmCadastarEditar.php');}, ['AuthMiddleware']);
Route::get('/adm/lista/{obj}', function($obj) { include('app/views/adm/lista.php');}, ['AuthMiddleware']);
Route::get('/teste', function() { include('app/views/teste.php');});

// POST ['PermissaoMiddleware', 'AuthMiddleware']
Route::post('/adm/login', 'AdmController@login');
Route::post('/adm/formulario/{obj}/salvar', function($obj){salvar($obj);});
// Route::post('/foto/pegarFt', 'FotoController@pegarFt');

// DELETE
Route::delete('/adm/deletar/{obj}/{id}', 'GridController@deletar', ['AuthMiddleware']);