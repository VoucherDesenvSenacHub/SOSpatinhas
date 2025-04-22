<?php
    require_once '../../models/formularioDev.php';
    $cssLink  = '../../public/css/cadastrarAdocao.css';
    include('../../public/componentes/default/topHTML.php');
    $form = $_GET['form'] ?? null;
    $acao = 'E';
    $id = $_GET['id'] ?? null;
    $model = new FormularioDev();
    $fields = $model->pegaCampos("ANIMAL");
    $formData = $model->pegaCamposComResultado("ANIMAL", 1);
?>

<form action="<?= $form ?>Controller.php" method="POST" enctype="multipart/form-data" id="frmCadastroAdocao">
    <input type="hidden" name="acao" value="<?= htmlspecialchars($acao) ?>">

    <?php foreach ($fields as $field): ?>
        <?php switch ($field['TIPO']):
            case 'imgUpload':
                include('../../public/componentes/imgUpload.php');
                break;
            case 'perfilUpload':
                //fazer um componente do imgUpload pra ft de perfil
                break;
            default: 
            ?>
                <input
                    type="<?= $field['TIPO'] ?>"
                    name="<?= $field['NAME'] ?>"
                    id="<?= $field['NAME'] ?>"
                    placeholder="<?= $field['PLACEHOLDER'] ?>"
                    <?= ($acao === 'E') ? 'value="' . htmlspecialchars($formData[$field['NAME']] ?? '') . '"' : ''; ?>
                    <?= $field['OBRIGATORIO'] ? 'required' : '' ?>
                >
                <?php break; ?>
        <?php endswitch; ?>
    <?php endforeach; ?>

    <button type="submit">Salvar</button>
</form>

<?php
    include('../../public/componentes/default/bottomHTML.php');
?>
