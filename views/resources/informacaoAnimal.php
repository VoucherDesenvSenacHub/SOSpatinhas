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
        const ImgPrincipal =document.querySelector('.imgDestaq') // pega as 
        const divItems = document.querySelectorAll('.item')     //     divs
        const clone =divItems[0].cloneNode(true) // clona a primeira divItem 
        divImgPrincipal.appendChild(clone) // coloca o clone na div imgDestaq

        function cloneDivImg(divImg){
            const divAtual = divImg.cloneNode(true)
            divImgPrincipal.innerHTML = ""
            divImgPrincipal.appendChild(divAtual)
        }

    </script>
    <section class="corpo container" >
        <section class="foto">
            <div class="imgDestaq"></div>
            <div class="miniaturas">
                <div class="item"><img src="../images/slide1.png" alt=""></div>
                <div class="item"><img src="../images/slide2.png" alt=""></div>
                <div class="item"><img src="../images/slide3.png" alt=""></div>
                <div class="item"><img src="../images/slide4.png" alt=""></div>
            </div>
        </section>

        <section class="info">

        </section>
    </section>

    <?php include('../templates/footerUser.php')?>
</body>
</html>