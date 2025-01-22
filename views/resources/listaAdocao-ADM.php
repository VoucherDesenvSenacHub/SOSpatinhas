<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/listaAdocao-ADM.css">
</head>
<body>
    <?php include('../templates/navbarUser.php')?>

    <section class="corpo container">
        <h1>Lista de Adoções</h1>
        <div class="pesquisar">
            <img src="../images/lupa_pesguisa.png" alt="Lupa de pesquisa" class="lupa">
            <input type="text" placeholder="Pesquisar">
        </div>

        <div class="lista-adocao">
            <div class="animal">
                <h3>Rochele</h3>
                <img src="../images/Rectangle 71.png" alt="Rochele">
                <button>Excluir</button>
            </div>
            <div class="animal">
                <h3>Toby</h3>
                <img src="../images/Toby.png" alt="Toby">
                <button>Excluir</button>
            </div>
            <div class="animal">
                <h3>Rumi</h3>
                <img src="../images/Rumi.png" alt="Rumi">
                <button>Excluir</button>
            </div>
            <div class="animal">
                <h3>Nobre</h3>
                <img src="../images/Nobre.png" alt="Nobre">
                <button>Excluir</button>
            </div>
            <div class="animal">
                <h3>Sir Dougg</h3>
                <img src="../images/Sir Dougg.png" alt="Sir Dougg">
                <button>Excluir</button>
            </div>
            <div class="animal">
                <h3>Nigel</h3>
                <img src="../images/Nigel.png" alt="Nigel">
                <button>Excluir</button>
            </div>
            <div class="botao-add-container">
                <button class="botao-add">+</button>
            </div>
        </div>
        <div class="altPag">
            <a href="#">&lt;</a>
            <a href="#" class="active">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">&gt;</a>
        </div>

    </section>

    <?php include('../templates/footerUser.php')?>
</body>
</html>
