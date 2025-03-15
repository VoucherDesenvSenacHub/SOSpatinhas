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
        gerarCardArrecadacao("Freguês", "../images/listaArrecadacoes-ADM/fregues.png", "Em progresso", "Meta: R$ 1.000,00.");
        gerarCardArrecadacao("Nina", "../images/listaArrecadacoes-ADM/nina.png", "Em progresso",  "Meta: R$ 2.500,00.");
        gerarCardArrecadacao("Cascudo", "../images/listaArrecadacoes-ADM/cascudo.png", "Em progresso", "Meta: R$ 2.500,00.");
        gerarCardArrecadacao("Luke", "../images/listaArrecadacoes-ADM/luke.png", "Em progresso", "Meta: R$ 870,00.");
        gerarCardArrecadacao("Hulk", "../images/listaArrecadacoes-ADM/hulk.png", "Em progresso", "Meta: R$ 1.200,00.");
        gerarCardArrecadacao("Godinho", "../images/listaArrecadacoes-ADM/godinho.png", "Em progresso", "Meta: R$ 720,00.");
    ?>
    <div class="botao-add-container">
        <a href="cadastrarArrecadacao-ADM.php"><button class="botao-add">+</button></a>
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
</script>

<?php
    include('../templates/default/bottomHTML.php');
?>
