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
        for ($i = 0; $i < 12; $i++){
            gerarCardUsuario('Usuário', 'Online');
        }
    ?>

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

<!-- parte da animação fake do row-slide -->
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
</script>

<?php
    include('../templates/default/bottomHTML.php');
?>