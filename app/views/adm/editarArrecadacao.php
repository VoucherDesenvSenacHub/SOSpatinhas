<?php
  $cssLink  = '../../public/css/editarArrecadacao.css';
  $tipo = 'Adm';
  include('../../componentes/default/topHTML.php');
?>

<form action="" method="POST" enctype="multipart/form-data" id="frmEditarArrecadacao">
    <div class="conteudoForm">
        <div class="col1">
            <input type="text" name="titulo" placeholder="Titulo da Arrecadação" required>
            <input type="text" name="nameAnimal" placeholder="Nome do Animal" required>
            <textarea name="descricao" placeholder="Descrição" required></textarea>
            <input type="text" name="nameUser" placeholder="Nome do Usuário" required>
            <input type="text" name="valorInicio" placeholder="Valor da Arrecadação" required>
            <input type="text" name="valorAtual" placeholder="Valor Arrecadado" required>
        </div>

        <div class="col2">
            <input type="text" name="nmConta" placeholder="Nome da Conta" required>
            <input type="text" name="nuConta" placeholder="Número da Conta" required>
            <input type="text" name="nuAgencia" placeholder="Número da Agência" required>
            <div class="QRCode-container">
                <input type="file" name="qrCodePix" id="qrCodePix" onchange="updateFileName()" />
                <label for="qrCodePix" id="qrCodeLabel">Enviar QR Code</label>
                <p id="qrCodeArquivo">Nenhum arquivo selecionado</p>
            </div>
            <div class="upload-container">
                <input type="file" id="image" name="image[]" accept="image/*" multiple hidden>
                <label for="image" id="imgLabel" class="upload-box">
                    <img src="../../public/images/cadastroAdocao-ADM/grampoBranco.png" alt="Upload Icon">
                    <p>Enviar fotos</p>
                </label>
                <div id="filePreview"></div>
                <p class="file-info">Enviar até 10 arquivos: JPG, PNG, JPEG*</p>
            </div>  
            <?php
            $idBtn = "btnAdicionar";
            $funcaoClick = "adicionarComValidacao('Arrecadação editada com sucesso!', 1, 'listaArrecadacao.php')";
            $funcaoLoad = "mudarTamanho('btnAdicionar', '100%', '39px', '16px')"; 
            $titulo = "Adicionar";           
            include('../../componentes/componenteButton.php');

            $idBtn = "btnCancelar";
            $funcaoClick = "cancelarForm('frmEditarArrecadacao', 1, 'editarArrecadacao.php')";
            $funcaoLoad = "mudarTamanho('btnCancelar', '100%', '39px', '16px')";
            $titulo = "Cancelar";
            include('../../componentes/componenteButton.php');
            ?>

        </div>
    </div>

</form>

<script>
    
    function updateFileName() {
        const input = document.getElementById("qrCodePix");
        const label = document.getElementById("qrCodeLabel");
        const fileNameText = document.getElementById("qrCodeArquivo");

        if (input.files.length > 0) {
            label.textContent = "Arquivo Selecionado";
            fileNameText.textContent = input.files[0].name;
        } else {
            label.textContent = "Enviar QR Code";
            fileNameText.textContent = "Nenhum arquivo selecionado";
        }
    }

    document.getElementById('image').addEventListener('change', function (event) {
        const filePreview = document.getElementById('filePreview');
        filePreview.innerHTML = ""; 

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
            filePreview.appendChild(fileItem);

            const removeButton = fileItem.querySelector('.remove-file');
            removeButton.addEventListener('click', () => {
                const fileInput = document.getElementById('image');
                fileInput.value = ""; 
                fileItem.remove(); 
            });
        });

        if (files.length > 5) {
            filePreview.classList.add('two-column');
        } else {
            filePreview.classList.remove('two-column');
        }
    });


</script>

<?php
    include('../../componentes/default/bottomHTML.php');
?>

