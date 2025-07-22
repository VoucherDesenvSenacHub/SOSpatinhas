<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<form action="<?= "/SOSPatinhas/adm/formulario/".htmlspecialchars($frmName)."/salvar" ?>" method="POST" enctype="multipart/form-data" id="frmCadastrarEditar">

    <input type="hidden" name="ACAO" value="<?= htmlspecialchars($acao) ?>">
    <input type="hidden" name="<?= "ID_".strtoupper(htmlspecialchars($frmName)) ?>" value="<?= htmlspecialchars($id) ?>">
    
    <div class="frmContainer">
        <?php foreach ($fields as $field): ?>
            <?php switch ($field['TIPO']):
                case 'imgUpload':
                    include('app/componentes/imgUpload.php');
                    break;
                case 'perfilUpload':
                    //fazer um componente tipo imgUpload pra ft de perfil
                    break;
                    
                case 'checkbox': ?>
                    <div class="frmField">
                        <label class="label">
                            <input 
                                class="label__checkbox"
                                type="checkbox" 
                                id="<?= $field['NAME_FIELD'] ?>" 
                                name="<?= $field['NAME_FIELD'] ?>" 
                                <?= ($acao === 'U') ? 'value="' . htmlspecialchars($formData[$field['NAME_FIELD']] ?? '') . '"' : ''; ?>
                            >
                            <span class="label__text">
                                <span class="label__check">
                                    <i class="fa fa-check icon"></i>
                                </span>
                                <?= $field['LABEL'] ?>
                            </span>
                        </label>
                        <!-- <label for="<?= $field['NAME_FIELD'] ?>"><?= $field['LABEL'] ?></label> -->
                     </div>
                    <?php break; ?>
                <?php case 'select': ?>
                    <div class="frmField">
                        <div class="selectContainer">
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
                    </div>
                    <?php break; ?>
                <?php case 'textarea': ?>
                    <div class="frmField">
                        <textarea
                            class="form-input"
                            name="<?= $field['NAME_FIELD'] ?>"
                            id="<?= $field['NAME_FIELD'] ?>"
                            placeholder="<?= $field['LABEL'] ?>"
                            oninput="<?= $field['MASCARA'] ?>"
                            <?= $field['OBRIGATORIO'] ? 'required' : '' ?>
                        ><?= ($acao === 'U') ? htmlspecialchars($formData[$field['NAME_FIELD']] ?? '') : '' ?></textarea>
                        <label for="<?= $field['NAME_FIELD'] ?>" class="form-label"><?= $field['LABEL'] ?></label>
                    </div>
                    <?php break; ?>
                <?php default: ?>
                    <div class="frmField">
                        <input
                            class="form-input"
                            type="<?= $field['TIPO'] ?>"
                            name="<?= $field['NAME_FIELD'] ?>"
                            id="<?= $field['NAME_FIELD'] ?>"
                            placeholder="<?= $field['LABEL'] ?>"
                            oninput="<?= $field['MASCARA'] ?>"
                            <?= ($acao === 'U') ? 'value="' . htmlspecialchars($formData[$field['NAME_FIELD']] ?? '') . '"' : ''; ?>
                            <?= $field['OBRIGATORIO'] ? 'required' : '' ?>
                        >
                        <label for="<?= $field['NAME_FIELD'] ?>" class="form-label"><?= $field['LABEL'] ?></label>
                    </div>
                    <?php break; ?>
            <?php endswitch; ?>
        <?php endforeach; ?>
    </div>

    <div id="btn">
        
        <button type="submit" id="btnSalvar">Salvar</button>
        <button type="reset" id="btnCancelar">Cancelar</button>

    </div>

</form>