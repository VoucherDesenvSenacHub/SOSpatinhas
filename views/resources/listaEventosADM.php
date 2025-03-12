<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOS Patinhas</title>
    <link rel="stylesheet" href="../css/listaEventosADM.css">
</head>
<body>
    <?php include("../templates/navbarAdm.php")?>

    <section class="corpo container">
        <h1>Lista de Eventos</h1>
        <div class="pesquisar">
            <img src="../images/lupa_pesquisa.png" alt="Lupa de pesquisa" class="lupa">
            <input type="text" placeholder="Pesquisar">
        </div>
        <div class="meuJeito">
            <div class="botao-add-container">
                <a href="adicionar-animal.php">
                    <button class="botao-add">+</button>
                </a>
            </div>
        </div>

        <div class="lista-eventos" id="lista-eventos">
            <div class="evento">
                <h3>Feira do AuAu</h3>
                <img src="../images/feiraAuAu.png" alt="Imagem do evento">
                <div class="localizacao">
                    <img src="../images/pin_info.png" alt="Localização">
                    <span>Horto Florestal</span> 
                </div>
                <button>Excluir</button>
                <button>Editar</button>
            </div>
            <div class="evento">
                <h3>Adote um Amigo</h3>
                <img src="../images/AdoteAmigo.png" alt="Imagem do evento">
                <div class="localizacao">
                    <img src="../images/pin_info.png" alt="Localização">
                    <span>Parque dos Poderes</span> 
                </div>
                <button>Excluir</button>
                <button>Editar</button>
            </div>
            <div class="evento">
                <h3>Juntos por Eles</h3>
                <img src="../images/JuntosPEles.png" alt="Imagem do evento">
                <div class="localizacao">
                    <img src="../images/pin_info.png" alt="Localização">
                    <span>Bosque dos Ipês</span> 
                </div>
                <button>Excluir</button>
                <button>Editar</button>
            </div>
            <div class="evento">
                <h3>Ajude uma patinha</h3>
                <img src="../images/AjudeUPatinha.png" alt="Imagem do evento">
                <div class="localizacao">
                    <img src="../images/pin_info.png" alt="Localização">
                    <span>Parque das Nações</span> 
                </div>
                <button>Excluir</button>
                <button>Editar</button>
            </div>
            <div class="evento">
                <h3>Título</h3>
                <img src="../images/AjudeUPatinha.png" alt="Imagem do evento">
                <div class="localizacao">
                    <img src="../images/pin_info.png" alt="Localização">
                    <span>Sem localidade</span> 
                </div>
                <button>Excluir</button>
                <button>Editar</button>
            </div>
            <div class="evento">
                <h3>Título</h3>
                <img src="../images/AjudeUPatinha.png" alt="Imagem do evento">
                <div class="localizacao">
                    <img src="../images/pin_info.png" alt="Localização">
                    <span>Sem localidade</span> 
                </div>
                <button>Excluir</button>
                <button>Editar</button>
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
    </script>

    <?php include("../templates/footerAdm.php")?>
</body>
</html>