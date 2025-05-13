<?php
  $cssLink  = '../../public/css/listaMembro.css';
  include('../../componentes/default/topHTML.php');
  include('../../componentes/cardListas.php'); 
  include('../../controller/ListaDevController.php');

  $tipo = $_GET['tipo'] ?? null;

  $controller = new ListaDevController();
  $dados = $controller->pegarDados($tipo);
?>

<h1>Lista de <?= htmlspecialchars($tipo) ?></h1>

<div class="pesquisar">
    <img src="../../public/images/lupa_pesquisa.png" alt="Lupa de pesquisa" class="lupa">
    <input type="text" placeholder="Pesquisar">
</div>

<div class="lista" id="listaMembro">
    <?php
        if ($tipo === 'formulario') {
            foreach ($dados as $formulario) {
                gerarCardFormulario(
                    $formulario['tituloFrm'],
                    $formulario['imagemAnimal'],
                    $formulario['nomeAnimal'],
                    $formulario['imagemUser'],
                    $formulario['nomeUser']
                );
            }
        } elseif ($tipo === 'membro') {
            foreach ($dados as $membro) {
                gerarCard($membro['nome'], $membro['imagem']);
            }
        } else {
            echo "<p>Tipo inválido ou nenhum tipo especificado na URL.</p>";
        }
    ?>
    <div class="btnAddConteiner">
        <a href="cadastrarMembro.php"><button class="btnAdd">+</button></a>
    </div>
</div>

<?php
    include('../../componentes/default/bottomHTML.php');
?>