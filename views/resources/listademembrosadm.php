<?php
  $cssLink  = '../css/listamembrosADM.css';
  $tipo = 'Adm';
  include('../templates/default/topHTML.php');
  include ('../templates/cardUsuarioADM.php');
?>

<h1>Lista de membros</h1>
<div class="pesquisar">
    <img src="../images/lupa_pesquisa.png" alt="Lupa de pesquisa" class="lupa">
    <input type="text" placeholder="Pesquisar">
</div>

<div class="lista-de-membros" id="lista-de-membros">


    <?php 
       gerarCardMembros('Will Smith', 'Online');
       gerarCardMembros('Everton Silva', 'Online');
       gerarCardMembros('Anthony H. C.', 'Online');  
       gerarCardMembros('Gustavo O.', 'Online');
       gerarCardMembros('Kauã Higa', 'Online');
       gerarCardMembros('Kauã Miguel', 'Online');
       gerarCardMembros('Pedro Lucas', 'Online');
       gerarCardMembros('Yasmin Letícia', 'Online');
       gerarCardMembros('Izabella A.', 'Online');
       gerarCardMembros('Agatha Arantes', 'Online');
       gerarCardMembros('Will Smith', 'Online');
       gerarCardMembros('Fulano', 'Online');
    ?>

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