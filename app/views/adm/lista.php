<?php

    session_start();
    include("app/componentes/default/topHTML.php");
    require_once 'app/controllers/GridController.php';
    $controller = new GridController();
    $controller->mostraGrid(htmlspecialchars($obj));
    include("app/componentes/default/bottomHTML.php");

    if (!isset($_GET['permissao']) && $_GET['permissao'] === 'negada') {
        $notifType = 'error';
        $notifTitle = 'Acesso Negado';
        $notifMessage = 'Você não tem permissão para acessar esta página.';

        require_once '../../componentes/notifModal.php';
    }
?>