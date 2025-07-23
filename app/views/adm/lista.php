<?php
    require_once 'app/controllers/GridController.php';
    $cssLink  = '/sospatinhas/public/css/lista.css';
    include("app/componentes/default/topHTML.php");
?>

<div class="conteudo-principal">
    <div class="cabecalho">
        <h1>Painel <span><?= htmlspecialchars(ucfirst(strtolower($obj))) ?></span></h1>
    </div>
    
    <?php
        $controller = new GridController();
        $controller->mostraGrid(htmlspecialchars($obj));
    ?>
</div>

    
<?php include("app/componentes/default/bottomHTML.php");?>