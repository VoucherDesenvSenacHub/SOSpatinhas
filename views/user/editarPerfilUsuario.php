<?php
    $cssLink  = 'editarPerfilUsuario.css';
    $tipo = 'User';
    include('../../../componentes/default/topHTML.php');
?>

<form action="" class="frmEditarPerfil">
    <div class="conteudoFrm">
        <div class="col">
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
    
    
        <div class="col">
            <input type="text" name="nome" placeholder="Nome" required>
            <input type="date" name="dtNasc" placeholder="Data de Nascimento" required>
            <input type="text" name="telefone" placeholder="Telefone" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="cpf" placeholder="CPF" required>
            <input type="text" name="rg" placeholder="RG" required>
            <div class="btnContainer">
                <?php
                    // btn Salvar
                    $idBtn = "btnSalvar";
                    $funcaoClick = "adicionarComValidacao('Dasos salvos com sucesso!', 1, 'perfilUsuario.php')";
                    $funcaoLoad = "mudarTamanho('btnSalvar')";
                    $titulo = "Salvar";
                    include('../templates/componenteButton.php');

                    // btn Cancelar
                    $idBtn = "btnCancelar";
                    $funcaoClick = "adicionarComValidacao('Dasos salvos com sucesso!', 1, 'perfilUsuario.php')";
                    $funcaoLoad = "mudarTamanho('btnCancelar')";
                    $titulo = "Cancelar";
                    include('../templates/componenteButton.php');
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
                document.getElementById('previewImg').src = e.target.result; // Display the image
            }
            reader.readAsDataURL(file); // Convert file to base64
        }
    });
</script>

<?php
    include('../../../componentes/default/bottomHTML.php');
?>