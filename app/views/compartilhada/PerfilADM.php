<?php
    $cssLink  = '../../public/css/perfilAdm.css';
    $tipo = 'Adm';
    include('../../componentes/default/topHTML.php');
?>

<div id="conteudo">
    <div id="topConteudo">
        <div class="adm_foto">
            <img src="../../public/images/iconeADM.png" alt="Foto de perfil do administrador">
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
                include('../../componentes/componenteButton.php');
    
                
                //btn Sair
                $funcaoClick = "sair()";
                $titulo = "Sair";
                include('../../componentes/componenteButton.php');
            ?>
        </div>
    </div>
    
    <div class="buttons">
        <div class="col">
            <?php
                // btn Adoção
                $funcaoClick = "redirecionar('listaAdocao-ADM.php')";
                $titulo = "Adoção";
                include('../../componentes/componenteButton.php');
    
                // btn Eventos
                $funcaoClick = "redirecionar('listaEventosADM.php')";
                $titulo = "Eventos";
                include('../../componentes/componenteButton.php');
    
                // btn Arrecadação
                $funcaoClick = "redirecionar('listaArrecadacoesADM.php')";
                $titulo = "Arrecadação";
                include('../../componentes/componenteButton.php');
            ?>
        </div>
    
        <div class="col">
            <?php
                // btn Membros
                $funcaoClick = "redirecionar('listademembrosadm.php')";
                $titulo = "Membros";
                include('../../componentes/componenteButton.php');
    
                // btn Usuários
                $funcaoClick = "redirecionar('listaUsuariosADM.php')";
                $titulo = "Usuário";
                include('../../componentes/componenteButton.php');
    
                // btn Editar Formulário
                $funcaoClick = "redirecionar('formAdocaoEditavel.php')";
                $titulo = "Editar Formulário";
                include('../../componentes/componenteButton.php');
            ?>
        </div>
    </div>

</div>


<?php
    include('../../componentes/default/bottomHTML.php');
?>