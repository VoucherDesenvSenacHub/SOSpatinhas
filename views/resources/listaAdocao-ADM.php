<?php
  $cssLink  = '../css/listaAdocao-ADM.css';
  $tipo = 'Adm';
  include('../templates/default/topHTML.php');
  include('../templates/cardListas.php');
?>

<h1>Lista de Adoções</h1>

<div class="pesquisar">
    <img src="../images/lupa_pesquisa.png" alt="Lupa de pesquisa" class="lupa">
    <input type="text" placeholder="Pesquisar">
</div>

<div class="lista-adocao" id="lista-adocao">
    <?php
        gerarCard("Rochele", "../images/Rectangle 71.png");
        gerarCard("Toby", "../images/Toby.png");
        gerarCard("Rumi", "../images/Rumi.png");
        gerarCard("Nobre", "../images/Nobre.png");
        gerarCard("Sir Dougg", "../images/Sir Dougg.png");
        gerarCard("Nigel", "../images/Nigel.png");
    ?>
    <div class="botao-add-container">
        <a href="cadastrarAdocao-ADM.php"><button class="botao-add">+</button></a>
    </div>
</div>

<div class="cta-slide">
    <button id="prev" class="pagination-btn">&lt;</button>
    <div class="altPag" id="paginacao">
        <li class="link active" value="1">1</li>
        <li class="link" value="2">2</li>
        <li class="link" value="3">3</li>
        <button id="next" class="pagination-btn">&gt;</button>
    </div>
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
            alert('Animal excluído com sucesso!');
        });
    });

    document.querySelectorAll('.btnEditar').forEach(button => {
        button.addEventListener('click', function() {
            window.location.href = "editarAdocao-ADM.php";
        });
    });
</script>

<?php
    include('../templates/default/bottomHTML.php');
?>
