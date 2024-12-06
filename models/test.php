<?php
require_once "animal.php";
require_once "../config/database.php";


$banco = new Banco(); 
$db = $banco->conectar();

$animal =  new Animal($db);

try{
    $animal ->nome  = "True";
    $animal ->raca  = "t-rex";
    $animal ->descricao  = "um cachorro ai";
    $animal ->idade  = 19;
    $animal ->porte  = "grande";
    $animal ->sexo  = "macho";
    $animal ->foto  = "frue.png";
    


    if ($animal-> create()){
        echo "foi ";
    }
    else{
        echo "foi nao";
    }
}
catch(Exception $e){
    echo "erro: ". $e->getMessage();

}


// try{
//     $id_formulario_adocao = 1;
//     $r = $formAdocao->read();
//     var_dump($r);
// }
// catch(Exception $e){
//     echo "erro: ". $e->getMessage();

// }

// try{
//     $atualizarAnimal = [
//         'nome' => 'rex atualizado'
//     ];
//     $animal-> id_animal= 1;
//     if($animal-> update($atualizarAnimal)){
//         echo "atualizou pae";
//     }
// }
// catch(Exception $e){
//     echo "erro: ". $e->getMessage();

// }

// try{
//     $animal ->id_animal = 1;
//     if($animal->delete())
//     echo "deletouuuu";
// }
// catch(Exception $e){
//     echo "erro: ". $e->getMessage();

// }

