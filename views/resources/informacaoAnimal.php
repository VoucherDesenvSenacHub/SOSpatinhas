<?php
    require_once '../../config/database.php';
    $banco = new Banco();

    $idAnimal = $_GET['id'];

    if($idAnimal != null){
        $query = 'SELECT caminho_foto FROM foto where id_animal = ' . $idAnimal;
        $resultado = $banco->query($query);
        $fotos = $banco->fetch_all($resultado);
        
        foreach ($fotos as $miniaturas) {
            echo '<img class="imgs" src="' . $miniaturas['caminho_foto'] . '" alt="">';
        }
    }
    else{}
    $banco->fechar();   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informação do Animal</title>
    <link rel="stylesheet" href="../css/informacaoAnimal.css">
</head>
<body>
    <?php include('../templates/navbarUser.php')?>
    <section class="corpo container" >
        <section class="conteudo">
            <section class="sliderFotos">
                <button class="arrow prev" onclick="changeSlide(-1)">&#10094;</button>
                <img 
                src="<?php echo $fotos[0]['caminho_foto'] ?? 'placeholder.jpg'; ?>" 
                alt="" 
                id="imgPrincipal">
                <button class="arrow next" onclick="changeSlide(1)">&#10095;</button>

                <div class="miniContainer">
                    <?php foreach ($fotos as $index => $miniatura): ?>
                        <img class="thumbnail <?php echo $index === 0 ? 'active' : ''; ?>"
                            src="<?php echo $miniatura['caminho_foto']; ?>"
                            onclick="selectImage(<?php echo $index; ?>)">
                    <?php endforeach; ?>
                </div>
            </section>

            <section class="info">
                <h1 id="tituloNome">Rochele</h1>
                <h2 id="tituloHistoria">História</h2>
                <p id="descricao">Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto</p>
                <h2 id="tituloMaisDetalhes">Mais Detalhes</h2>
                 pegar tds as palavras da tabela tag pelo id do animal da url fazer um foreach 
                <button id="btnAdotar" >Adotar!</button>
            </section>
        </section>
    </section>

    <?php include('../templates/footerUser.php')?>
</body>
</html>

    <script>
        const urlParams = new URLSearchParams(window.location.search)
        const idAnimal = parseInt(urlParams.get('id')) || 0
        
        let indexAtual = 0;
        let imgPrincipal = document.getElementById('imgPrincipal')
        let thumbnails = document.querySelectorAll('thumbnail')
        let imgs = <?php echo json_encode(array_column($fotos, 'caminho_foto')); ?>;
        let btnAdotar = document.getElementById('btnAdotar')

        btnAdotar.addEventListener('click', () => {
            window.location.href = `formAdocao.php?id=${idAnimal}`;
        });

        function selectImage(index) {
            indexAtual = index;
            updateGallery();
        }

        function changeSlide(step) {
            indexAtual = (indexAtual + step + imgs.length) % imgs.length;
            updateGallery();
        }

        function updateGallery() {
            imgPrincipal.src = imgs[indexAtual];

            thumbnails.forEach((thumb, idx) => {
                thumb.classList.toggle("active", idx === indexAtual);
            });
        }
    </script>


