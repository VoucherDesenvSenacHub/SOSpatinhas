<?php
$cssLink  = '../../public/css/editarPerfilMembro.css';
  $tipo = 'Adm';
  include('../../componentes/default/topHTML.php');
?>

<form action="" method="post" id="frmEditarPerfilMembro">
    <div class="conteudoFrm">
        <div class="col">
            <div class="upload-container">
                <div id="filePreview">
                    <img src="../../../public/images/userProfile.png" alt="" id="previewImg">
                </div>
                <div id="imgUpload">
                    <input type="file" id="image" name="image[]" accept="image/*" hidden>
                    <label for="image" id="imgLabel" class="upload-box">
                        <img src="../../../public/images/btnEditar.png" alt="Upload Icon">
                    </label>
                </div>
            </div>   
        </div>
        

        <div class="col">
            <input type="text" name="nome" placeholder="Nome">
            <input type="text" name="email" placeholder="E-mail">
            <input type="text" name="telefone" placeholder="Número de Telefone/Celular">
            <input type="text" name="senha" placeholder="Senha">
            <div class = "btnContainer">
                <?php
                    //btn Salvar
                    $idBtn = "btnSalvar";
                    $funcaoClick = "adicionarComValidacao('Dados salvos com sucesso!', 1, 'perfilMembro.php')";
                    $funcaoLoad = "mudarTamanho('btnSalvar')";  
                    $titulo = "Salvar";           
                    include('../../componentes/componenteButton.php');
            
                    //btn Cancelar
                    $idBtn = "btnCancelar";
                    $funcaoClick = "cancelarForm(nomeForm, 1, 'perfilMembro.php')";
                    $funcaoLoad = "mudarTamanho('btnCancelar')";
                    $titulo = "Cancelar";
                    include('../../componentes/componenteButton.php');
                ?>
            </div>
        </div>
    </div>
</form>

<!-- <script>
    function adicionar(){
        if([...document.querySelectorAll("#formEditarPerfilMembro input")].every(input => input.value.trim() !== "")){
            alert("Update realizado com sucesso!")
            window.location.href = "listademembrosadm.php";
        }else{
            alert("Preencha todos os campos.")
        }
    }
</script> -->

<?php
    include('../../componentes/default/bottomHTML.php');
?>