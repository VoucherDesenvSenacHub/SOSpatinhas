<?php

    session_start();

    if (!isset($_SESSION['taLogado']) || $_SESSION['taLogado'] !== true || $_SESSION['id'] !== 'Admin') {
    echo '<script type="text/javascript">
            alert("Você precisa estar logado como administrador para acessar esta página.");
            window.location.href = "loginADM.php";
          </script>';
    exit();
    }

    $cssLink  = '../css/cadastrarMembroADM.css';
    $tipo = 'Adm';
    include('../templates/default/topHTML.php');
?>

<div id="contentEditarPerfil">
    <div id="divForm">
        <form id="formEditarPerfilMembro">
            <input required class="inputPerfil" type="text" placeholder="  Nome ">
            <input required class="inputPerfil" type="text" placeholder="  E-mail  ">
            <input required class="inputPerfil" type="text" placeholder="  Número Telefone/Celular  ">
            <input required class="inputPerfil" type="text" placeholder="  Senha  ">
            <input required class="inputPerfil" type="text" placeholder="  Confirmar Senha  ">
        </form>
    </div>
    <div id="divButtons">
        <div id="editarFoto">
            <img id="fotoMembro" src="../images/fotoPerfilMembro.png" alt="icone foto do Membro">
            <button id="buttonEditarFoto">+</button>
        </div>

        <a href="#"><button class="buttonsPerfil" id="buttonAdicionar" onclick="adicionar()">Adicionar</button></a>
        <a href="listademembrosadm.php"><button class="buttonsPerfil" id="buttonCancelar">Cancelar</button></a>
    </div>

</div>
<script>
    function adicionar(){
        if([...document.querySelectorAll("input")].every(input => input.value.trim() !== "")){
            alert("Arrecadação cadastrada com sucesso!")
            
        }else{
            alert("Preencha todos os campos.")
        }
    }
</script>
    
<?php
    include('../templates/default/bottomHTML.php');
?>