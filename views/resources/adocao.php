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
    

    <section class="corpo container" >

        <section class="top-texts">
            <h1>Adote um melhor amigo!</h1>
            <p>Adotar um animal salva vidas e traz alegria. Muitos cães e gatos esperam por um lar. Ao adotar, você ganha um amigo fiel e combate o abandono. Adote e transforme vidas!</p>
        </section>
        

        <section class="filter">
            <form method="get" class="form-filter-sexo">
                <h2>Sexo</h2>
                <select name="sexo-filter" id="sexo-filter">
                    <option class="filter-option" value="Selecionar">-- Selecionar --</option>
                    <option class="filter-option" value="Macho">Macho</option>
                    <option class="filter-option" value="Fêmea">Fêmea</option>
                </select>
            </form>

            <form method="get" class="form-filter-idade">
                <h2>Idade</h2>
                <select name="idade-filter" id="idade-filter">
                    <option class="filter-option" value="Selecionar">-- Selecionar --</option>
                    <option class="filter-option" value="-6meses">-6 meses</option>
                    <option class="filter-option" value="Ate5anos">Até 5 anos</option>
                    <option class="filter-option" value="Ate10anos">Até 10 anos</option>
                    <option class="filter-option" value="+10anos">+10 anos</option>
                </select>
            </form>

            <form method="get" class="form-filter-porte">
                <h2>Porte</h2>
                <select name="porte-filter" id="porte-filter">
                    <option class="filter-option" value="Selecionar">-- Selecionar --</option>
                    <option class="filter-option" value="Pequeno">Pequeno</option>
                    <option class="filter-option" value="Médio">Médio</option>
                    <option class="filter-option" value="Grande">Grande</option>
                </select>
            </form>

            <form method="get" class="form-filter-animal">
                <h2>Animal</h2>
                <select name="animal-filter" id="animal-filter">
                    <option class="filter-option" value="Selecionar">-- Selecionar --</option>
                    <option class="filter-option" value="Cachorro">Cachorro</option>
                    <option class="filter-option" value="Gato">Gato</option>
                    <option class="filter-option" value="Passaro">Pássaro</option>
                    <option class="filter-option" value="Roedor">Roedor</option>
                </select>
            </form>

            <input type="submit" value="Filtrar" class="filter-button">
        </section>
        

        <div class="card-container">
            <?php
                require_once '../../config/database.php';
                $banco = new Banco();
                
                $filtros = [];
                // var_dump($filtros);
                

                if(isset($_GET['sexo-filter']) && $_GET['sexo-filter'] != "Selecionar"){
                    $tipoFilter = $banco->escape($_GET['sexo-filter']);
                    array_push($filtros, "sexo = '$tipoFilter'");
                    // $filtros[] = "sexo = '$tipoFilter'";
                }

                if(isset($_GET['idade-filter']) && $_GET['idade-filter'] != "Selecionar"){
                    $tipoFilter = $banco->escape($_GET['idade-filter']);
                    $filtros[] = "idade = '$tipoFilter'";
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

                $resultado = $banco->query($query);

                $rowAnimal = $banco->fetch_all($resultado);
                // var_dump($rowAnimal);
                foreach ($rowAnimal as $animal){
                    include ('../templates/animalCard.php');
                };
                $banco->fechar();
            ?>
        </div>

    </section>
    <?php include ('../templates/footerUser.php') ?>
</body>
</html>