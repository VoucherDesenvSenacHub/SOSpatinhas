<?php
include($linkDoCard); // Importa o componente de card

function gerarPaginacao($dados, $itens_por_pagina, $pagina_atual, $pagina_destino) {
    $total_registros = count($dados);
    $total_paginas = ceil($total_registros / $itens_por_pagina);
    $inicio = ($pagina_atual - 1) * $itens_por_pagina;
    $registros_pagina = array_slice($dados, $inicio, $itens_por_pagina);

    // Renderiza os cards da página atual
    foreach ($registros_pagina as $item) {
        gerarCard($item['nome'], $item['imagem'], $item['localizacao']);
    }

    // Renderiza os botões de paginação
    echo '<div class="cta-slide">';
    echo '<button id="prev" class="pagination-btn" onclick="mudarPagina('.($pagina_atual - 1).')">&lt;</button>';
    echo '<ul class="altPag" id="paginacao">';
    
    for ($i = 1; $i <= $total_paginas; $i++) {
        $activeClass = ($i == $pagina_atual) ? 'active' : '';
        echo '<li class="link '.$activeClass.'" onclick="mudarPagina('.$i.')">'.$i.'</li>';
    }

    echo '</ul>';
    echo '<button id="next" class="pagination-btn" onclick="mudarPagina('.($pagina_atual + 1).')">&gt;</button>';
    echo '</div>';

    // Script JavaScript para controlar a navegação sem recarregar a página
    echo '<script>
        function mudarPagina(pagina) {
            if (pagina < 1 || pagina > '.$total_paginas.') return;
            window.location.href = "'.$pagina_destino.'?page=" + pagina;
        }
    </script>';
}
?>





<!-- teste -->
<!-- <?php
// $cssLink  = '../css/listaAdocao-ADM.css';
// $tipo = 'Adm';
// include('../templates/default/topHTML.php');
// $linkDoCard = '../templates/cardListas.php';
// include('../templates/paginacao.php'); // Componente de paginação

// // Definição do array de registros
// $animais = [
//     ["nome" => "Rochele", "imagem" => "../images/Rectangle 71.png", "localizacao" => "Campo Grande - MS"],
//     ["nome" => "Toby", "imagem" => "../images/Toby.png", "localizacao" => "Campo Grande - MS"],
//     ["nome" => "Rumi", "imagem" => "../images/Rumi.png", "localizacao" => "Campo Grande - MS"],
//     ["nome" => "Nobre", "imagem" => "../images/Nobre.png", "localizacao" => "Campo Grande - MS"],
//     ["nome" => "Sir Dougg", "imagem" => "../images/Sir Dougg.png", "localizacao" => "Campo Grande - MS"],
//     ["nome" => "Nigel", "imagem" => "../images/Nigel.png", "localizacao" => "Campo Grande - MS"],
//     ["nome" => "Rochele2", "imagem" => "../images/Rectangle 71.png", "localizacao" => "Campo Grande - MS"],
//     ["nome" => "Toby2", "imagem" => "../images/Toby.png", "localizacao" => "Campo Grande - MS"],
//     ["nome" => "Rumi2", "imagem" => "../images/Rumi.png", "localizacao" => "Campo Grande - MS"],
//     ["nome" => "Nobre2", "imagem" => "../images/Nobre.png", "localizacao" => "Campo Grande - MS"],
//     ["nome" => "Sir2 Dougg", "imagem" => "../images/Sir Dougg.png", "localizacao" => "Campo Grande - MS"],
//     ["nome" => "Nigel2", "imagem" => "../images/Nigel.png", "localizacao" => "Campo Grande - MS"],
//     ["nome" => "Rochele3", "imagem" => "../images/Rectangle 71.png", "localizacao" => "Campo Grande - MS"],
//     ["nome" => "Toby3", "imagem" => "../images/Toby.png", "localizacao" => "Campo Grande - MS"],
//     ["nome" => "Rumi3", "imagem" => "../images/Rumi.png", "localizacao" => "Campo Grande - MS"],
//     ["nome" => "Nobre3", "imagem" => "../images/Nobre.png", "localizacao" => "Campo Grande - MS"],
//     ["nome" => "Sir3 Dougg", "imagem" => "../images/Sir Dougg.png", "localizacao" => "Campo Grande - MS"],
//     ["nome" => "Nigel3", "imagem" => "../images/Nigel.png", "localizacao" => "Campo Grande - MS"]
// ];

// $itens_por_pagina = 6;
// $pagina_atual = isset($_GET['page']) ? intval($_GET['page']) : 1;
?>

<h1>Lista de Adoções</h1>

<div class="pesquisar">
    <img src="../images/lupa_pesquisa.png" alt="Lupa de pesquisa" class="lupa">
    <input type="text" placeholder="Pesquisar">
</div>

<div class="lista-adocao">
    <?php //gerarPaginacao($animais, $itens_por_pagina, $pagina_atual, 'listaAdocao-ADM.php'); ?>
</div>

<?php //include('../templates/default/bottomHTML.php'); ?> -->