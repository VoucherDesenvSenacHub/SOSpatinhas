<?php
  $cssLink  = '../css/listamembrosADM.css';
  $tipo = 'Adm'
  include('../templates/default/topHTML.php');
?>

<h1>Lista de membros</h1>
<div class="pesquisar">
    <img src="../images/lupa_pesquisa.png" alt="Lupa de pesquisa" class="lupa">
    <input type="text" placeholder="Pesquisar">
</div>

<div class="lista-de-membros" id="lista-de-membros">
    <div class="membro">
        <img src="../images/iconeADM.png" alt="">
        <h3>Will Smith</h3>
        <div class="status">
            <div></div>
            <span>Online</span>
        </div>
        <button id="btnExcluir">Excluir</button>
        <button id="btnEditar">Editar</button>
    </div>

    <div class="membro">
        <img src="../images/iconeADM.png" alt="">
        <h3>Everton Silva</h3>
        <div class="status">
            <div></div>
            <span>Online</span>
        </div>
        <button id="btnExcluir">Excluir</button>
        <button id="btnEditar">Editar</button>
    </div>



    <div class="membro">
        <img src="../images/iconeADM.png" alt="">
        <h3>Anthony H. C.</h3>
        <div class="status">
            <div></div>
            <span>Online</span>
        </div>
        <button id="btnExcluir">Excluir</button>
        <button id="btnEditar">Editar</button>
    </div>



    <div class="membro">
        <img src="../images/iconeADM.png" alt="">
        <h3>Gustavo O.</h3>
        <div class="status">
            <div></div>
            <span>Online</span>
        </div>
        <button id="btnExcluir">Excluir</button>
        <button id="btnEditar">Editar</button>
    </div>



    <div class="membro">
        <img src="../images/iconeADM.png" alt="">
        <h3>Kauã Higa</h3>
        <div class="status">
            <div></div>
            <span>Online</span>
        </div>
        <button id="btnExcluir">Excluir</button>
        <button id="btnEditar">Editar</button>
    </div>



    <div class="membro">
        <img src="../images/iconeADM.png" alt="">
        <h3>Kauã Miguel</h3>
        <div class="status">
            <div></div>
            <span>Online</span>
        </div>
        <button id="btnExcluir">Excluir</button>
        <button id="btnEditar">Editar</button>
    </div>



    <div class="membro">
        <img src="../images/iconeADM.png" alt="">
        <h3>Pedro Lucas</h3>
        <div class="status">
            <div></div>
            <span>Online</span>
        </div>
        <button id="btnExcluir">Excluir</button>
        <button id="btnEditar">Editar</button>
    </div>



    <div class="membro">
        <img src="../images/iconeADM.png" alt="">
        <h3>Yasmin Letícia</h3>
        <div class="status">
            <div></div>
            <span>Online</span>
        </div>
        <button id="btnExcluir">Excluir</button>
        <button id="btnEditar">Editar</button>
    </div>



    <div class="membro">
        <img src="../images/iconeADM.png" alt="">
        <h3>Izabella A.</h3>
        <div class="status">
            <div></div>
            <span>Online</span>
        </div>
        <button id="btnExcluir">Excluir</button>
        <button id="btnEditar">Editar</button>
    </div>



    <div class="membro">
        <img src="../images/iconeADM.png" alt="">
        <h3>Agatha Arantes</h3>
        <div class="status">
            <div></div>
            <span>Online</span>
        </div>
        <button id="btnExcluir">Excluir</button>
        <button id="btnEditar">Editar</button>
    </div>



    <div class="membro">
        <img src="../images/iconeADM.png" alt="">
        <h3>Will Smith</h3>
        <div class="status">
            <div></div>
            <span>Online</span>
        </div>
        <button id="btnExcluir">Excluir</button>
        <button id="btnEditar">Editar</button>
    </div>

    
    <div class="membro">
        <img src="../images/iconeADM.png" alt="">
        <h3>Fulano</h3>
        <div class="status">
            <div></div>
            <span>Online</span>
        </div>
        <button id="btnExcluir">Excluir</button>
        <button id="btnEditar">Editar</button>
    </div>
    <div class="botao-add-conteiner">
        <a href="cadastrarMembroADM.php"><button class="botao-add">+</button></a>
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

    let botaoDeletar = document.querySelectorAll('.membro #btnExcluir');

        botaoDeletar.forEach(button => {
            button.addEventListener('click', function() {
            let animalDiv = this.parentElement;
            animalDiv.remove();
            alert('Membro excluído com sucesso!');
            });
        });

        let botaoEditar = document.querySelectorAll('.membro #btnEditar');

        botaoEditar.forEach(button => {
            button.addEventListener('click', function() {
                window.location.href = "editarPerfilMembro.php";
            });
        });
</script>

<?php
    include('../templates/default/bottomHTML.php');
?>