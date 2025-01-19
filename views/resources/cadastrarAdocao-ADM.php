<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/cadastrarAdocao-ADM.css">
</head>
<body>
    <?php include('../templates/navbarUser.php')?>

    <section class="corpo container" >
        <!-- <form action="POST" class="formAnimal"> -->
            <section class="col1">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome">
                <input type="text" id="raca">
                <input type="text" id="descricao">
                <input type="number" id="idade">
                <label class="toggle">
                    <input type="checkbox" id="genderToggle">
                    <span class="slider">
                        <span class="label left">Fêmea</span>
                        <span class="label right">Macho</span>
                    </span>
                </label>
            </section>

            <section class="col2">
                <input type="text" id="porte">
                <input type="image" src="views\uploads" alt="ft">
                <button class="button-card">
                    <a href="#?>">Adicionar</a>
                </button>
                <button class="button-card">
                    <a href="#?>">Cancelar</a>
                </button>
            </section>
        <!-- </form> -->
        
    </section>

    <?php include('../templates/footerUser.php')?>
</body>
</html>