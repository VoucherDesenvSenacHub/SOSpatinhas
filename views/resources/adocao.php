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

    $animals = [];
    for ($i = 0; $i < 20; $i++) {
        $animals[] = [
            'nome' => 'Animal ' . ($i + 1),
            'tipo' => ($i % 2 == 0) ? 'Cachorro' : 'Gato',
            'sexo' => ($i % 2 == 0) ? 'Macho' : 'Fêmea',
            'idade' => rand(1, 15),
            'porte' => ($i % 3 == 0) ? 'Pequeno' : (($i % 3 == 1) ? 'Médio' : 'Grande')
        ];
    }

    $filteredAnimals = array_filter($animals, function ($animal) use ($sexoFilter, $idadeFilter, $porteFilter, $animalFilter) {
        if ($sexoFilter && $animal['sexo'] !== $sexoFilter) {
            return false;
        }

        if ($idadeFilter) {
            if ($idadeFilter === "< 1" && $animal['idade'] >= 1) return false;
            if ($idadeFilter === "<= 5" && $animal['idade'] > 5) return false;
            if ($idadeFilter === "<= 10" && $animal['idade'] > 10) return false;
            if ($idadeFilter === "> 10" && $animal['idade'] <= 10) return false;
        }

        if ($porteFilter && $animal['porte'] !== $porteFilter) {
            return false;
        }

        if ($animalFilter && $animal['tipo'] !== $animalFilter) {
            return false;
        }

        return true;
    });

    $itensPorPag = 9;
    $paginaAtual = isset($_GET['pagina']) ? (int) $_GET['pagina'] : 1;
    $offset = ($paginaAtual - 1) * $itensPorPag; 
    $registrosTotal = count($filteredAnimals);
    $totalPag = ceil($registrosTotal / $itensPorPag);

    $rowAnimal = array_slice($filteredAnimals, $offset, $itensPorPag);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/adocao.css">
</head>
<body>
    <?php include ('../templates/navbarUser.php') ?>
    

    <section class="corpo container">
        <section class="top-texts">
            <h1>Adote um melhor amigo!</h1>
            <p>Adotar um animal salva vidas e traz alegria. Muitos cães e gatos esperam por um lar. Ao adotar, você ganha um amigo fiel e combate o abandono. Adote e transforme vidas!</p>
        </section>
        

        <section class="filter">

            <form method="get" class="form-filter">

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
                    <input type="submit" value="Filtrar" class="filter-button">
                </div>
            </form>
        </section>
        

        <div class="card-container">
            <?php
                foreach ($rowAnimal as $animal){
                    include ('../templates/animalCard.php');
                };
            ?>
        </div>
        
        <div class="paginacao">
            <?php
                if($paginaAtual > 1){
                    echo '<a href="?pagina=' . ($paginaAtual - 1) . '">&lt;</a>';
                }
    
                for ($i = 1; $i <= $totalPag; $i++) {
                    if ($i == $paginaAtual) {
                        echo '<a href="?pagina=' . $i . '" class="active">' . $i . '</a>';
                    } else {
                        echo '<a href="?pagina=' . $i . '">' . $i . '</a>';
                    }
                }
    
                if ($paginaAtual < $totalPag) {
                    echo '<a href="?pagina=' . ($paginaAtual + 1) . '">&gt;</a>';
                }
    
                // $banco->fechar();
            ?>
        </div>

    </section>
    <?php include ('../templates/footerUser.php') ?>
</body>
</html>