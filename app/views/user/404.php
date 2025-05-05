<?php
    $cssLink  = '../../public/css/404.css';
    include('../../componentes/default/topHTML.php');
?>

<div class="conteudo">
    <div class="texto">
        <h1>404</h1>
        <p>Oh não! Parece que a página que você está procurando não existe!</p>
        <button onclick="window.location.href=`/index.php?page=paginaInicio.php`">Voltar para o inicio</button>
    </div>
    
    <img src="../../public/images/default/404Cat.png" alt="">
</div>


<?php
    include('../../componentes/default/bottomHTML.php');
?>