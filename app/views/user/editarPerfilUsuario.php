<?php
    $cssLink  = '/sospatinhas/public/css/editarPerfilUsuario.css';
    $tipo = 'User';
    include('../../componentes/default/topHTML.php');
?>

<form action="" class="frmEditarPerfil">
    <div class="conteudoFrm">
        <div class="col">
            <div class="upload-container">
                <div id="filePreview">
                    <img src="/sospatinhas/public/images/icons/profile-user.png" alt="" id="previewImg">
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
            <input type="text" name="nome" placeholder="Nome" required>
            <input type="date" name="dtNasc" placeholder="Data de Nascimento" required>
            <input type="text" name="telefone" placeholder="Telefone" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="cpf" placeholder="CPF" required>
            <input type="text" name="rg" placeholder="RG" required>
            <div class="btnContainer">
                <?php
                    $idBtn = "btnSalvar";
                    $funcaoClick = "adicionarComValidacao('Dasos salvos com sucesso!', 1, 'perfilUsuario.php')";
                    $funcaoLoad = "mudarTamanho('btnSalvar')";
                    $titulo = "Salvar";
                    include('../../componentes/componenteButton.php');

                    $idBtn = "btnCancelar";
                    $funcaoClick = "adicionarComValidacao('Dasos salvos com sucesso!', 1, 'perfilUsuario.php')";
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
</script>

<?php
    include('../../componentes/default/bottomHTML.php');
?>