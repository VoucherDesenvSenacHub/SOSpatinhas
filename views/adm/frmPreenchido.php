<?php
    $cssLink  = '../css/formulario.css';
    $tipo = 'Adm';
    include('../../../componentes/default/topHTML.php');
    include('../templates/cardListas.php');
?>

<!-- Container para os cards -->
<div class="CardIcons-container">
    <a href="../resources/informacaoAnimal.php" class="card">
        <?php gerarCardIconsAnimal("../images/Rectangle 71.png", "Rochele","Femea", "Cachorro", "2", ); ?>
    </a>
    <a href="../resources/perfilUsuarioAdm.php" class="card">
        <?php gerarCardIconsUser("../images/icons/iconUser.png", "Betina de Souza Silva", "368.148.968-04
", "67 372422124",true); ?>
    </a>
</div>

<form>
    <input type="text" name="nome" placeholder="Nome Completo*">

    <div class="divMetade">
        <input type="text" name="cpf" placeholder="CPF*">
        <input type="text" name="rg" placeholder="RG*">
    </div>
    <div class="divMetade">
        <input type="email" name="email" placeholder="E-mail*">
        <input type="date" name="data_nascimento" placeholder="Data de Nascimento*">
    </div>
    <div class="divMetade">
        <input id="inputddd" type="text" name="ddd" placeholder="DDD*">
        <input type="text" name="telefone" placeholder="Telefone*">
    </div>
    <div class="divMetade">
        <input type="text" name="cidade" placeholder="Cidade:">
        <input id="inputuf" type="text" name="uf" placeholder="UF*">
    </div>
    <div class="divMetade">
        <input type="text" name="rua" placeholder="Rua:">
        <input id="inputnum" type="text" name="number" placeholder="Número:">
    </div>
    <div>
        <input type="text" name="bairro" placeholder="Bairro:">
        <input type="text" name="complemento" placeholder="Complemento:">
    </div>

    <label for="pergunta1"></label>
    <input type="text" name="pergunta1" placeholder="Pergunta1:">

    <label for="pergunta2"></label>
    <input type="text" name="pergunta2" placeholder="Pergunta2:">

    <label for="pergunta3"></label>
    <input type="text" name="pergunta3" placeholder="Pergunta3:">

    <label for="pergunta4"></label>
    <input type="text" name="pergunta4" placeholder="Pergunta4:">

    <label for="pergunta5"></label>
    <input type="text" name="pergunta5" placeholder="Pergunta5:">

    <label for="pergunta6"></label>
    <input type="text" name="pergunta6" placeholder="Pergunta6:">
</form>

<div class="btnContainer">
    <?php
        $idBtn = "btnAceitar";
        $funcaoClick = "redirecionar('listaFormulario.php')";
        $funcaoLoad = "mudarTamanho('btnAceitar')";
        $titulo = "Aceitar";
        include('../templates/componenteButton.php');

        $idBtn = "btnRecusar";
        $funcaoClick = "redirecionar('listaFormulario.php')";
        $funcaoLoad = "mudarTamanho('btnRecusar')";
        $titulo = "Recusar";
        include('../templates/componenteButton.php');
?>
</div>

<?php
    include('../templates/default/bottomHTML.php');
?>




