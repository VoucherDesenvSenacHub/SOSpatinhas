<?php

    if (!isset($_SESSION['taLogado']) || $_SESSION['taLogado'] !== true || $_SESSION['id'] !== 'Admin') {
    echo '<script type="text/javascript">
            alert("Você precisa estar logado como administrador para acessar esta página.");
            window.location.href = "loginADM.php";
          </script>';
    exit();
    }

    $cssLink  = '../css/cadastrarAdocao-ADM.css';
    $tipo = 'Adm';
    include('../templates/default/topHTML.php');
?>

<form action="" method="POST" enctype="multipart/form-data" id="frmCadastroAdocao">
    <div class="conteudoForm">
        <div class="col1">
            <input type="text" name="name" placeholder="Nome do Animal" required>
            <input type="text" name="tipo" placeholder="Tipo do Animal" required>
            <input type="text" name="raca" placeholder="Raça" required>
            <div class="selectContainer">
                <select name="porte" id="porte-select" placeholder="Porte" required>
                    <option class="filter-option" value="" selected disabled hidden>Porte</option>
                    <option class="filter-option" value="Pequeno">Pequeno</option>
                    <option class="filter-option" value="Médio">Médio</option>
                    <option class="filter-option" value="Grande">Grande</option>
                </select>
            </div>
            <div class="selectContainer">
                <select name="idade" id="idade-select" required>
                    <option class="filter-option" value="" selected disabled hidden>Idade</option>
                    <option class="filter-option" value="< 1">-1 ano</option>
                    <option class="filter-option" value="<= 5">Até 5 anos</option>
                    <option class="filter-option" value="<= 10">Até 10 anos</option>
                    <option class="filter-option" value="> 10">+10 anos</option>
                </select>
            </div>

            <textarea name="descricao" placeholder="Descrição" required></textarea>

            <input type="text" name="tags" placeholder="Tags" required>
        </div>

        <div class="col2">
            
            <div class="switchBtn">
                <label id="titulo">Gênero:</label>              
                <input type="radio" name="sexo" value="Fêmea" id="female" required>
                <label for="female" id="female">Fêmea</label>
                <input type="radio" name="sexo" value="Macho" id="male" required>
                <label for="male" id="male">Macho</label>
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
            $funcaoClick = "adicionarComValidacao('Arrecadação cadastrada com sucesso!')";
            $funcaoLoad = "mudarTamanho('400px')";
            $titulo = "Cadastrar";
            include('../templates/componenteButton.php');

            $funcaoClick = "cancelarForm('frmCadastroAdocao','listaArrecadacoesADM.php')";
            $funcaoLoad = "mudarTamanho('400px')";
            $titulo = "Cancelar";
            include('../templates/componenteButton.php');
            ?>

        </div>
    </div>
</form>

<script>
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
        window.location.href = "listaAdocao-ADM.php";
    }

    function adicionar(){
        if([...document.querySelectorAll("#frmCadastroAdocao input")].every(input => input.value.trim() !== "")){
            alert("Animal cadastrado com sucesso!")
        }else{
            alert("Preencha todos os campos.")
        }
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
//         $tipo = $_POST['tipo'] ?? null;
//         $raca = $_POST['raca'] ?? null;
//         $porte = $_POST['porte'] ?? null;
//         $descricao = $_POST['descricao'] ?? null;
//         $tags = $_POST['tags'] ?? null;
//         $idade = $_POST['idade'] ?? null;
//         $sexo = $_POST['sexo'] ?? null;
//         $target_dir = "uploads/";
        
//         $insert1 = "INSERT INTO animal (nome, tipo, raca, porte, descricao, tags, idade, sexo) 
//                 VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
//         $query1 = $banco->prepare($insert1);
//         $query1->bind_param("ssssssss", $name, $tipo, $raca, $porte, $descricao, $tags, $idade, $sexo);
//         $query1->execute();
        
//         $id_animal = $banco->pegaUltimoIdInserido();
        
//         if (!empty($_FILES["image"]["name"][0])) { 
//             $totalFiles = count($_FILES["image"]["name"]);
            
//             for ($i = 0; $i < $totalFiles; $i++) {
//                 $nomeImagem = basename($_FILES["image"]["name"][$i]);
//                 $target_file = $target_dir . $id_animal . "_" . $nomeImagem;
                
//                 if (move_uploaded_file($_FILES["image"]["tmp_name"][$i], $target_file)) {
//                     $sql2 = "INSERT INTO foto (id_animal, tipo_table,caminho_foto) VALUES (?, ?)";
//                     $query2 = $banco->prepare($sql2);
//                     $query2->bind_param("iss", $id_animal, $target_file);
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
