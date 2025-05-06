<?php

    // if (!isset($_SESSION['taLogado']) || $_SESSION['taLogado'] !== true || $_SESSION['id'] !== 'Admin') {
    // echo '<script type="text/javascript">
    //         alert("Você precisa estar logado como administrador para acessar esta página.");
    //         window.location.href = "loginADM.php";
    //       </script>';
    // exit();
    // }

  $cssLink  = '../../public/css/editarPerfil-ADM.css';
  $tipo = 'Adm';
  include('../../componentes/default/topHTML.php');
?>

<form action="" method="post" id="frmEditarPerfilADM">
    <div class="conteudoFrm">
        <div class="col">
            <div class="upload-container">
                <div id="filePreview">
                    <img src="../../public/images/userProfile.png" alt="" id="previewImg">
                </div>
                <div id="imgUpload">
                    <input type="file" id="image" name="image[]" accept="image/*" hidden>
                    <label for="image" id="imgLabel" class="upload-box">
                        <img src="../../public/images/btnAdicionar.png" alt="Upload Icon">
                    </label>
                </div>
            </div>   
        </div>
        

        <div class="col">
            <input type="text" name="nome" placeholder="Nome">
            <input type="text" name="cpf" placeholder="CPF">
            <input type="text" name="email" placeholder="E-mail">
            <input type="text" name="telefone" placeholder="Número de Telefone/Celular">
            <input type="text" name="senha" placeholder="Senha">
            <div class = "btnContainer">
                <?php
                    $idBtn = "btnSalvar";
                    $funcaoClick = "adicionarComValidacao('Dados salvos com sucesso!', 1, 'editarPerfil-ADM.php')";
                    $funcaoLoad = "mudarTamanho('btnSalvar')";  
                    $titulo = "Salvar";           
                    include('../../componentes/componenteButton.php');

                    $idBtn = "btnCancelar";
                    $funcaoClick = "cancelarForm(nomeForm, 1, 'PerfilADM.php')";
                    $funcaoLoad = "mudarTamanho('btnCancelar')";
                    $titulo = "Cancelar";
                    include('../../componentes/componenteButton.php');
                ?>
            </div>
        </div>
    </div>
</form>

<script>
    document.getElementById('image').addEventListener('change', function (event) {
        const file = event.target.files[0]; 
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                document.getElementById('previewImg').src = e.target.result;
            }
            reader.readAsDataURL(file);
        }
    });

    function resetERedirect(){
        document.getElementById('frmEditarPerfilADM').reset();
        window.location.href = "PerfilADM.php";
    }

</script>

<?php
    include('../../componentes/default/bottomHTML.php');
?>