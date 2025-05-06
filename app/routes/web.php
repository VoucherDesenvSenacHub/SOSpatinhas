<?php
//      USER
Route::get('/PaginaInicio', function() { include('../views/user/paginaInicio.php'); });
Route::get('/QuemSomos', function() { include('../views/user/quemSomos.php'); });
Route::get('/Eventos', 'EventosController@index');
Route::get('/Eventos/DetalhesEvento/{idEvento}', 'DetalhesEventoController@index');
Route::get('/Eventos/Arrecadacao/{idArrecadacao}', 'ArrecadacaoController@index');
Route::get('/Adocao', 'AnimalController@adocao');
Route::get('/Adocao/DetalhesAnimal/{idAnimal}', 'AnimalController@detalhesAnimal');
Route::get('/Adocao/DetalhesAnimal/{idAnimal}/FormularioAdocao', 'AnimalController@formularioAdocao');
Route::get('/ComoAjudar', function() { include('../views/user/comoAjudar.php'); });
Route::get('/Login', function() { include('../views/user/login.php'); });
Route::get('/LoginAdm', function() { include('../views/user/loginADM.php'); });
Route::get('/Cadastro', function() { include('../views/user/cadastroUsuario.php'); });
Route::get('/Login/EsqueciSenha', function() { include('../views/user/esqueciSenha.php'); });
Route::get('/Login/EsqueciSenha/ConfirmacaoEmail', function() { include('../views/user/confirmacaoEmail.php'); });
Route::get('/NovaSenha', function() { include('../views/user/novaSenha.php'); });
Route::get('/Perfil/{idUsuario}', 'PerfilController@index', ['User', 'Admin']);

//      ADM
