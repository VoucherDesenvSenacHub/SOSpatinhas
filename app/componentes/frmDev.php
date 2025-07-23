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

<script>
    document.getElementById('frmCadastrarEditar').addEventListener('submit', async function (f) {
        f.preventDefault();

        if (selectedFiles.length === 0) {
            showModal('atencao', 'Atenção!', 'Você precisa selecionar pelo menos uma imagem.');
            return;
        }

        const form = f.target;
        const action = form.action;
        const formData = montaFormData(form.id);

        fetch(action, {
            method: 'POST',
            body: formData
        })
        .then(response => {
            if (response.ok) {
                showModal('sucesso', 'Sucesso!', 'Formulário enviado com sucesso!');
                form.reset();
                selectedFiles = []; 
                document.getElementById('filePreview').innerHTML = ''; 
            } else {
                showModal('erro', 'Erro!', 'Ocorreu um erro ao enviar o formulário.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });

    function montaFormData(idFrm) {
        const form = document.getElementById(idFrm);
        const formData = new FormData();

        const inputs = form.querySelectorAll('input, select, textarea');

        inputs.forEach(input => {
            const name = input.name;
            if (!name) return;

            switch (input.type) {
                case 'checkbox':
                    if (input.checked) {
                        formData.append(name, input.value);
                    }
                    break;
                case 'file':
                    if (selectedFiles && selectedFiles.length > 0) {
                        selectedFiles.forEach((file) => {
                            formData.append(name, file); 
                        });
                    } else {
                        Array.from(input.files).forEach((file) => {
                            formData.append(name, file);
                        });
                    }
                    break;
                default:
                    formData.set(name, input.value);
            }
        });

        console.log('FormData contents:');
        for (let pair of formData.entries()) {
            console.log(pair[0], pair[1]);
        }

        return formData;
    }
</script>
