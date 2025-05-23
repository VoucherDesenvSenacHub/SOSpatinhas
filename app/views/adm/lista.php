<?php
    include("app/componentes/default/topHTML.php");
    require_once 'app/controllers/GridController.php';
    $controller = new GridController();
    $controller->mostraGrid($obj);
    include("app/componentes/default/bottomHTML.php");
?>