<?php

    // if (!isset($_SESSION['taLogado']) || $_SESSION['taLogado'] !== true || $_SESSION['id'] !== 'Admin') {
    // echo '<script type="text/javascript">
    //         alert("Você precisa estar logado como administrador para acessar esta página.");
    //         window.location.href = "loginADM.php";
    //       </script>';
    // exit();
    // }

    $cssLink  = '../css/perfilAdm.css';
    $tipo = 'Adm';
    include('../templates/default/topHTML.php');
?>

<div id="coteudo">
    <div id="topConteudo">
        <div class="adm_foto">
            <img src="../images/icons/iconUserAdm.png" alt="Foto de perfil do administrador">
            <div id="infoAdm">
                <h1>Nome</h1>
                <p>ID administrador</p>
            </div>
        </div> 
    
        <div id="topBtns">
            <?php
                // btn Editar
                $funcaoClick = "redirecionar('editarPerfil-ADM.php')";
                $titulo = "Editar Perfil";
                $funcaoLoad = "mudarTamanho('354px', '64px', '30px')";
                include('../templates/componenteButton.php');
    
                
                //btn Sair
                $funcaoClick = "sair()";
                $titulo = "Sair";
                include('../templates/componenteButton.php');
            ?>
        </div>
    </div>
    
    <div class="buttons">
        <div class="col">
            <?php
                // btn Adoção
                $funcaoClick = "redirecionar('listaAdocao-ADM.php')";
                $titulo = "Adoção";
                include('../templates/componenteButton.php');
    
                // btn Eventos
                $funcaoClick = "redirecionar('listaEventosADM.php')";
                $titulo = "Eventos";
                include('../templates/componenteButton.php');
    
                // btn Arrecadação
                $funcaoClick = "redirecionar('listaArrecadacoesADM.php')";
                $titulo = "Arrecadação";
                include('../templates/componenteButton.php');
            ?>
        </div>
    
        <div class="col">
            <?php
                // btn Membros
                $funcaoClick = "redirecionar('listademembrosadm.php')";
                $titulo = "Membros";
                include('../templates/componenteButton.php');
    
                // btn Usuários
                $funcaoClick = "redirecionar('listaUsuariosADM.php')";
                $titulo = "Usuário";
                include('../templates/componenteButton.php');
    
                // btn Editar Formulário
                $funcaoClick = "redirecionar('formAdocaoEditavel.php')";
                $titulo = "Editar Formulário";
                include('../templates/componenteButton.php');
            ?>
        </div>
    </div>

</div>


<?php
    include('../templates/default/bottomHTML.php');
?>