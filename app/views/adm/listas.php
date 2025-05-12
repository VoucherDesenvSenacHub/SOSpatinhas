<?php
  $cssLink  = '../../public/css/listaMembro.css';
  include('../../componentes/default/topHTML.php');
  $tipo = $_GET['tipo'] ?? null;
?>

<h1>Lista de <?= htmlspecialchars($tipo) ?></h1>

<div class="pesquisar">
    <img src="../../public/images/lupa_pesquisa.png" alt="Lupa de pesquisa" class="lupa">
    <input type="text" placeholder="Pesquisar">
</div>

<div class="lista" id="listaMembro">
    <?php
        
    ?>
    <div class="btnAddConteiner">
        <a href="cadastrarMembro.php"><button class="btnAdd">+</button></a>
    </div>
</div>

<?php
    include('../../componentes/default/bottomHTML.php');
?>