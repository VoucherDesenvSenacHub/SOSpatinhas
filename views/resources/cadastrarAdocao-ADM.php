
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Adoção</title>
    <link rel="stylesheet" href="../css/cadastrarAdocao-ADM.css">
</head>
<body>
    <?php include('../templates/navbarUser.php')?>

    <section class="corpo container">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="conteudoForm">
                <div class="col1">
                    <input type="text" name="name" placeholder="Nome do Animal" required>
                    <input type="text" name="tipo" placeholder="Tipo do Animal" required>
                    <input type="text" name="raca" placeholder="Raça" required>
                    <select name="porte" id="porte-select" placeholder="Porte" required>
                        <option class="filter-option" value="" selected disabled hidden>-- Porte --</option>
                        <option class="filter-option" value="Pequeno">Pequeno</option>
                        <option class="filter-option" value="Médio">Médio</option>
                        <option class="filter-option" value="Grande">Grande</option>
                    </select> 
                    <select name="idade" id="idade-select" required>
                        <option class="filter-option" value="" selected disabled hidden>-- Idade --</option>
                        <option class="filter-option" value="< 1">-1 ano</option>
                        <option class="filter-option" value="<= 5">Até 5 anos</option>
                        <option class="filter-option" value="<= 10">Até 10 anos</option>
                        <option class="filter-option" value="> 10">+10 anos</option>
                    </select>
                    <textarea name="descricao" placeholder="Descrição" required></textarea>
                </div>
    
                <div class="col2">
                    <input type="text" name="tags" placeholder="Tags" required>
                    
                    <div class="switchBtn">
                        <label id="titulo">Gênero:</label>              <!-- maybe also change to dropbox? -->
                        <input type="radio" name="sexo" value="Fêmea" id="female" required>
                        <label for="female">Fêmea</label>
                        <input type="radio" name="sexo" value="Macho" id="male" required>
                        <label for="male">Macho</label>
                    </div>
        
                    <label for="image">Enviar foto:</label>
                    <input type="file" name="image" accept="image/*" multiple required>
        
                    <button type="submit">Adicionar</button>
                    <button class="cancelarBtn" onclick="type='reset'">
                        <a href="listaAdocao-ADM.php">Cancelar</a>
                    </button>
                </div>
            </div>

        </form>
    </section>

    <?php include('../templates/footerUser.php')?>
</body>
</html>

<?php
require_once '../../config/database.php';
$banco = new Banco();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $name = $_POST['name'] ?? null;
        $tipo = $_POST['tipo'] ?? null;
        $raca = $_POST['raca'] ?? null;
        $porte = $_POST['porte'] ?? null;
        $descricao = $_POST['descricao'] ?? null;
        $tags = $_POST['tags'] ?? null;
        $idade = $_POST['idade'] ?? null;
        $sexo = $_POST['sexo'] ?? null;
        $target_dir = "uploads/";
        
        $insert1 = "INSERT INTO animal (nome, tipo, raca, porte, descricao, tags, idade, sexo) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $query1 = $banco->prepare($insert1);
        $query1->bind_param("ssssssss", $name, $tipo, $raca, $porte, $descricao, $tags, $idade, $sexo);
        $query1->execute();
        
        $id_animal = $banco->pegaUltimoIdInserido();
        
        if (!empty($_FILES["image"]["name"])) {
            $image_name = basename($_FILES["image"]["name"]);
            $target_file = $target_dir . $id_animal . "_" . $image_name;
            
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                $sql2 = "INSERT INTO foto (id_animal, caminho_foto) VALUES (?, ?)";
                $query2 = $banco->prepare($sql2);
                $query2->bind_param("is", $id_animal, $target_file);
                $query2->execute();
            } else {
                throw new Exception("Erro ao enviar imagem.");
            }
        }
        
        echo "<script>alert('Animal registrado com sucesso!');</script>";
        
    } catch (Exception $e) {
        echo "<input type='hidden' id='errorMessage' value='" . htmlspecialchars($e->getMessage()) . "'>";
    }
}
$banco->fechar();
?>
