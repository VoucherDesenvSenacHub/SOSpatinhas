<?php
    $cssLink  = '../css/perfilAdm.css';
    $tipo = 'Adm';
    include('../templates/default/topHTML.php');
?>

<div class="adm_foto">
    <img src="../images/foto_perfil.png" alt="Foto de perfil do administrador">
    <h1>Nome</h1>
    <p>ID administrador</p>
</div> 

<button>
    <a href="editarPerfil-ADM.php">Editar Perfil</a>
</button>

<div class="buttons">

    

    <button>
        <a href="listaAdocao-ADM.php">Adoção</a>
    </button>
    <button>
        <a href="listaEventosADM.php">Eventos</a>
    </button>
    <button>
        <a href="listaArrecadacoesADM.php">Arrecadação</a>
    </button>
    <button>
        <a href="listademembrosadm.php">Membros</a>
    </button>
    <button>
        <a href="listaUsuariosADM.php">Usuário</a>
    </button>
    <button>
        <a href="formAdocaoEditavel.php">Editar Formulário</a>
    </button>
</div>

<?php
    include('../templates/default/bottomHTML.php');
?>