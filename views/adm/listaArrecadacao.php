<?php
  $cssLink  = '../../public/css/listaArrecadacao.css';
  $tipo = 'Adm';
  include('../../public/componentes/default/topHTML.php');
  include('../../public/componentes/cardListas.php');
?>

<h1>Lista de Arrecadações</h1>

<div class="pesquisar">
    <img src="../../public/images/lupa_pesquisa.png" alt="Lupa de pesquisa" class="lupa">
    <input type="text" placeholder="Pesquisar">
</div>

<div class="lista" id="listaArrecadacao">
    <?php
        $arrecadacoes = [
            ["nome" => "Rochele", "imagem" => "../../public/images/Rectangle 71.png", "progresso" => "Em progresso", "meta" => "Meta: R$ 1000,00"],
            ["nome" => "Toby", "imagem" => "../../public/images/Toby.png", "progresso" => "Em progresso", "meta" => "Meta: R$ 2500,00"],
            ["nome" => "Rumi", "imagem" => "../../public/images/Rumi.png", "progresso" => "Em progresso", "meta" => "Meta: R$ 2500,00"],
            ["nome" => "Nobre", "imagem" => "../../public/images/Nobre.png", "progresso" => "Em progresso", "meta" => "Meta: R$ 870,00"],
            ["nome" => "Sir Dougg", "imagem" => "../../public/images/Sir Dougg.png", "progresso" => "Em progresso", "meta" => "Meta: R$ 1200,00"],
            ["nome" => "Nigel", "imagem" => "../../public/images/Nigel.png", "progresso" => "Em progresso", "meta" => "Meta: R$ 720,00"],
        ];

        $itensPorPagina = 6;
        foreach ($arrecadacoes as $index => $arrecadacoes) {
            $pagina = floor($index / $itensPorPagina) + 1;
            echo '<div class="item" data-pagina="' . $pagina . '">';
            gerarCardArrecadacao($arrecadacoes['nome'], $arrecadacoes['imagem'], $arrecadacoes['progresso'], $arrecadacoes['meta']);
            echo '</div>';
        }
    ?>
    <div class="btnAddContainer">
        <a href="cadastrarArrecadacao.php"><button class="btnAdd">+</button></a>
    </div>
</div>

<div class="ctaSlide">
    <button id="prev" class="btnPagination">&lt;</button>
    <div class="altPag" id="paginacao">
        
    </div>
    <button id="next" class="btnPagination">&gt;</button>
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

    document.querySelectorAll('.btnExcluir').forEach(button => {
        button.addEventListener('click', function() {
            this.parentElement.remove();
            alert('Arrecadação excluída com sucesso!');
        });
    });

    document.querySelectorAll('.btnEditar').forEach(button => {
        button.addEventListener('click', function() {
            window.location.href = "editarArrecadacao.php";
        });
    });

    let paginaAtual = 1;
    let totalPaginas = 0;

    document.addEventListener('DOMContentLoaded', function () {
        recalcularPaginacao();
    });

    function recalcularPaginacao() {
        const itensPorPagina = 6;
        const listaAdocao = document.getElementById('listaArrecadacao');
        const itens = listaAdocao.querySelectorAll('.item');
        totalPaginas = Math.ceil(itens.length / itensPorPagina);

        itens.forEach((item, index) => {
            const pagina = Math.floor(index / itensPorPagina) + 1;
            item.setAttribute('dataPagina', pagina);
        });

        atualizarPaginacao(totalPaginas);

        exibirPagina(paginaAtual);
    }

    function atualizarPaginacao(totalPaginas) {
        const paginacao = document.getElementById('paginacao');
        paginacao.innerHTML = '';

        for (let i = 1; i <= totalPaginas; i++) {
            const link = document.createElement('li');
            link.className = 'link' + (i === paginaAtual ? ' active ' : '');
            link.textContent = i;
            link.addEventListener('click', () => mudarPagina(i));
            paginacao.appendChild(link);
        }
    }

    function exibirPagina(pagina) {
        const itens = document.querySelectorAll('.item');
        itens.forEach((item) => {
            const paginaItem = parseInt(item.getAttribute('dataPagina'));
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

    document.getElementById('prev').addEventListener('click',  () => mudarPagina(paginaAtual - 1));
    document.getElementById('next').addEventListener('click',  () => mudarPagina(paginaAtual + 1));
</script>

<?php
    include('../../public/componentes/default/bottomHTML.php');
?>
