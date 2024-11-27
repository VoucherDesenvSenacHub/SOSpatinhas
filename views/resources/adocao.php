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
                    <option class="filter-option" value="Medio">Médio</option>
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
                $servidor = 'localhost';
                $usuario = 'root';
                $senha = '';
                $banco_de_dados = 'SOS_Patinhas';
                $conexao = mysqli_connect($servidor,$usuario,$senha,$banco_de_dados);
                
                if(isset($_GET['animal-filter']) && $_GET['animal-filter'] != "Selecionar" ){
                    $tipoFilter = $_GET['animal-filter'];
                    $selectAnimal = $conexao->query("select * from animal where tipo = '$tipoFilter'");
                    $rowAnimal = $selectAnimal->fetch_all(MYSQLI_ASSOC);
                    foreach ($rowAnimal as $animal){
                        include ('../templates/animalCard.php');
                    };
                }else if(!isset($_GET['tipo-filter']) || ($_GET['tipo-filter'] == "Selecionar")){
                    $selectAnimal = $conexao->query('select * from animal');
                    $rowAnimal = $selectAnimal->fetch_all(MYSQLI_ASSOC);
                    foreach ($rowAnimal as $animal){
                        include ('../templates/animalCard.php');
                    };
                }

                $conexao->close();
            ?>
        </div>

    </section>
    <?php include ('../templates/footerUser.php') ?>
</body>
</html>