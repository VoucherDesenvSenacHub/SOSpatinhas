<?php
require_once "usuario.php";
require_once "../config/database.php";


$banco = new Banco(); 
$db = $banco->conectar();

$usuario =  new Usuario($db);

// try{
//     $usuario ->nome  = "REX";
//     $usuario ->email  = "email@gmail.com";
//     $usuario ->senha  = "site123";
//     $usuario ->data_nasc  = "1990/03/03";
//     $usuario ->cpf  = 2332232;
//     $usuario ->rg  = 123345;
//     $usuario ->telefone  = 67994434;
//     $usuario ->foto  = "site.png";


//     if ($usuario-> create()){
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
//     $result = $usuario->read(); 
    
//     // Exibe o resultado de forma legível
//     if ($result) {
//         foreach ($result as $user) {
//             echo "ID: " . $user['id_usuario'] . "<br>";
//             echo "Nome: " . $user['nome'] . "<br>";
//             echo "Email: " . $user['email'] . "<br><br>";
//         }
//     } else {
//         echo "Nenhum usuário encontrado.";
//     }
// } catch (Exception $e) {
//     echo "Erro: " . $e->getMessage();
// }

// try{
//     $atualizar = [
//         'nome' => 'rex atualizado'
//     ];
//     $usuario-> id_usuario = 1;
//     if($usuario-> update($atualizar)){
//         echo "atualizou pae";
//     }
// }
// catch(Exception $e){
//     echo "erro: ". $e->getMessage();

// }

try{
    $usuario ->id = 1;
    if($usuario->delete())
    echo "deletouuuu";
}
catch(Exception $e){
    echo "erro: ". $e->getMessage();

}

