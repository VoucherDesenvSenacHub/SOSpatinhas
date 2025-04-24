<?php
    require_once '../../models/formularioDevModel.php';
    $cssLink  = '../../public/css/default.css';
    include('../../componentes/default/topHTML.php');
    $form = 'Animal';
    $acao = 'C';
    $id = $_GET['id'] ?? null;
    $tabela = strtoupper($form);

    $model = new FormularioDev();
    $fields = $model->pegaCampos("ANIMAL");
    $formData = $model->pegaCamposComResultado("ANIMAL", 1);
?>

<form action="../../controllers/AnimalController.php" method="POST" enctype="multipart/form-data" id="frmCadastrarEditar">
    <input type="hidden" name="ACAO" value="<?= htmlspecialchars($acao) ?>">
    <input type="hidden" name="ID" value="<?= htmlspecialchars($id) ?>">
    
    <div class="frmContainer">
        <?php foreach ($fields as $field): ?>
            <?php switch ($field['TIPO']):
                case 'imgUpload':
                    include('../../componentes/imgUpload.php');
                    break;
                case 'perfilUpload':
                    //fazer um componente tipo imgUpload pra ft de perfil
                    break;
                case 'checkbox': ?>
                    <div class="frmField">
                        <input 
                            type="checkbox" 
                            id="<?= $field['NAME_FIELD'] ?>" 
                            name="<?= $field['NAME_FIELD'] ?>" 
                            <?= ($acao === 'E') ? 'value="' . htmlspecialchars($formData[$field['NAME_FIELD']] ?? '') . '"' : ''; ?>
                        >
                        <label for="<?= $field['NAME_FIELD'] ?>"><?= $field['LABEL'] ?></label>
                    </div>
                    <?php break; ?>
                <?php case 'select': ?>
                    <div class="frmField">
                        <label for="<?= $field['NAME_FIELD'] ?>"><?= $field['LABEL'] ?></label>
                        <select name="<?= $field['NAME_FIELD'] ?>" id="<?= $field['NAME_FIELD'] ?>" <?= $field['OBRIGATORIO'] ? 'required' : '' ?>>
                            <option value="">Selecionar</option>
                            <?php 
                                $options = explode(",", $field['OPTIONS_SELECT']);
                                foreach ($options as $option):
                                    $selected = (isset($formData[$field['NAME_FIELD']]) && $formData[$field['NAME_FIELD']] === trim($option)) ? 'selected' : '';
                            ?>
                                    <option value="<?= trim($option) ?>" <?= $selected ?>>
                                        <?= htmlspecialchars(trim($option)) ?>
                                    </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <?php break; ?>
                <?php case 'textarea': ?>
                    <div class="frmField">
                        <label for="<?= $field['NAME_FIELD'] ?>"><?= $field['LABEL'] ?></label>
                        <textarea
                            name="<?= $field['NAME_FIELD'] ?>"
                            id="<?= $field['NAME_FIELD'] ?>"
                            placeholder="<?= $field['LABEL'] ?>"
                            <?= ($acao === 'E') ? 'value="' . htmlspecialchars($formData[$field['NAME_FIELD']] ?? '') . '"' : ''; ?>
                            <?= $field['OBRIGATORIO'] ? 'required' : '' ?>
                        ></textarea>
                    </div>
                    <?php break; ?>
                <?php default: ?>
                    <div class="frmField">
                        <label for="<?= $field['NAME_FIELD'] ?>"><?= $field['LABEL'] ?></label>
                        <input
                            type="<?= $field['TIPO'] ?>"
                            name="<?= $field['NAME_FIELD'] ?>"
                            id="<?= $field['NAME_FIELD'] ?>"
                            placeholder="<?= $field['LABEL'] ?>"
                            <?= ($acao === 'E') ? 'value="' . htmlspecialchars($formData[$field['NAME_FIELD']] ?? '') . '"' : ''; ?>
                            <?= $field['OBRIGATORIO'] ? 'required' : '' ?>
                        >
                    </div>
                    <?php break; ?>
            <?php endswitch; ?>
        <?php endforeach; ?>
    </div>

    <button type="submit">Salvar</button>
    <button type="reset">Cancelar</button>
</form>

<?php
    include('../../componentes/default/bottomHTML.php');
?>
