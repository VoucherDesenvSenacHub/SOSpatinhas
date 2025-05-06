<?php

    $cssLink  = '../../public/css/cadastrarMembro.css';
    $tipo = 'Adm';
    include('../../componentes/default/topHTML.php');
?>

<form action="" method="post" id="cadastrarMembro">      
    <div id="conteudoForm">
        <div id="colunaForm">
        <div class="uploadContainer">
            <div id="filePreview">
                <img src="../../public/images/userProfile.png" alt="" id="previewImg">
            </div>
            <div id="imgUpload">
                <input type="file" id="image" nome="image[]" accept="image/*" hidden>
                <label for="image" id="imgLabel" class="uploadBox">
                    <img src="../../public/images/btnAdicionar.png" alt="Upload Icon" class="mais">
                </label>
            </div>
        </div>   
    </div>

        <class id="colunaForm">
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
        include('../../componentes/componenteButton.php');
        
        $idBtn = "btnCancelar";
        $funcaoClick = "cancelarForm('frmCadastroAdocao','listaArrecadacoesADM.php')";
        $funcaoLoad = "mudarTamanho('btnCancelar', '275px', '50px', '20px')";
        $titulo = "Cancelar";
        include('../../componentes//componenteButton.php');
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
    include('../../componentes/default/bottomHTML.php');
?>