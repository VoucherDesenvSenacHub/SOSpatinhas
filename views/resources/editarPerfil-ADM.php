<?php

    session_start();

    if (!isset($_SESSION['taLogado']) || $_SESSION['taLogado'] !== true || $_SESSION['id'] !== 'Admin') {
    echo '<script type="text/javascript">
            alert("Você precisa estar logado como administrador para acessar esta página.");
            window.location.href = "loginADM.php";
          </script>';
    exit();
    }

  $cssLink  = '../css/editarPerfil-ADM.css';
  $tipo = 'Adm';
  include('../templates/default/topHTML.php');
?>

<form action="" method="post" id="frmEditarPerfilADM">
    <div class="col">
        <div id="btn-photo">
            <div class="upload-container">
                <div id="imgUpload">
                    <input type="file" id="image" name="image[]" accept="image/*" hidden>
                    <label for="image" id="imgLabel" class="upload-box">
                        <img src="..\images\btnAdicionar.png" alt="Upload Icon">
                    </label>
                </div>
                <div id="filePreview">
                    <img src="..\images\userProfile.png" alt="" id="previewImg">
                </div>
            </div>
        </div>
    </div>
    <div class="conteudo">
        <div class="col">
            <input type="text" name="nome" placeholder="Nome">
            <input type="text" name="cpf" placeholder="CPF">
            <input type="text" name="email" placeholder="E-mail">
            <input type="text" name="telefone" placeholder="Número de Telefone/Celular">
            <input type="text" name="senha" placeholder="Senha">
        </div>
        
        <div>
        <?php
        $funcaoClick = "adicionarComValidacao(ValidacaoAdicionar)";
        $funcaoLoad = "mudarTamanho('100%', '44px', '20px')";  
        $titulo = "Salvar";           
        include('../templates/componenteButton.php');
    ?>
    <?php
        $funcaoClick = "cancelarForm(nomeForm, linkRedirecionamento)";
        $funcaoLoad = "mudarTamanho('100%', '44px', '20px')";
        $titulo = "Cancelar";
        include('../templates/componenteButton.php');
    ?>
        </div>
    </div>

</form>

<script>
    function adicionar(){
        if([...document.querySelectorAll("#frmEditarPerfilADM input")].every(input => input.value.trim() !== "")){
            alert("Update realizado com sucesso!")
            window.location.href = "PerfilADM.php";
        }else{
            alert("Preencha todos os campos.")
        }
    }

    document.getElementById('image').addEventListener('change', function (event) {
        const file = event.target.files[0]; 
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                document.getElementById('previewImg').src = e.target.result; // Display the image
            }
            reader.readAsDataURL(file); // Convert file to base64
        }
    });

    function resetERedirect(){
        document.getElementById('frmEditarPerfilADM').reset();
        window.location.href = "PerfilADM.php";
    }
</script>

<?php
    include('../templates/default/bottomHTML.php');
?>