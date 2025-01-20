<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Adoções - ADM</title>
    <link rel="stylesheet" href="../css/listaAdocao-adm.css">
</head>
<body>
    <?php include('../templates/navbarUser.php')?>

    <div class="conteiner">
        <h1>Lista de Adoções</h1>

        <div class="pesquisar">
            <input type="text" placeholder="Pesquisar">
        </div>
        
        <div class="lista-adocao">
            <div class="animal">
                <img src="../images/Rectangle 71.png" alt="Rochele">
                <h3>Rochele</h3>
                <button>Excluir</button>
            </div>
            <div class="animal">
                <img src="../images/Toby.png" alt="Toby">
                <h3>Toby</h3>
                <button>Excluir</button>
            </div>
            <div class="animal">
                <img src="../images/Rumi.png" alt="Rumi">
                <h3>Rumi</h3>
                <button>Excluir</button>
            </div>
            <div class="animal">
                <img src="../images/Nobre.png" alt="Nobre">
                <h3>Nobre</h3>
                <button>Excluir</button>
            </div>
            <div class="animal">
                <img src="../images/Sir Dougg.png" alt="Sir Dougg">
                <h3>Sir Dougg</h3>
                <button>Excluir</button>
            </div>
            <div class="animal">
                <img src="../images/Nigel.png" alt="Nigel">
                <h3>Nigel</h3>
                <button>Excluir</button>
            </div>
        </div>

        <div class="altPag">
            <a href="#">&lt;</a>
            <a href="#" class="active">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">&gt;</a>
        </div>
    </div>

    <button class="botao-add">+</button>

    <?php include('../templates/footerUser.php')?>
</body>
</html>
