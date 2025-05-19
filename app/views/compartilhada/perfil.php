<?php
    $cssLink  = 'public/css/perfilAdm.css';
    include('app/componentes/default/topHTML.php');
?>

<div id="perfil">
    <div id="contentFotoMembro">
        <img id="fotoMembro" src="public/images/icons/iconUser.png" alt="icone foto do Usuário">
        <h1 id="nomeMembro">Betina de Souza Silva</h1>
        <div class="btnContainer">
            <button>Editar Perfil</button>
            <button>Excluir Conta</button>
        </div>
    </div>

    <div class="frmContainer">
        <?php 
            $mostrarBtn = false;
            require_once 'app/controllers/FrmDevController.php';
            $controller = new FrmDevController();
            $controller->loadForm('U',$frmName, $id);
        ?>
    </div>
</div>

<?php
    include('app/componentes/default/bottomHTML.php');
?>