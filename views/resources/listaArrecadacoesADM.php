<?php
  $cssLink  = '../css/listaArrecadacaoADM.css';
  $tipo = 'Adm';
  include('../templates/default/topHTML.php');
  include('../templates/cardListas.php');
?>

<h1>Lista de Arrecadações</h1>

<div class="pesquisar">
    <img src="../images/lupa_pesquisa.png" alt="Lupa de pesquisa" class="lupa">
    <input type="text" placeholder="Pesquisar">
</div>

<div class="lista-arrecadacoes" id="lista-arrecadacoes">
    <?php
        $arrecadacoes = [
            ["nome" => "Rochele", "imagem" => "../images/Rectangle 71.png", "localizacao" => "Campo Grande - MS"],
            ["nome" => "Toby", "imagem" => "../images/Toby.png", "localizacao" => "Campo Grande - MS"],
            ["nome" => "Rumi", "imagem" => "../images/Rumi.png", "localizacao" => "Campo Grande - MS"],
            ["nome" => "Nobre", "imagem" => "../images/Nobre.png", "localizacao" => "Campo Grande - MS"],
            ["nome" => "Sir Dougg", "imagem" => "../images/Sir Dougg.png", "localizacao" => "Campo Grande - MS"],
            ["nome" => "Nigel", "imagem" => "../images/Nigel.png", "localizacao" => "Campo Grande - MS"],
            ["nome" => "Nigel", "imagem" => "../images/Nigel.png", "localizacao" => "Campo Grande - MS"],
            ["nome" => "Nigel", "imagem" => "../images/Nigel.png", "localizacao" => "Campo Grande - MS"],
            ["nome" => "Nigel", "imagem" => "../images/Nigel.png", "localizacao" => "Campo Grande - MS"],
        ];

        $itensPorPagina = 6;
        foreach ($arrecadacoes as $index => $arrecadacoes) {
            $pagina = floor($index / $itensPorPagina) + 1;
            echo '<div class="item-arrecadacao" data-paginas="' . $pagina . '">';
            gerarCard($arrecadacoes['nome'], $animal['imagem'], $animal['localizacao']);
            echo '</div>';
        }

    ?>
    <div class="botao-add-container">
        <a href="cadastrarArrecadacao-ADM.php"><button class="botao-add">+</button></a>
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
            window.location.href = "editarArrecadacao-ADM.php";
        });
    });

    let paginaAtual = 1;
    let totalPaginas = 0;

    document.addEventListener('DOMContentLoaded', function () {
        recalcularPaginacao();
    });

    function recalcularPaginacao() {
        const itensPorPagina = 6;
        const listaAdocao = document.getElementById('lista-arrecadacoes');
        const itens = listaAdocao.querySelectorAll('.item-arrecadacao');
        totalPaginas = Math.ceil(itens.length / itensPorPagina);

        itens.forEach((item, index) => {
            const pagina = math.floor(index / itensPorPagina) + 1;
            item.setAttribute('data-pagina', pagina);
        });

        atualizarPaginacao(totalPaginas);

        exibirPagina(paginaAtual);
    }

    function atualizarPaginacao(totalPaginas) {
        const paginacao = document.getElementById('paginacao');
        paginacao.innerHTML = '';

        for (let i = 1; i <= totalPaginas; i++) {
            cosnt link = document.createElement('li');
            link.className = 'link' + (i === paginaAtual ? ' active ' : '');
            link.textContent = i;
            link.addEventListener('clicl', () => mudarPagina(i));
            paginacao.appendChild(link);
        }
    }

    function exibirPagina(pagina) {
        const itens = document.querySelectorAll('.item-arrecadacao');
        itens.forEach((item) => {
            const paginaItem = parseInt(item.getAttribute('data-pagina'));
            if (paginaItem === pagina) {
                item.style.displat = 'block';
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

    document.getElementById('prev').addEventListener('click', function () => mudarPagina(paginaAtual - 1));
    document.getElementById('next').addEventListener('click', function () => mudarPagina(paginaAtual + 1));
</script>

<?php
    include('../templates/default/bottomHTML.php');
?>
