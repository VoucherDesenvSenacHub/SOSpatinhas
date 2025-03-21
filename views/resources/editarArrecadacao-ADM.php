<?php

    // if (!isset($_SESSION['taLogado']) || $_SESSION['taLogado'] !== true || $_SESSION['id'] !== 'Admin') {
    // echo '<script type="text/javascript">
    //         alert("Você precisa estar logado como administrador para acessar esta página.");
    //         window.location.href = "loginADM.php";
    //       </script>';
    // exit();
    // }

  $cssLink  = '../css/editarArrecadacao-ADM.css';
  $tipo = 'Adm';
  include('../templates/default/topHTML.php');
?>

<form action="" method="POST" enctype="multipart/form-data" id="frmCadastroAdocao">
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
                    <img src="..\images\cadastroAdocao-ADM\grampoBranco.png" alt="Upload Icon">
                    <p>Enviar fotos</p>
                </label>
                <div id="filePreview"></div>
                <p class="file-info">Enviar até 10 arquivos: JPG, PNG, JPEG*</p>
            </div>  
            <?php
            $idBtn = "btnAdicionar";
            $funcaoClick = "adicionarComValidacao('Arrecadação editada com sucesso!', 1, 'listaArrecadacoesADM.php')";
            $funcaoLoad = "mudarTamanho('btnAdicionar', '100%', '39px', '16px')"; 
            $titulo = "Adicionar";           
            include('../templates/componenteButton.php');

            $idBtn = "btnCancelar";
            $funcaoClick = "cancelarForm('frmCadastroAdocao', listaArrecadacoesADM.php)";
            $funcaoLoad = "mudarTamanho('btnCancelar', '100%', '39px', '16px')";
            $titulo = "Cancelar";
            include('../templates/componenteButton.php');
            ?>

        </div>
    </div>

</form>

<script>
    function adicionar(){
        if([...document.querySelectorAll("#frmCadastroAdocao input")].every(input => input.value.trim() !== "")){
            alert("Update realizado com sucesso!")
            window.location.href = "listaArrecadacoesADM.php";
        }else{
            alert("Preencha todos os campos.")
        }
    }

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

    function resetERedirect(){
        document.getElementById('frmCadastroAdocao').reset();
        window.location.href = "listaArrecadacoesADM.php";
    }
</script>

<?php
    include('../templates/default/bottomHTML.php');
?>

<?php
// require_once '../../config/database.php';
// $banco = new Banco();

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     try {
//         $titulo = $_POST['titulo'] ?? null;
//         $nameAnimal = $_POST['nameAnimal'] ?? null;
//         $descricao = $_POST['descricao'] ?? null;
//         $nameUser = $_POST['nameUser'] ?? null;
//         $valorInicio = $_POST['valorInicio'] ?? null;
//         $valorAtual = $_POST['valorAtual'] ?? null;
//         $nmConta = $_POST['nmConta'] ?? null;
//         $nuConta = $_POST['nuConta'] ?? null;
//         $nuAgencia = $_POST['nuAgencia'] ?? null;

//         $insert1 = "INSERT INTO arrecadacao (titulo, nomeAnimal, descricao, nomeDono, valorArrecadaco, valorArrecadado, nmConta, nuConta, nuAgencia) 
//                 VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
//         $query1 = $banco->prepare($insert1);
//         $query1->bind_param("ssssss", $titulo, $nameAnimal, $descricao, $nameUser, $valorInicio, $valorAtual, $nmConta, $nuConta, $nuAgencia);
//         $query1->execute();

//         $id_animal = $banco->pegaUltimoIdInserido();
//         $target_dir = "uploads/";

//         if (!empty($_FILES["qrCodePix"]["name"])) {
//             $nomeQrCode = basename($_FILES["qrCodePix"]["name"]);
//             $target_qr = $target_dir . $id_animal . "_qr_" . $nomeQrCode;

//             if (move_uploaded_file($_FILES["qrCodePix"]["tmp_name"], $target_qr)) {
//                 $sqlQr = "INSERT INTO foto (id_animal, tipo_table, caminho_foto) VALUES (?, ?, ?)";
//                 $queryQr = $banco->prepare($sqlQr);
//                 $queryQr->bind_param("iss", $id_animal, $tipo_table = "qrCodePix", $target_qr);
//                 $queryQr->execute();
//             } else {
//                 throw new Exception("Erro ao enviar QR Code.");
//             }
//         }

//         if (!empty($_FILES["image"]["name"][0])) { 
//             $totalFiles = count($_FILES["image"]["name"]);

//             for ($i = 0; $i < $totalFiles; $i++) {
//                 $nomeImagem = basename($_FILES["image"]["name"][$i]);
//                 $target_file = $target_dir . $id_animal . "_" . $nomeImagem;

//                 if (move_uploaded_file($_FILES["image"]["tmp_name"][$i], $target_file)) {
//                     $sql2 = "INSERT INTO foto (id_animal, tipo_table, caminho_foto) VALUES (?, ?, ?)";
//                     $query2 = $banco->prepare($sql2);
//                     $query2->bind_param("iss", $id_animal, $tipo_table = "arrecadacao", $target_file);
//                     $query2->execute();
//                 } else {
//                     throw new Exception("Erro ao enviar imagem: " . $_FILES["image"]["name"][$i]);
//                 }
//             }
//         }
//     } catch (Exception $e) {
//         echo "<input type='hidden' id='errorMessage' value='" . htmlspecialchars($e->getMessage()) . "'>";
//     }
// }
// $banco->fechar();
?>
