<?php
Route::get('/', function() { include('app/views/user/paginaInicio.php'); });
Route::get('/quemsomos', function() { include('app/views/user/quemSomos.php'); });
Route::get('/eventos', function() { include('app/views/user/eventos.php'); });
Route::get('/eventos/detalhesevento/{idEvento}', 'EventoController@index');
Route::get('/eventos/arrecadacao/{idArrecadacao}', 'ArrecadacaoController@index');
Route::get('/adocao', 'AnimalController@adocao');
Route::get('/adocao/detalhesanimal/{idAnimal}', 'AnimalController@detalhesAnimal');
Route::get('/adocao/detalhesanimal/{idAnimal}/formularioadocao', 'FormularioAdocaoController@index', ['User', 'Admin']);
Route::get('/comoajudar', function() { include('app/views/user/comoAjudar.php'); });
Route::get('/login', function() { include('app/views/user/login.php'); });
Route::get('/loginadm', function() { include('app/views/user/loginADM.php'); });
Route::get('/cadastro', function() { include('app/views/user/cadastroUsuario.php'); });
Route::get('/login/esquecisenha', function() { include('app/views/user/esqueciSenha.php'); });
Route::get('/login/esquecisenha/confirmacaoemail', function() { include('app/views/user/confirmacaoEmail.php'); });
Route::get('/novasenha', function() { include('app/views/user/novaSenha.php'); });
Route::get('/perfil/{tipoUsuario}/{idUsuario}', 'PerfilController@index', ['User', 'Admin'], ['AuthMiddleware']);

Route::get('/Formulario/{acao}/{obj}/{id}', 'CriarEditarController@index', ['? + obj']);
Route::post('/Formulario/{acao}/{obj}/{id}', 'FormularioDevController@index', ['? + obj']); // !!Tem q arrumar

Route::get('/Lista/{obj}', 'ListaDevController@index', ['lista + obj']);
Route::post('/Lista/{obj}', 'ListaDevController@index', ['lista + obj']); // !!Tem q arrumar
