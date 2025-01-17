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
        const ImgPrincipal =document.querySelector('.imgPrincipal') // pega as 
        const divItems = document.querySelectorAll('.item')     //     divs
        const clone =divItems[0].cloneNode(true) // clona a primeira divItem 
        divImgPrincipal.appendChild(clone) // coloca o clone na div imgPrincipal

        function cloneDivImg(divImg){
            const divAtual = divImg.cloneNode(true)
            divImgPrincipal.innerHTML = ""
            divImgPrincipal.appendChild(divAtual)
        }

    </script>
    <section class="corpo container" >
        <section class="sliderFotos">
            <div class="imgPrincipal"></div>
            <div class="containerMiniaturas">
                <!-- pega as fts da tabela Fotos que tenha o id do animal selecionado 
                    Fotos o id do animal fica na url só usar o php pra pegar
                    idFotos - idAniaml - foto 

                    php - take all the photos from the table and put in a arrray then do a foreach to go through the array and put in a div
                -->
                <div class="item"><img src="../images/slide1.png" alt=""></div>
                <div class="item"><img src="../images/slide2.png" alt=""></div>
                <div class="item"><img src="../images/slide3.png" alt=""></div>
                <div class="item"><img src="../images/slide4.png" alt=""></div>
                <p id="teste"></p>
            </div>
        </section>

        <section class="info">

        </section>
    </section>

    <?php include('../templates/footerUser.php')?>
</body>
</html>