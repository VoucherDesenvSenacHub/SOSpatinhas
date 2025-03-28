<?php

    // if (!isset($_SESSION['taLogado']) || $_SESSION['taLogado'] !== true || $_SESSION['id'] !== 'Admin') {
    // echo '<script type="text/javascript">
    //         alert("Você precisa estar logado como administrador para acessar esta página.");
    //         window.location.href = "loginADM.php";
    //       </script>';
    // exit();
    // }

    $cssLink  = '../css/perfilMembro.css';
    $tipo = 'Adm';
    include('../templates/default/topHTML.php');
?>

<div id="perfil">
    <div id="contentFotoMembro">
        <img id="fotoMembro" src="../images/fotoPerfilMembro.png" alt="icone foto do Membro">
        <p id="nomeMembro">Felipe Paes</p>
    </div>

    <div id="contentInfosMembro">
        <div class="contentItensPerfil">
            <img class="icones" src="../images/telefonePerfilMembro.png" alt="icone telefone">
            <div class="contentItens">
                <p class="titulos">Telefone</p>
                <p class="conteudoTitulos">+12 3456 7892</p>
            </div>
        </div>

        <div class="contentItensPerfil">
            <img class="icones" src="../images/emailPerfilMembro.png" alt="icone email">
            <div class="contentItens">
                <p class="titulos">E-mail</p>
                <p class="conteudoTitulos">example@gmail.com</p>
            </div>
        </div>

        <a href="editarPerfilMembro.php"><button id="buttonEditarPerfil">Editar Perfil</button></a> 
    </div>
</div>

<?php
    include('../templates/default/bottomHTML.php');
?>