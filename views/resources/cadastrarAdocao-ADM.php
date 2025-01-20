<?php
    require_once '../../config/database.php';
    $banco = new Banco();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = isset($_POST['name']) ? $_POST['name'] : null;
        $type = isset($_POST['type']) ? $_POST['type'] : null;
        $breed = isset($_POST['breed']) ? $_POST['breed'] : null;
        $size = isset($_POST['size']) ? $_POST['size'] : null;
        $description = isset($_POST['description']) ? $_POST['description'] : null;
        $tags = isset($_POST['tags']) ? $_POST['tags'] : null;
        $age = isset($_POST['age']) ? $_POST['age'] : null;
        $gender = isset($_POST['gender']) ? $_POST['gender'] : null;
        $target_dir = "uploads/";
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        $image_name = isset($_FILES["image"]["name"]) ? basename($_FILES["image"]["name"]) : null;
        $target_file = $image_name ? $target_dir . time() . "_" . $image_name : null;

        if ($image_name) {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                $sql1 = "INSERT INTO animal (nome, tipo, raca, porte, descricao, tags, idade, sexo) 
                        VALUES ('$name', '$type', '$breed', '$size', '$description', '$tags', $age, '$gender')";
                $sql2 = "INSERT INTO foto (id_animal, caminho_foto)
                        VALUES (1, '$target_file')";
                $banco->query($sql1);
                $banco->query($sql2);
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }
?>

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
                    <input type="text" name="type" placeholder="Tipo do Animal" required>
                    <input type="text" name="breed" placeholder="Raça">
                    <input type="text" name="size" placeholder="Porte"> <!-- change to dropbox -->
                    <input type="number" name="age" placeholder="Idade"> <!-- change to dropbox/ reference: adocao.php --> 
                </div>
    
                <div class="col2">
                    <textarea name="description" placeholder="Descrição"></textarea>
                    <input type="text" name="tags" placeholder="Tags">
                    
                    <div class="switchBtn">
                        <label>Gênero:</label>              <!-- maybe also change to dropbox? -->
                        <input type="radio" name="gender" value="Fêmea" id="female" required>
                        <label for="female">Fêmea</label>
                        <input type="radio" name="gender" value="Macho" id="male" required>
                        <label for="male">Macho</label>
                    </div>
        
                    <label for="image">Enviar foto:</label>
                    <input type="file" name="image" accept="image/*" required>
        
                    <button type="submit">Adicionar</button>
                    <button type="reset">Cancelar</button>
                </div>
            </div>

        </form>
    </section>

    <?php include('../templates/footerUser.php')?>
</body>
</html>

<?php
$banco->fechar();
?>