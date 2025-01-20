<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/informacaoAnimal.css">
</head>
<body>
    <?php include('../templates/navbarUser.php')?>
    <script>
        
        // document.addEventListener("DOMContentLoaded", function() {
        //     // Get references to the main image container and thumbnail images
        //     const imgPrincipal = document.querySelector('.imgPrincipal');
        //     const thumbnails = document.querySelectorAll('.containerMiniaturas .item img');

        //     // Set the initial image (first thumbnail image)
        //     imgPrincipal.innerHTML = `<img src="${thumbnails[0].src}" alt="main image">`;

        //     // Function to update the main image
        //     function updateMainImage(event) {
        //         const clickedImageSrc = event.target.src;
        //         imgPrincipal.innerHTML = `<img src="${clickedImageSrc}" alt="main image">`;
        //     }

        //     // Add click event to each thumbnail image
        //     thumbnails.forEach(thumb => {
        //         thumb.addEventListener('click', updateMainImage);
        //     });
        // });
        
        
        
        // const ImgPrincipal =document.querySelector('.imgPrincipal') // pega as 
        // const divItems = document.querySelectorAll('.item')     //     divs

        // const clone = divItems[0].cloneNode(true) // clona a primeira divItem 
        // divImgPrincipal.appendChild(clone) // coloca o clone na div imgPrincipal

        // function cloneDivImg(divImg){
        //     const divAtual = divImg.cloneNode(true)
        //     divImgPrincipal.innerHTML = ""
        //     divImgPrincipal.appendChild(divAtual)
        // }

        // divItems.forEach(item => {
        //     item.addEventListener('click', () => {
        //         cloneDivImg(item);
        //     })
        // })

        document.addEventListener("DOMContentLoaded", function() {
            // Get the main image container and all the thumbnail items
            const ImgPrincipal = document.querySelector('.imgPrincipal');
            const divItems = document.querySelectorAll('.item img');  // Get all the images inside .item divs
            
            // imgPrincipal.innerHTML = `<img src="${divItems[0].src}" alt="main image">`;

            // Add click event listener to each thumbnail
            divItems.forEach(item => {
                item.addEventListener('click', function() {
                    // When a thumbnail is clicked, set the src of the main image to the clicked thumbnail's image
                    ImgPrincipal.innerHTML = ''; // Clear the main image container
                    const imgClone = item.cloneNode(); // Clone the clicked image
                    ImgPrincipal.appendChild(imgClone); // Append the cloned image to the main container
                });
            });
        });


    </script>
    <section class="corpo container" >
        <section class="conteudo">
            <section class="sliderFotos">
                <div class="imgPrincipal">
                    <div class="item"><img src="../images/slide1.png" alt=""></div>
                </div>
                <div class="containerMiniaturas">
                    <?php
                        require_once '../../config/database.php';
                        $banco = new Banco();

                        $idAnimal = $_GET['id'];

                        if($idAnimal != null){$query = 'SELECT caminho_foto FROM foto where id_animal = ' . $idAnimal;}
                        else{}

                        $resultado = $banco->query($query);
                        $fotos = $banco->fetch_all($resultado);
                        
                        foreach ($fotos as $miniaturas){
                            
                            ?>
                            <div class="item">
                                <img src="" alt="">
                            </div>
                            <?php
                        }

                        $banco->fechar();
                                 
                    ?>
                    
                    
                </div>
            </section>

            <section class="info">
                <h1 id="tituloNome">Rochele</h1>
                <h2 id="tituloHistoria">História</h2>
                <p id="descricao">Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto</p>
                <h2 id="tituloMaisDetalhes">Mais Detalhes</h2>
                <button class="button-card">
                    <a href="informacaoAnimal.php?id=<?= $animal['id_animal'] ?>">Adotar!</a>
                </button>
            </section>
        </section>
        
    </section>

    <?php include('../templates/footerUser.php')?>
</body>
</html>