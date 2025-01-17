<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de adocoes - ADM</title>
    <link rel="stylesheet" href="../css/listaAdocao-adm.css">
</head>
<body>
    <?php include('../templates/navbarUser.php')?>

    <div class="conteiner">
        <h1>Lista de Adocões</h1>

        <div class="pesguisar">
            <input type="text" placeholder="Pesquisar">
            <!-- <img src="../images/lupa_pesguisa.png" alt=""> -->
        </div>
        <div class="lista-adocao">
            <div class="animal">
                <img src="#" alt="#">
                <h3>Animal 1</h3>
                <button>Excluir</button>
            </div>
        

        
            <div class="animal">
                <img src="#" alt="#">
                <h3>Animal 1</h3>
                <button>Excluir</button>
            </div>
        

        
            <div class="animal">
                <img src="#" alt="#">
                <h3>Animal 2</h3>
                <button>Excluir</button>
            </div>
        

        
            <div class="animal">
                <img src="#" alt="#">
                <h3>Animal 3</h3>
                <button>Excluir</button>
            </div>
        

        
            <div class="animal">
                <img src="#" alt="#">
                <h3>Animal 4</h3>
                <button>Excluir</button>
            </div>
        

        
            <div class="animal">
                <img src="#" alt="#">
                <h3>Animal 5</h3>
                <button>Excluir</button>
            </div>
        
            <div class="animal">
                <img src="#" alt="#">
                <h3>Animal 6</h3>
                <button>Excluir</button>
            </div>
        </div>

        <div class="altPag">
            <a href="#">&lt;</a>
            <a href="#" class="active">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">&gt</a>
        </div>
    </div>

    <button class="botao-add">+</button>

    <?php include('../templates/footerUser.php')?>

</body>
</html>