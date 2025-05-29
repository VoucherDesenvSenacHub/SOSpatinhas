<!-- <?php
    // require_once '../../config/database.php';
    // $banco = new Banco();
    
    // $filtros = [];
    // $itensPorPag = 9;
    // $paginaAtual = isset($_GET['pagina']) ? (int) $_GET['pagina'] : 1;
    // $offset = ($paginaAtual - 1) * $itensPorPag; 
    

    // if(isset($_GET['sexo-filter']) && $_GET['sexo-filter'] != "Selecionar"){
    //     $tipoFilter = $banco->escape($_GET['sexo-filter']);
    //     $filtros[] = "sexo = '$tipoFilter'";
    // }

    // if(isset($_GET['idade-filter']) && $_GET['idade-filter'] != "Selecionar"){
    //     $tipoFilter = $banco->escape($_GET['idade-filter']);
    //     $filtros[] = "idade $tipoFilter"; //tranformar em string 
    // }

    // if(isset($_GET['porte-filter']) && $_GET['porte-filter'] != "Selecionar"){
    //     $tipoFilter = $banco->escape($_GET['porte-filter']);
    //     $filtros[] = "porte = '$tipoFilter'";
    // }

    // if(isset($_GET['animal-filter']) && $_GET['animal-filter'] != "Selecionar"){
    //     $tipoFilter = $banco->escape($_GET['animal-filter']);
    //     $filtros[] = "tipo = '$tipoFilter'";
    // }

    // $query = 'SELECT * FROM animal';
    // if(count($filtros) > 0){
    //     $query .= ' WHERE ' . implode(' AND ', $filtros);
    // }

    // $query .= " LIMIT $itensPorPag OFFSET $offset";
    // $resultado = $banco->query($query);
    // $rowAnimal = $banco->fetch_all($resultado);

    // $queryTotal = 'SELECT COUNT(*) as total FROM animal';
    // if(count($filtros) > 0){
    //     $queryTotal .= ' WHERE ' . implode(' AND ', $filtros);
    // }

    // $resultadoTotal = $banco->query($queryTotal);
    // $registrosTotal = $resultadoTotal ? $banco->fetch_all($resultadoTotal)[0]['total'] : 0;
    // $registrosTotal = 20;

    // $totalPag = ceil($registrosTotal / $itensPorPag);
?> -->

<?php
    $sexoFilter = isset($_GET['sexo-filter']) && $_GET['sexo-filter'] !== "Selecionar" ? $_GET['sexo-filter'] : null;
    $idadeFilter = isset($_GET['idade-filter']) && $_GET['idade-filter'] !== "Selecionar" ? $_GET['idade-filter'] : null;
    $porteFilter = isset($_GET['porte-filter']) && $_GET['porte-filter'] !== "Selecionar" ? $_GET['porte-filter'] : null;
    $animalFilter = isset($_GET['animal-filter']) && $_GET['animal-filter'] !== "Selecionar" ? $_GET['animal-filter'] : null;

   

    $filteredAnimais = array_filter($animais, function ($animal) use ($sexoFilter, $idadeFilter, $porteFilter, $animalFilter) {
        if ($sexoFilter && $animal['SEXO'] !== $sexoFilter) {
            return false;
        }

        if ($idadeFilter) {
            if ($idadeFilter === "< 1" && $animal['IDADE'] >= 1) return false;
            if ($idadeFilter === "<= 5" && $animal['IDADE'] > 5) return false;
            if ($idadeFilter === "<= 10" && $animal['IDADE'] > 10) return false;
            if ($idadeFilter === "> 10" && $animal['IDADE'] <= 10) return false;
        }

        if ($porteFilter && $animal['PORTE'] !== $porteFilter) {
            return false;
        }

        if ($animalFilter && $animal['TIPO_ANIMAL'] !== $animalFilter) {
            return false;
        }

        return true;
    });

    $itensPorPag = isset($_GET['itensPorPag']) ? (int) $_GET['itensPorPag'] : 9; 
    $paginaAtual = isset($_GET['pagina']) ? (int) $_GET['pagina'] : 1;
    $offset = ($paginaAtual - 1) * $itensPorPag;
    
    $registrosTotal = count($filteredAnimais);
    $totalPag = ceil($registrosTotal / $itensPorPag);
    $rowAnimal = array_slice($filteredAnimais, $offset, $itensPorPag);
    
    if (isset($_GET['ajax']) && $_GET['ajax'] == 1) {
        foreach ($rowAnimal as $animal) {
            include('../../app/componentes/animalCard.php'); 
        }
        exit; 
    }
?>



<?php
    $cssLink  = 'public/css/adocao.css';
    include('app/componentes/default/topHTML.php');
?>

<section class="top-texts">
<h1>Adote um melhor amigo!</h1>
<p>Adotar um animal salva vidas e traz alegria. Muitos cães e gatos esperam por um lar. Ao adotar, você ganha um amigo fiel e combate o abandono. Adote e transforme vidas!</p>
</section>


<section class="filter">
    <form method="get" class="form-filter" id="frmFiltroAdocao">
        <div class="container-select">
            <h2>Sexo</h2>
            <select name="sexo-filter" id="sexo-select">
                <option class="filter-option" value="Selecionar">-- Selecionar --</option>
                <option class="filter-option" value="Macho">Macho</option>
                <option class="filter-option" value="Fêmea">Fêmea</option>
            </select>
        </div>
        
        <div class="container-select">
            <h2>Idade</h2>
            <select name="idade-filter" id="idade-select">
                <option class="filter-option" value="Selecionar">-- Selecionar --</option>
                <option class="filter-option" value="< 1">-1 ano</option>
                <option class="filter-option" value="<= 5">Até 5 anos</option>
                <option class="filter-option" value="<= 10">Até 10 anos</option>
                <option class="filter-option" value="> 10">+10 anos</option>
            </select>
        </div>
        
        <div class="container-select">
            <h2>Porte</h2>
            <select name="porte-filter" id="porte-select">
                <option class="filter-option" value="Selecionar">-- Selecionar --</option>
                <option class="filter-option" value="Pequeno">Pequeno</option>
                <option class="filter-option" value="Médio">Médio</option>
                <option class="filter-option" value="Grande">Grande</option>
            </select>
        </div>
        
        <div class="container-select">
            <h2>Animal</h2>
            <select name="animal-filter" id="animal-select">
                <option class="filter-option" value="Selecionar">-- Selecionar --</option>
                <option class="filter-option" value="Cachorro">Cachorro</option>
                <option class="filter-option" value="Gato">Gato</option>
                <option class="filter-option" value="Passaro">Pássaro</option>
                <option class="filter-option" value="Roedor">Roedor</option>
            </select>
        </div>
        
        <div class="box2">
            <?php
                $funcaoClick = "submitSimples(filtros)";
                $titulo = "Filtrar"; 
                include("app/componentes/componenteButton.php");

            ?>
        </div>
    </form>
</section>


<div class="card-container">
    <?php
        foreach ($rowAnimal as $animal){
            include('app/componentes/animalCard.php'); 
        };
    ?>
</div>


<div class="paginacao">
    <?php
    if ($paginaAtual > 1) {
        echo '<a href="?pagina=' . ($paginaAtual - 1) . '">&lt; </a>';
    }

    for ($i = 1; $i <= $totalPag; $i++) {
        if ($i == $paginaAtual) {

            echo '<a href="?pagina=' . $i . '" class="active">' . $i . '</a>';
        } else {

            echo '<a href="?pagina=' . $i . '">' . $i . '</a>';
        }
    }

    // Se não estiver na última página, exibe o link "Próxima"
    if ($paginaAtual < $totalPag) {
        echo '<a href="?pagina=' . ($paginaAtual + 1) . '"> &gt;</a>';
    }
    ?>
</div>


<div class="vermais">
    <?php if ($paginaAtual < $totalPag) : ?>
        <button id="btnVerMais" data-proxima="<?= $paginaAtual + 1 ?>">Ver Mais</button>
    <?php endif; ?>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        let btnVerMais = document.getElementById("btnVerMais");

        if (btnVerMais) {
            btnVerMais.addEventListener("click", function () {
            let proximaPagina = btnVerMais.getAttribute("data-proxima");

            fetch("?pagina=" + proximaPagina + "&ajax=1")
                .then(response => response.text())
                .then(data => {

                    document.querySelector(".card-container").insertAdjacentHTML('beforeend', data);

                    let novaPagina = parseInt(proximaPagina) + 1;
                    btnVerMais.setAttribute("data-proxima", novaPagina);

                    if (novaPagina > <?= $totalPag ?>) {
                        btnVerMais.style.display = "none";
                    }
                })
                .catch(error => console.error("Erro ao carregar mais itens:", error));
            });
        }
    });


    // function carregarAnimais(pagina = 1) {
    // let largura = window.innerWidth;
    // let itensPorPag = largura <= 768 ? 8 : 9;

    // fetch(`adocao.php?pagina=${pagina}&ajax=1&itensPorPag=${itensPorPag}`)
    //     .then(response => response.text())
    //     .then(data => {
    //         document.querySelector('.card-container').innerHTML = data;
    //     });
    // }




</script>

<?php
    include('app/componentes/default/bottomHTML.php');
?>