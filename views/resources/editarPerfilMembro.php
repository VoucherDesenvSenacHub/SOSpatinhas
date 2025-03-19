<?php
  $cssLink  = '../css/editarPerfilMembro.css';
  $tipo = 'Adm';
  include('../templates/default/topHTML.php');
?>

<div id="contentEditarPerfil">
    <div id="divForm">
        <form id="formEditarPerfilMembro">
            <input class="inputPerfil" type="text" placeholder="  Nome ">
            <input class="inputPerfil" type="text" placeholder="  E-mail  ">
            <input class="inputPerfil" type="text" placeholder="  Número Telefone/Celular  ">
            <input class="inputPerfil" type="text" placeholder="  Senha  ">
        </form>
    </div>
    <div id="divButtons">
        <div id="editarFoto">
            <img id="fotoMembro" src="../images/fotoPerfilMembro.png" alt="icone foto do Membro">
            <button id="buttonEditarFoto">+</button>
        </div>
    <?php
        $funcaoClick = "adicionarComValidacao(ValidacaoAdicionar)";
        $funcaoLoad = "mudarTamanho('250px', '44px', '20px')";  //o primeiro valor é a largura, -- é opcional o segundo a altura e o terceiro o tamanho da fonte 
        $titulo = "Salvar";           
        include('../templates/componenteButton.php');
    ?>
    <?php
        $funcaoClick = "cancelarForm(nomeForm, linkRedirecionamento)";
        $funcaoLoad = "mudarTamanho('250px', '44px', '20px')";
        $titulo = "Cancelar";
        include('../templates/componenteButton.php');
    ?>
    </div>

</div>

<script>
    function adicionar(){
        if([...document.querySelectorAll("#formEditarPerfilMembro input")].every(input => input.value.trim() !== "")){
            alert("Update realizado com sucesso!")
            window.location.href = "listademembrosadm.php";
        }else{
            alert("Preencha todos os campos.")
        }
    }
</script>

<?php
    include('../templates/default/bottomHTML.php');
?>