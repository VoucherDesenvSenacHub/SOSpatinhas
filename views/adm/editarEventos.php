<?php

    // if (!isset($_SESSION['taLogado']) || $_SESSION['taLogado'] !== true || $_SESSION['id'] !== 'Admin') {
    // echo '<script type="text/javascript">
    //         alert("Você precisa estar logado como administrador para acessar esta página.");
    //         window.location.href = "loginADM.php";
    //       </script>';
    // exit();
    // }

  $cssLink  = '../css/editarEventos-ADM.css';
  $tipo = 'Adm';
  include('../../../componentes/default/topHTML.php');
?>

<form action="" method="POST" enctype="multipart/form-data" id="formCadastroEvento">
    <div class="conteudoForm">
        <div class="col1">
            <input type="text" name="name" placeholder="Nome do Evento" required>
            <textarea name="descricao" placeholder="Descrição" required></textarea>
            <input type="text" name="cidadeEstado" placeholder="Cidade/Estado" required>
            <input type="text" name="local" placeholder="Local" required>
        </div>

        <div class="col2">
            <div class="upload-container">
                <div class="top">
                    <input type="file" id="image" name="image[]" accept="image/*" multiple hidden>
                    <label for="image" id="imgLabel" class="upload-box">
                        <img src="..\images\cadastroAdocao-ADM\grampoBranco.png" alt="Upload Icon">
                        <p>Enviar fotos</p>
                    </label>
                    <div class="descricaoEBtn">
                        <p class="file-info">Enviar até 10 arquivos: JPG, PNG, JPEG*</p>
                    <div id="filePreview"></div>
                    </div>
                </div>
                
            </div>
            
            <div class="btnContainer">
                <?php
                    $idBtn = "btnSalvar";
                    $funcaoClick = "adicionarComValidacao('Evento editado com sucesso!', 1, 'listaEventosADM.php')";
                    $funcaoLoad = "mudarTamanho('btnSalvar', '275px', '50px', '20px')";
                    $titulo = "Salvar";
                    include('../templates/componenteButton.php');
                    
                    //  arrumar o direcionamento
                    $idBtn = "btnCancelar";
                    $funcaoClick = "cancelarForm('frmCadastroAdocao','listaEventosADM.php')";
                    $funcaoLoad = "mudarTamanho('btnCancelar', '275px', '50px', '20px')";
                    $titulo = "Cancelar";
                    include('../templates/componenteButton.php');
                ?>
            </div>
        </div>
    </div>

</form>

<script>
    function adicionar(){
        if([...document.querySelectorAll("#frmCadastroAdocao input")].every(input => input.value.trim() !== "")){
            alert("Update realizado com sucesso!")
            window.location.href = "listaEventosADM.php";
        }else{
            alert("Preencha todos os campos.")
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
        window.location.href = "listaEventosADM.php";
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
//         $name = $_POST['name'] ?? null;
//         $descricao = $_POST['descricao'] ?? null;
//         $cidadeEstado = $_POST['cidadeEstado'];
//         $local = $_POST['local'];
//         $target_dir = "uploads/";
        
//         $insert1 = "INSERT INTO evento (nome, descricao, cidade_estado, endereco) 
//                 VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
//         $query1 = $banco->prepare($insert1);
//         $query1->bind_param("ssssssss", $name, $descricao, $cidadeEstado, $local);
//         $query1->execute();
        
//         $id_evento = $banco->pegaUltimoIdInserido();
        
//         if (!empty($_FILES["image"]["name"][0])) { 
//             $totalFiles = count($_FILES["image"]["name"]);
            
//             for ($i = 0; $i < $totalFiles; $i++) {
//                 $nomeImagem = basename($_FILES["image"]["name"][$i]);
//                 $target_file = $target_dir . $id_evento . "_" . $nomeImagem;
                
//                 if (move_uploaded_file($_FILES["image"]["tmp_name"][$i], $target_file)) {
//                     $sql2 = "INSERT INTO foto (id_evento, tipo_table,caminho_foto) VALUES (?, ?, ?)";
//                     $query2 = $banco->prepare($sql2);
//                     $query2->bind_param("iss", $id_evento, "eventos", $target_file);
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
