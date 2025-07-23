<?php
  $cssLink  = '/sospatinhas/public/css/editarAdocao.css';
  $tipo = 'Adm';
  include('app/componentes/default/topHTML.php');
?>

<form action="" method="POST" enctype="multipart/form-data" id="form-cadastro-adocao">
    <div class="form-container">
        <div class="form-column col-left">
            <input type="text" name="name" placeholder="Nome do Animal" required>
            <input type="text" name="tipo" placeholder="Tipo do Animal" required>
            <input type="text" name="raca" placeholder="Raça" required>

            <div class="select-container">
                <select name="porte" id="porte-select" required>
                    <option value="" selected disabled hidden>Porte</option>
                    <option value="Pequeno">Pequeno</option>
                    <option value="Médio">Médio</option>
                    <option value="Grande">Grande</option>
                </select>
            </div>

            <div class="select-container">
                <select name="idade" id="idade-select" required>
                    <option value="" selected disabled hidden>Idade</option>
                    <option value="0-1">Menos de 1 ano</option>
                    <option value="1-5">1 a 5 anos</option>
                    <option value="6-10">6 a 10 anos</option>
                    <option value="10+">Mais de 10 anos</option>
                </select>
            </div>

            <textarea name="descricao" placeholder="Descrição" required></textarea>
            <input type="text" name="tags" placeholder="Tags" required>
        </div>

        <div class="form-column col-right">
            <div class="upload-container">
                <div class="gender-selection">
                    <label class="label-genero">Gênero:</label>
                    <input type="radio" name="sexo" value="Fêmea" id="sexo-femea" required>
                    <label for="sexo-femea">Fêmea</label>
                    <input type="radio" name="sexo" value="Macho" id="sexo-macho" required>
                    <label for="sexo-macho">Macho</label>
                </div>

                <input type="file" id="input-imagem" name="image[]" accept="image/*" multiple hidden>
                <label for="input-imagem" class="upload-box" id="label-upload-imagem">
                    <img src='../../public/images/cadastroAdocao-ADM/grampoBranco.png' alt="Upload Icon">
                    <p>Enviar fotos</p>
                </label>
                <div id="preview-arquivos"></div>
                <p class="info-arquivo">Enviar até 10 arquivos: JPG, PNG, JPEG*</p>
            </div>

            <div class="btn-container">
                <?php
                    $idBtn = "btn-cadastrar";
                    $funcaoClick = "adicionarComValidacao('Animal editado com sucesso!', 1, 'listaAdocao-ADM.php')";
                    $funcaoLoad = "mudarTamanho('btn-cadastrar', '275px', '50px', '20px')";
                    $titulo = "Salvar";
                    include('../../componentes/componenteButton.php');

                    $idBtn = "btn-cancelar";
                    $funcaoClick = "cancelarForm('form-cadastro-adocao', 'listaAdocao-ADM.php')";
                    $funcaoLoad = "mudarTamanho('btn-cancelar', '275px', '50px', '20px')";
                    $titulo = "Cancelar";
                    include('../../componentes/componenteButton.php');
                ?>
            </div>
        </div>
    </div>
</form>

<script>
    document.getElementById('input-imagem').addEventListener('change', function (event) {
        const preview = document.getElementById('preview-arquivos');
        preview.innerHTML = "";

        let files = Array.from(event.target.files);

        if (files.length > 10) {
            alert("Você só pode enviar até 10 arquivos.");
            this.value = "";
            return;
        }

        files.forEach((file, index) => {
            const fileItem = document.createElement('div');
            fileItem.classList.add('file-item');
            fileItem.innerHTML = `
                <span class="file-name" title="${file.name}">${file.name}</span>
                <button class="remove-file" data-index="${index}">X</button>
            `;
            preview.appendChild(fileItem);

            fileItem.querySelector('.remove-file').addEventListener('click', () => {
                document.getElementById('input-imagem').value = "";
                fileItem.remove();
            });
        });

        preview.classList.toggle('two-column', files.length > 5);
    });

    function resetERedirect() {
        document.getElementById('form-cadastro-adocao').reset();
        window.location.href = "listaAdocao-ADM.php";
    }
</script>

<?php
    include('../../componentes/default/bottomHTML.php');
?>
