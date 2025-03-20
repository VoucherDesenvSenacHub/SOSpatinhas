<?php

    if (!isset($_SESSION['taLogado']) || $_SESSION['taLogado'] !== true || $_SESSION['id'] !== 'Admin') {
    echo '<script type="text/javascript">
            alert("Você precisa estar logado como administrador para acessar esta página.");
            window.location.href = "loginADM.php";
          </script>';
    exit();
    }

  $cssLink  = '../css/listaUsuariosADM.css';
  $tipo = 'Adm';
  include('../templates/default/topHTML.php');
  include ('../templates/cardUsuarioADM.php');
?>

<h1>Lista de Usuários</h1>
<div class="pesquisar">
    <img src="../images/lupa_pesquisa.png" alt="Lupa de pesquisa" class="lupa">
    <input type="text" placeholder="Pesquisar">
</div>

<div class="lista-de-usuarios" id="lista-de-usuarios">

    <?php
        $itensPorPagina = 12; 
        for ($i = 0; $i < 12; $i++) {
            $pagina = floor($i / $itensPorPagina) + 1;
            echo '<div class="item-usuario" data-pagina="' . $pagina . '">';
            gerarCardUsuario('Usuário', 'Online');
            echo '</div>';
        }
    ?>
</div>

<div class="cta-slide">
    <button id="prev" class="pagination-btn">&lt;</button>
    <div class="altPag" id="paginacao">

    </div>
    <button id="next" class="pagination-btn">&gt;</button>
</div>

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

    let botaoEditar = document.querySelectorAll('.membro #btnVer');

    botaoEditar.forEach(button => {
        button.addEventListener('click', function() {
            window.location.href = "perfilUsuario.php";
        });
    });

    document.addEventListener('DOMContentLoaded', () => {
        recalcularPaginacao();
    });

    let paginaAtual = 1;
    let totalPaginas = 0;

    function recalcularPaginacao() {
        const itensPorPagina = 12;
        const listaUsuarios = document.getElementById('lista-de-usuarios');
        const itens = listaUsuarios.querySelectorAll('.item-usuario');
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
        const itens = document.querySelectorAll('.item-usuario');
        itens.forEach((item) => {
            const paginaItem = parseInt(item.getAttribute('data-pagina'));
            if (paginaItem === pagina) {
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