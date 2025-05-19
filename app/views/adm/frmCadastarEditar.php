<?php
    $cssLink  = 'public/css/default.css';
    include('app/componentes/default/topHTML.php');

    require_once 'app/controllers/FrmDevController.php';
    $controller = new FrmDevController();
    $controller->loadForm($id != null ? 'U' : 'C', $obj, $id ?? null);

    include('app/componentes/default/bottomHTML.php');
?>
