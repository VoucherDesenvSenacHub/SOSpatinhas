<?php

    // if (!isset($_SESSION['taLogado']) || $_SESSION['taLogado'] !== true || $_SESSION['id'] !== 'Admin') {
    // echo '<script type="text/javascript">
    //         alert("Você precisa estar logado como administrador para acessar esta página.");
    //         window.location.href = "loginADM.php";
    //       </script>';
    // exit();
    // }

  $cssLink  = '../../public/css/listaAdocao.css';
  $tipo = 'Adm';
  include('../../componentes/default/topHTML.php');
  include('../../componentes/cardListas.php');
?>

<h1>Lista de Adoções</h1>

<div class="pesquisar">
    <img src="../../public/images/lupa_pesquisa.png" alt="Lupa de pesquisa" class="lupa">
    <input type="text" placeholder="Pesquisar">
</div>

<div class="lista-adocao" id="lista-adocao">
    <?php
        $animais = [
            ["nome" => "Rochele", "imagem" => "../../public/images/Rectangle 71.png", "localizacao" => "Campo Grande - MS"],
            ["nome" => "Toby", "imagem" => "../../public/images/Toby.png", "localizacao" => "Campo Grande - MS"],
            ["nome" => "Rumi", "imagem" => "../../public/images/Rumi.png", "localizacao" => "Campo Grande - MS"],
            ["nome" => "Nobre", "imagem" => "../../public/images/Nobre.png", "localizacao" => "Campo Grande - MS"],
            ["nome" => "Sir Dougg", "imagem" => "../../public/images/Sir Dougg.png", "localizacao" => "Campo Grande - MS"],
            ["nome" => "Nigel", "imagem" => "../../public/images/Nigel.png", "localizacao" => "Campo Grande - MS"],
        ];

        $itensPorPagina = 6; 
        foreach ($animais as $index => $animal) {
            $pagina = floor($index / $itensPorPagina) + 1; 
            echo '<div class="item-adocao" data-pagina="' . $pagina . '">';
            gerarCard($animal['nome'], $animal['imagem'], $animal['localizacao']);
            echo '</div>';
        }
    ?>
    <div class="botao-add-container">
        <a href="cadastrarAdocao-ADM.php"><button class="botao-add">+</button></a>
    </div>
</div>

<div class="cta-slide">
    <button id="prev" class="pagination-btn">&lt;</button>
    <div class="altPag" id="paginacao">
       
    </div>
    <button id="next" class="pagination-btn">&gt;</button>
</div>

<script>

let links = document.querySelectorAll('.link');
    let valorAtual = 0;

    function activeLink() {
        links.forEach(link => link.classList.remove('active'));
        links[valorAtual].classList.add('active');
    }

    links.forEach((link, index) => {
        link.addEventListener('click', () => {
            valorAtual = index;
            activeLink();
        });
    });

    

    document.querySelectorAll('.btnExcluir').forEach(button => {
        button.addEventListener('click', function() {
            this.parentElement.remove();
            alert('Animal excluído com sucesso!');
        });
    });

    document.querySelectorAll('.btnEditar').forEach(button => {
        button.addEventListener('click', function() {
            window.location.href = "editarAdocao-ADM.php";
        });
    });


    let paginaAtual = 1;
    let totalPaginas = 0;

    document.addEventListener('DOMContentLoaded', function () {
        recalcularPaginacao();
    });

    

    function recalcularPaginacao() {
        const itensPorPagina = 6;
        const listaAdocao = document.getElementById('lista-adocao');
        const itens = listaAdocao.querySelectorAll('.item-adocao');
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
            link.className = 'link' + (i === paginaAtual ? ' active' : '');
            link.textContent = i;
            link.addEventListener('click', () => mudarPagina(i));
            paginacao.appendChild(link);
        }
    }

    function exibirPagina(pagina) {
        const itens = document.querySelectorAll('.item-adocao');
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
    include('../../componentes/default/bottomHTML.php');
?>