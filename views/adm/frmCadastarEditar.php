<?php
    $cssLink  = '../../public/css/cadastrarAdocao.css';
    include('../../public/componentes/default/topHTML.php');
    $form = $_GET['form'] ?? null;
    $acao = $_GET['acao'] ?? 'C';
    $id = $_GET['id'] ?? null;
?>

<form action="<?= $form ?>Controller.php" method="POST" enctype="multipart/form-data" id="frmCadastroAdocao">
    <input type="hidden" name="form" value="<?= htmlspecialchars($form) ?>">
    <input type="hidden" name="action" value="<?= htmlspecialchars($action) ?>">
</form>

<script>
   
</script>

<?php
    include('../../public/componentes/default/bottomHTML.php');
?>
