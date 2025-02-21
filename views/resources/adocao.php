<?php
    require_once '../../config/database.php';
    $banco = new Banco();
    
    $filtros = [];
    $itensPorPag = 9;
    $paginaAtual = isset($_GET['pagina']) ? (int) $_GET['pagina'] : 1;
    $offset = ($paginaAtual - 1) * $itensPorPag; 
    

    if(isset($_GET['sexo-filter']) && $_GET['sexo-filter'] != "Selecionar"){
        $tipoFilter = $banco->escape($_GET['sexo-filter']);
        $filtros[] = "sexo = '$tipoFilter'";
    }

    if(isset($_GET['idade-filter']) && $_GET['idade-filter'] != "Selecionar"){
        $tipoFilter = $banco->escape($_GET['idade-filter']);
        $filtros[] = "idade $tipoFilter"; //tranformar em string 
    }

    if(isset($_GET['porte-filter']) && $_GET['porte-filter'] != "Selecionar"){
        $tipoFilter = $banco->escape($_GET['porte-filter']);
        $filtros[] = "porte = '$tipoFilter'";
    }

    if(isset($_GET['animal-filter']) && $_GET['animal-filter'] != "Selecionar"){
        $tipoFilter = $banco->escape($_GET['animal-filter']);
        $filtros[] = "tipo = '$tipoFilter'";
    }

    $query = 'SELECT * FROM animal';
    if(count($filtros) > 0){
        $query .= ' WHERE ' . implode(' AND ', $filtros);
    }

    $query .= " LIMIT $itensPorPag OFFSET $offset";
    $resultado = $banco->query($query);
    $rowAnimal = $banco->fetch_all($resultado);

    $queryTotal = 'SELECT COUNT(*) as total FROM animal';
    if(count($filtros) > 0){
        $queryTotal .= ' WHERE ' . implode(' AND ', $filtros);
    }

    $resultadoTotal = $banco->query($queryTotal);
    $registrosTotal = $resultadoTotal ? $banco->fetch_all($resultadoTotal)[0]['total'] : 0;

    $totalPag = ceil($registrosTotal / $itensPorPag);
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
                
            </form>
            <div class="box2">
                <input type="submit" value="Filtrar" class="filter-button">
            </div>
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
    
                $banco->fechar();
            ?>
        </div>

    </section>
    <?php include ('../templates/footerUser.php') ?>
</body>
</html>