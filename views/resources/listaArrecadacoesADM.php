<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOS Patinhas</title>
    <link rel="stylesheet" href="../css/listaArrecadacaoADM.css">
</head>
<body>
    <?php include_once "../templates/navbarAdm.php"; ?>

    <section class="corpo container">
        <h1>Lista de Arrecadações</h1>
        <div class="pesquisar">
            <img src="../images/lupa_pesquisa.png" alt="Lupa de pesquisa" class="lupa">
            <input type="text" placeholder="Pesquisar">
        </div>

        <div class="lista-arrecadacoes" id="lista-arrecadacoes">
            <div class="arrecadacao">
                <h3>Freguês</h3>
                <div class="divImg">
                    <img src="../images/listaArrecadacoes-ADM/fregues.png" alt="Imagem do evento">
                    <span id="letras">Em progresso</span>
                </div>
                <div class="metas">
                    <span><b>Meta: R$ 1.000,00.</b></span> 
                </div>
                <button id="btnExcluir">Excluir</button>
                <button id="btnEditar">Editar</button>
            </div>
            <div class="arrecadacao">
                <h3>Nina</h3>
                <div class="divImg">
                    <span id="letras">Em progresso</span>
                    <img src="../images/listaArrecadacoes-ADM/nina.png" alt="Imagem do evento">
                </div>
                <div class="metas">
                <span><b>Meta: R$ 2.500,00.</b></span> 
                </div>
                <button id="btnExcluir">Excluir</button>
                <button id="btnEditar">Editar</button>
            </div>
            <div class="arrecadacao">
                <h3>Cascudo</h3>
                <div class="divImg">
                    <span id="letras">Em progresso</span>
                    <img src="../images/listaArrecadacoes-ADM/cascudo.png" alt="Imagem do evento">
                </div>
                <div class="metas">
                    <span><b>Meta: R$ 2.500,00.</b></span>  
                </div>
                <button id="btnExcluir">Excluir</button>
                <button id="btnEditar">Editar</button>
            </div>
            <div class="arrecadacao">
                <h3>Luke</h3>
                <div class="divImg">
                    <span id="letras">Em progresso</span>
                    <img src="../images/listaArrecadacoes-ADM/luke.png" alt="Imagem do evento">
                </div>
                <div class="metas">
                    <span><b>Meta: R$ 870,00.</b></span>  
                </div>
                <button id="btnExcluir">Excluir</button>
                <button id="btnEditar">Editar</button>
            </div>
            <div class="arrecadacao">
                <h3>Hulk</h3>
                <div class="divImg">
                    <span id="letras">Em progresso</span>
                    <img src="../images/listaArrecadacoes-ADM/hulk.png" alt="Imagem do evento">
                </div>
                <div class="metas">
                    <span><b>Meta: R$ 1.200,00.</b></span>  
                </div>
                <button id="btnExcluir">Excluir</button>
                <button id="btnEditar">Editar</button>
            </div>
            <div class="arrecadacao">
                <h3>Godinho</h3>
                <div class="divImg">
                    <span id="letras">Em progresso</span>
                    <img src="../images/listaArrecadacoes-ADM/godinho.png" alt="Imagem do evento">
                </div>
                <div class="metas">
                    <span><b>Meta: R$ 720,00.</b></span>  
                </div>
                <button id="btnExcluir">Excluir</button>
                <button id="btnEditar">Editar</button>
            </div>
            <div class="botao-add-container">
                <a href="cadastrarArrecadacao-ADM.php"><button class="botao-add">+</button></a>
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

        let botaoDeletar = document.querySelectorAll('.arrecadacao #btnExcluir');

        botaoDeletar.forEach(button => {
            button.addEventListener('click', function() {
            let animalDiv = this.parentElement;
            animalDiv.remove();
            alert('Animal excluído com sucesso!');
            });
        });

        let botaoEditar = document.querySelectorAll('.arrecadacao #btnEditar');

        botaoEditar.forEach(button => {
            button.addEventListener('click', function() {
                window.location.href = "editarArrecadacao-ADM.php";
            });
        });
    </script>



    <?php include_once "../templates/footerAdm.php"; ?>
</body>
</html>