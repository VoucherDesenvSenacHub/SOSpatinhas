<?php
    $cssLink  = '../../public/css/frmPreenchido.css';
    $tipo = 'Adm';
    include('../../public/componentes/default/topHTML.php');
    include('../../public/componentes/cardListas.php');
?>

<!-- Container para os cards -->
<div class="CardIcons-container">
    <a href="../../views/user/infoAnimal.php" class="card">
        <?php gerarCardIconsAnimal("../../public/images/Rectangle 71.png", "Rochele","Femea", "Cachorro", "2", ); ?>
    </a>
    <a href="../../views/compartilhada/perfilUsuarioAdm.php" class="card">
        <?php gerarCardIconsUser("../../public/images/icons/iconUser.png", "Betina de Souza Silva", "368.148.968-04
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
    <input type="text" name="pergunta1" placeholder="Pergunta 1:">

    <label for="pergunta2"></label>
    <input type="text" name="pergunta2" placeholder="Pergunta 2:">

    <label for="pergunta3"></label>
    <input type="text" name="pergunta3" placeholder="Pergunta 3:">

    <label for="pergunta4"></label>
    <input type="text" name="pergunta4" placeholder="Pergunta 4:">

    <label for="pergunta5"></label>
    <input type="text" name="pergunta5" placeholder="Pergunta 5:">

    <label for="pergunta6"></label>
    <input type="text" name="pergunta6" placeholder="Pergunta 6:">
</form>

<div class="btnContainer">
    <?php
        $idBtn = "btnAceitar";
        $funcaoClick = "redirecionar('listaFormulario.php')";
        $funcaoLoad = "mudarTamanho('btnAceitar')";
        $titulo = "Aceitar";
        include('../../public/componentes/componenteButton.php');

        $idBtn = "btnRecusar";
        $funcaoClick = "redirecionar('listaFormulario.php')";
        $funcaoLoad = "mudarTamanho('btnRecusar')";
        $titulo = "Recusar";
        include('../../public/componentes/componenteButton.php');
?>
</div>

<?php
    include('../../public/componentes/default/bottomHTML.php');
?>




