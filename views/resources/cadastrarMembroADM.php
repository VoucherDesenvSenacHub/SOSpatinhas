<?php

    // if (!isset($_SESSION['taLogado']) || $_SESSION['taLogado'] !== true || $_SESSION['id'] !== 'Admin') {
    // echo '<script type="text/javascript">
    //         alert("Você precisa estar logado como administrador para acessar esta página.");
    //         window.location.href = "loginADM.php";
    //       </script>';
    // exit();
    // }

    $cssLink  = '../css/cadastrarMembroADM.css';
    $tipo = 'Adm';
    include('../templates/default/topHTML.php');
?>

<form action="" method="post" id="cadastrarMembro">      
    <div id="conteudoForm">
        <div id="col">
        <div class="upload-container">
            <div id="filePreview">
                <img src="..\images\userProfile.png" alt="" id="previewImg">
            </div>
            <div id="imgUpload">
                <input type="file" id="image" name="image[]" accept="image/*" hidden>
                <label for="image" id="imgLabel" class="upload-box">
                    <img src="..\images\btnAdicionar.png" alt="Upload Icon">
                </label>
            </div>
        </div>   
    </div>

        <form id="col">
            <input required class="inputPerfil" type="text" placeholder="  Nome ">
            <input required class="inputPerfil" type="text" placeholder="  E-mail  ">
            <input required class="inputPerfil" type="text" placeholder="  Telefone">
            <input required class="inputPerfil" type="text" placeholder="  Senha  ">
            <input required class="inputPerfil" type="text" placeholder="  Confirmar Senha  ">
            
            <div class="btnContainer">
                <?php
        $idBtn = "btnCadastrar";
        $funcaoClick = "adicionarComValidacao('Membro cadastrado com sucesso!')";
        $funcaoLoad = "mudarTamanho('btnCadastrar', '275px', '50px', '20px')";
        $titulo = "Cadastrar";
        include('../templates/componenteButton.php');
        
        $idBtn = "btnCancelar";
        $funcaoClick = "cancelarForm('frmCadastroAdocao','listaArrecadacoesADM.php')";
        $funcaoLoad = "mudarTamanho('btnCancelar', '275px', '50px', '20px')";
        $titulo = "Cancelar";
        include('../templates/componenteButton.php');
        ?>
        </form>
    </div>
    </div>

</>
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