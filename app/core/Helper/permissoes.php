<?php 

if(session_status() === PHP_SESSION_NONE) {
    session_start();
}

function verificarPermissao($permissaoNecessaria){
    if (!isset($_SESSION['taLogado']) || $_SESSION['id'] !== 'Admin') {
        header('Location: loginADM.php');
        exit();
    }
    $permissoesDoUsuario = isset($_SESSION['permissoes']) ? $_SESSION['permissoes'] : [];
    if(!in_array($permissaoNecessaria, $permissoesDoUsuario)) {
        header('Location: lista.php?permissao=negada');
        exit();
    }
}

?>