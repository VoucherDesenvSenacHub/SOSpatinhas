<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Adoções - ADM</title>
    <link rel="stylesheet" href="../css/listaAdocao-ADM.css">
</head>
<body>
<?php include('../templates/navbarAdm.php'); ?>

    <section class="corpo container">
        <h1>Lista de Adoções</h1>
        <div class="pesquisar">
            <img src="../images/lupa_pesquisa.png" alt="Lupa de pesquisa" class="lupa">
            <input type="text" placeholder="Pesquisar">
        </div>

        <div class="lista-adocao" id="lista-adocao">
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
                <a href="adicionar-animal.php"><button class="botao-add">+</button></a>
            </div>
        </div>
        <div class="cta-slide">
            <button id="prev" class="pagination-btn">&lt;</button>
            <div class="altPag" id="paginacao">
                <li class="link active" value="1">1</li>
                <li class="link" value="2">2</li>
                <li class="link" value="3">3</li>
            </div>
            <button id="next" class="pagination-btn">&gt;</button>
        </div>
    </section>

    <script>
        let links = document.getElementsByClassName('link');
        let valorAtual = 0;

        function activeLink() {
            for (let i = 0; i < links.length; i++) {
                links[i].classList.remove('active');
            }
            links[valorAtual].classList.add('active');
        }

        for (let i = 0; i < links.length; i++) {
            links[i].addEventListener('click', function() {
                valorAtual = i;
                activeLink();
            });
        }

        document.getElementById('prev').addEventListener('click', function() {
            if (valorAtual > 0) {
                valorAtual--;
                activeLink();
            }
        });

        document.getElementById('next').addEventListener('click', function() {
            if (valorAtual < links.length - 1) {
                valorAtual++;
                activeLink();
            }
        });

        let botaoDeletar = document.querySelectorAll('.animal button');

        botaoDeletar.forEach(button => {
            button.addEventListener('click', function() {
            let animalDiv = this.parentElement;
            animalDiv.remove();
            alert('Animal excluído com sucesso!');
            });
        });
        
    </script>

<?php include_once "../templates/footerAdm.php"; ?>
</body>
</html>
