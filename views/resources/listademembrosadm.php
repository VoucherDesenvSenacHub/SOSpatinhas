<?php

    // if (!isset($_SESSION['taLogado']) || $_SESSION['taLogado'] !== true || $_SESSION['id'] !== 'Admin') {
    // echo '<script type="text/javascript">
    //         alert("Você precisa estar logado como administrador para acessar esta página.");
    //         window.location.href = "loginADM.php";
    //       </script>';
    // exit();
    // }

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
         $membro = [
              ["nome" => "Will Smith", "status" => "Online"],
              ["nome" => "Everton Silva", "status" => "Online"],
              ["nome" => "Anthony H. C.", "status" => "Online"],
              ["nome" => "Gustavo O.", "status" => "Online"],
              ["nome" => "Kauã Higa", "status" => "Online"],
              ["nome" => "Kauã Miguel", "status" => "Online"],
              ["nome" => "Pedro Lucas", "status" => "Online"],
              ["nome" => "Yasmin Letícia", "status" => "Online"],
              ["nome" => "Izabella A.", "status" => "Online"],
              ["nome" => "Agatha Arantes", "status" => "Online"],
              ["nome" => "Will Smith", "status" => "Online"],
              ["nome" => "Fulano", "status" => "Online"],
         ];


            $itensPorPagina = 12;
            foreach ($membro as $index => $membros) {
                $pagina = floor($index / $itensPorPagina) + 1;
                echo '<div class="item-membro" data-pagina="' . $pagina . '">';
                gerarCardMembros($membros['nome'], $membros['status']);
                echo '</div>';
            }
    ?>

    <div class="botao-add-conteiner">
        <a href="cadastrarMembroADM.php"><button class="botao-add">+</button></a>
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

    let paginaAtual = 1;
    let totalPaginas = 0;

    document.addEventListener('DOMContentLoaded', () => {
        recalcularPaginacao();
    });

    function recalcularPaginacao() {
        const itensPorPagina = 12;
        const listaMembros = document.getElementById('lista-de-membros');
        const itens = listaMembros.querySelectorAll('.item-membro');
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

    function exibirPagina(pagina){
        const itens = document.querySelectorAll('.item-membro');
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
        if(pagina < 1 || pagina > totalPaginas) return
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