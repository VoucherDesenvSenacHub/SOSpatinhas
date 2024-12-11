<?php
require_once "pagQS_banner.php";
require_once "../config/database.php";


$banco = new Banco(); 
$db = $banco->conectar();

$ban =  new PagQS_Banner($db);

// try{    
//     $ban->foto  = "test.png";


//     if ($ban-> create()){
//         echo "foi ";
//     }
//     else{
//         echo "foi nao";
//     }
// }

// catch(Exception $e){
//     echo "erro: ". $e->getMessage();

// }


// try {
//     // Se o método `read()` deve retornar um array ou lista de usuários
//     $result = $ban->read(); 
    
//     // Exibe o resultado de forma legível
//     if ($result) {
//         foreach ($result as $user) {
//             echo "ID: " . $user['id_pagQS_Banner'] . "<br>";
//             echo "foto: " . $user['foto'] . "<br>";
//         }
//     } else {
//         echo "nada encontrado.";
//     }
// } catch (Exception $e) {
//     echo "Erro: " . $e->getMessage();
// }

// try{
//     $atualizar = [
//         'foto' => 'rex.png'
//     ];
//     $ban-> id_pagQS_Banner = 1;
//     if($ban-> update($atualizar)){
//         echo "atualizou pae";
//     }
// }
// catch(Exception $e){
//     echo "erro: ". $e->getMessage();

// }

try{
    $ban ->id_pagQS_Banner = 2;
    if($ban->delete())
    echo "deletouuuu";
}
catch(Exception $e){
    echo "erro: ". $e->getMessage();

}

