<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de membros - ADM</title>
    <link rel="stylesheet" href="../css/listamembrosADM.css">
</head>
<body>
    <?php include('../templates/navbarUser.php')?>

    <section class="corpo conteiner">
        <h1>Lista de membros</h1>
        <div class="pesquisar">
            <img src="../images/lupa_pesquisa.png" alt="Lupa de pesquisa" class="lupa">
            <input type="text" placeholder="Pesquisar">
        </div>

        <div class="lista-de-membros">
            <div class="membro">
                <img src="../images/iconeADM.png" alt="">
                <h3>...</h3>
                <div class="status">
                    <div></div>
                    <span>Online</span>
                </div>
                <button>Excluir</button>
            </div>
        
            <div class="membro">
                <img src="../images/iconeADM.png" alt="">
                <h3>...</h3>
                <div class="status">
                    <div></div>
                    <span>Online</span>
                </div>
                <button>Excluir</button>
            </div>
        

        
            <div class="membro">
                <img src="../images/iconeADM.png" alt="">
                <h3>...</h3>
                <div class="status">
                    <div></div>
                    <span>Online</span>
                </div>
                <button>Excluir</button>
            </div>
       

        
            <div class="membro">
                <img src="../images/iconeADM.png" alt="">
                <h3>...</h3>
                <div class="status">
                    <div></div>
                    <span>Online</span>
                </div>
                <button>Excluir</button>
            </div>
        

        
            <div class="membro">
                <img src="../images/iconeADM.png" alt="">
                <h3>...</h3>
                <div class="status">
                    <div></div>
                    <span>Online</span>
                </div>
                <button>Excluir</button>
            </div>
        

       
            <div class="membro">
                <img src="../images/iconeADM.png" alt="">
                <h3>...</h3>
                <div class="status">
                    <div></div>
                    <span>Online</span>
                </div>
                <button>Excluir</button>
            </div>
        

        
            <div class="membro">
                <img src="../images/iconeADM.png" alt="">
                <h3>...</h3>
                <div class="status">
                    <div></div>
                    <span>Online</span>
                </div>
                <button>Excluir</button>
            </div>
        

        
            <div class="membro">
                <img src="../images/iconeADM.png" alt="">
                <h3>...</h3>
                <div class="status">
                    <div></div>
                    <span>Online</span>
                </div>
                <button>Excluir</button>
            </div>
        

        
            <div class="membro">
                <img src="../images/iconeADM.png" alt="">
                <h3>...</h3>
                <div class="status">
                    <div></div>
                    <span>Online</span>
                </div>
                <button>Excluir</button>
            </div>
       

        
            <div class="membro">
                <img src="../images/iconeADM.png" alt="">
                <h3>...</h3>
                <div class="status">
                    <div></div>
                    <span>Online</span>
                </div>
                <button>Excluir</button>
            </div>
        

        
            <div class="membro">
                <img src="../images/iconeADM.png" alt="">
                <h3>...</h3>
                <div class="status">
                    <div></div>
                    <span>Online</span>
                </div>
                <button>Excluir</button>
            </div>
        </div>

        <div class="botao-add-conteiner">
            <a href="adicionar-membro.php"><button class="botao-add">+</button></a>
        </div>
        
        <div class="cta-slide"></div>
        <button id="prev" class="pagination-btn">&lt;</button>
        <div class="altPag" id="paginacao">
            <li class="link-active" value="1">1</li>
            <li class="link" value="2">2</li>
            <li class="link" value="3">3</li>
        </div>

        <button id="next" class="pagination-btn">&gt;</button>

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

    <?php include('../templates/footerUser.php')?>
</body>
</html>