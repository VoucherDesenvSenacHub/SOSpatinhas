<?php
  $cssLink  = '../css/listaEventosADM.css';
  $tipo = 'Adm';
  include('../templates/default/topHTML.php');
  include('../templates/cardListas.php');
?>
<h1>Lista de Eventos</h1>
<div class="pesquisar">
    <img src="../images/lupa_pesquisa.png" alt="Lupa de pesquisa" class="lupa">
    <input type="text" placeholder="Pesquisar">
</div>


<div class="lista-eventos" id="lista-eventos">
    <?php 
        gerarCardEventos('Feira do AuAu', '../images/feiraAuAu.png', '10/10/2021', 'Horto Florestal');
        gerarCardEventos('Adote um Amigo', '../images/AdoteAmigo.png', '15/10/2021', 'Parque dos Poderes');
        gerarCardEventos('Juntos por Eles', '../images/JuntosPEles.png', '20/10/2021', 'Bosque dos Ipês');
        gerarCardEventos('Ajude uma patinha', '../images/AjudeUPatinha.png', '25/10/2021', 'Parque das Nações');
        gerarCardEventos('Título', '../images/AjudeUPatinha.png', 'Sem data', 'Sem localidade');
        gerarCardEventos('Título', '../images/AjudeUPatinha.png', 'Sem data', 'Sem localidade');
    ?>
    <div class="botao-add-container">
        <a href="cadastrarEventos-ADM.php"><button class="botao-add">+</button></a>
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

    let botaoDeletar = document.querySelectorAll('.evento #btnExcluir');

    botaoDeletar.forEach(button => {
        button.addEventListener('click', function() {
        let animalDiv = this.parentElement;
        animalDiv.remove();
        alert('Animal excluído com sucesso!');
        });
    });

    let botaoEditar = document.querySelectorAll('.evento #btnEditar');

    botaoEditar.forEach(button => {
        button.addEventListener('click', function() {
            window.location.href = "editarEventos-ADM.php";
        });
    });
</script>

<?php
    include('../templates/default/bottomHTML.php');
?>