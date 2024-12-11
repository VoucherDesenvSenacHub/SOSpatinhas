<?php
require_once "paginicio_carrosel.php";
require_once "../config/database.php";


$banco = new Banco(); 
$db = $banco->conectar();

$pgic =  new PagInicio_carrosel($db);

// try{
//     $pgic ->foto  = "test.png";
//     $pgic ->texto  = "text";
   


//     if ($pgic-> create()){
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
//     $result = $pgic->read(); 
    
//     // Exibe o resultado de forma legível
//     if ($result) {
//         foreach ($result as $user) {
//             echo "ID: " . $user['id_pagInicio_carrossel'] . "<br>";
//             echo "foto: " . $user['foto'] . "<br>";
//             echo "texto: " . $user['texto'] . "<br><br>";
//         }
//     } else {
//         echo "nada encontrado.";
//     }
// } catch (Exception $e) {
//     echo "Erro: " . $e->getMessage();
// }

// try{
//     $atualizar = [
//         'texto' => 'rex atualizado'
//     ];
//     $pgic-> id_pagInicio_carrossel = 1;
//     if($pgic-> update($atualizar)){
//         echo "atualizou pae";
//     }
// }
// catch(Exception $e){
//     echo "erro: ". $e->getMessage();

// }

try{
    $pgic ->id_pagInicio_carrossel = 1;
    if($pgic->delete())
    echo "deletouuuu";
}
catch(Exception $e){
    echo "erro: ". $e->getMessage();

}

