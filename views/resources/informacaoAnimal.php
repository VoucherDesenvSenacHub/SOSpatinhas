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
                <!-- <div class="imgPrincipal">
                    <div class="item"><img src="../images/slide1.png" alt=""></div>
                </div>
                <div class="containerMiniaturas">

                    <div class="item"><img src="../images/slide2.png" alt=""></div>
                    <div class="item"><img src="../images/slide3.png" alt=""></div>
                    <div class="item"><img src="../images/slide4.png" alt=""></div>
                
                </div> -->

                <!-- Container for the image gallery -->
                <div class="container">

                <!-- Full-width images with number text -->
                <div class="mySlides">
                    <div class="numbertext">1 / 6</div>
                        <img src="img_woods_wide.jpg" style="width:100%">
                    </div>
                <div class="mySlides">
                    
                <div class="numbertext">2 / 6</div>
                    <img src="img_5terre_wide.jpg" style="width:100%">
                </div>

                <div class="mySlides">
                <div class="numbertext">3 / 6</div>
                    <img src="img_mountains_wide.jpg" style="width:100%">
                </div>

                <div class="mySlides">
                <div class="numbertext">4 / 6</div>
                    <img src="img_lights_wide.jpg" style="width:100%">
                </div>

                <div class="mySlides">
                <div class="numbertext">5 / 6</div>
                    <img src="img_nature_wide.jpg" style="width:100%">
                </div>

                <div class="mySlides">
                <div class="numbertext">6 / 6</div>
                    <img src="img_snow_wide.jpg" style="width:100%">
                </div>

                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

                <!-- Image text -->
                <div class="caption-container">
                <p id="caption"></p>
                </div>

                <!-- Thumbnail images -->
                <div class="row">
                <div class="column">
                    <img class="demo cursor" src="img_woods.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
                </div>
                <div class="column">
                    <img class="demo cursor" src="img_5terre.jpg" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
                </div>
                <div class="column">
                    <img class="demo cursor" src="img_mountains.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
                </div>
                <div class="column">
                    <img class="demo cursor" src="img_lights.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
                </div>
                <div class="column">
                    <img class="demo cursor" src="img_nature.jpg" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
                </div>
                <div class="column">
                    <img class="demo cursor" src="img_snow.jpg" style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
                </div>
                </div>
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


<!-- <?php
    require_once '../../config/database.php';
    $banco = new Banco();

    $idAnimal = $_GET['id'];

    if($idAnimal != null){
        $query = 'SELECT caminho_foto FROM foto where id_animal = ' . $idAnimal;
        $resultado = $banco->query($query);
        $fotos = $banco->fetch_all($resultado);
        
        foreach ($fotos as $miniaturas) {
            echo '<div class="item"><img src="' . $miniaturas['caminho_foto'] . '" alt=""></div>';
        }
    }
    else{}
    $banco->fechar();   
?> -->