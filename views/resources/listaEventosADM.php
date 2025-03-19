<?php

    if (!isset($_SESSION['taLogado']) || $_SESSION['taLogado'] !== true || $_SESSION['id'] !== 'Admin') {
    echo '<script type="text/javascript">
            alert("Você precisa estar logado como administrador para acessar esta página.");
            window.location.href = "loginADM.php";
          </script>';
    exit();
    }

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
        $eventos = [
            ["nome" => "Feira do AuAu", "imagem" => "../images/feiraAuAu.png", "data" => "10/10/2021", "local" => "Horto Florestal"],
            ["nome" => "Adote um Amigo", "imagem" => "../images/AdoteAmigo.png", "data" => "15/10/2021", "local" => "Parque dos Poderes"],
            ["nome" => "Juntos por Eles", "imagem" => "../images/JuntosPEles.png", "data" => "20/10/2021", "local" => "Bosque dos Ipês"],
            ["nome" => "Ajude uma patinha", "imagem" => "../images/AjudeUPatinha.png", "data" => "25/10/2021", "local" => "Parque das Nações"],
            ["nome" => "Título", "imagem" => "../images/AjudeUPatinha.png", "data" => "Sem data", "local" => "Sem localidade"],
            ["nome" => "Título", "imagem" => "../images/AjudeUPatinha.png", "data" => "Sem data", "local" => "Sem localidade"],
        ];

        $itensPorPagina = 6;
        foreach ($eventos as $index => $eventos) {
            $pagina = floor($index / $itensPorPagina) + 1;
            echo '<div class="item-evento" data-paginas="' . $pagina . '">';
            gerarCardEventos($eventos['nome'], $eventos['imagem'], $eventos['data'], $eventos['local']);
            echo '</div>';
        }

    ?>
    <div class="botao-add-container">
        <a href="cadastrarEventos-ADM.php"><button class="botao-add">+</button></a>
    </div>
</div>
<div class="cta-slide">
    <button id="prev" class="pagination-btn">&lt;</button>
    <div class="altPag" id="paginacao">
        
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

    let paginaAtual = 1;
    let totalPaginas = 0;

    document.addEventListener('DOMContentLoaded', function () {
        recalcularPaginacao();
    });

    function recalcularPaginacao(){
        const itensPorPagina = 6;
        const listaEventos = document.getElementById('lista-eventos');
        const itens = listaEventos.querySelectorAll('.item-evento');
        totalPaginas = Math.ceil(itens.length / itensPorPagina);

        itens.forEach((item, index) => {
            const pagina = Math.floor(index / itensPorPagina) + 1;
            item.setAttribute('data-pagina', pagina);

        });

        atualizarPaginacao(totalPaginas);

        exibirPagina(paginaAtual);
    }

    function atualizarPaginacao(totalPaginas) {
        const paginacao = document.getElementById('paginacao');
        paginacao.innerHTML = '';

        for (let i = 1; i <= totalPaginas; i++) {
            const link = document.createElement('li');
            link.classList = 'link' + (i === paginaAtual ? ' active ' : '');
            link.textContent = i;
            link.addEventListener('click', () => mudarPagina(i));
            paginacao.appendChild(link);
        }
    }

    function exibirPagina(pagina) {
        const itens = document.querySelectorAll('.item-evento');
        itens.forEach((item) => {
            const paginaItem = parseInt(item.getAttribute('data-pagina'));
            if (paginaItem == pagina) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    }

    function mudarPagina(pagina) {
        if (pagina < 1 || pagina > totalPaginas) return;
        paginaAtual = pagina;
        exibirPagina(paginaAtual);
        atualizarPaginacao(totalPaginas);
    }

    document.getElementById('prev').addEventListener('click', () => mudarPagina(paginaAtual - 1));
    document.getElementById('next').addEventListener('click', () => mudarPagina(paginaAtual + 1));



</script>

<?php
    include('../templates/default/bottomHTML.php');
?>