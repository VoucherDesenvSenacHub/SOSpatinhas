<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perfil de Rochele</title>
  <link rel="stylesheet" href="../css/informacaoAnimal.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
<?php include('../templates/navbarUser.php')?>
  <div class="container">
    <a class="back-link" href="#">
      <i class="fas fa-arrow-left"></i>
      Voltar
    </a>
    <div class="profile">
     
      <div class="profile-images">
        <img src="../images/rochele.png" 
             alt="rochele 1 " class="main-image">

        <div class="gallery">
          <img src="../images/rochele.png" 
               alt="rochele 2" class="gallery-img">
          <img src="../images/anna.png" 
               alt="rochele 3 " class="gallery-img">
          <img src="../images/rochele.png" 
               alt="rochele 4" class="gallery-img">
        </div>

      </div>
      <div class="profile-details">
        <h1>Rochele</h1>
        <p class="submitted-by">
          <i class="fas fa-user"></i> enviado por Mitski
        </p>
        <h2>História</h2>
        <p>
          Olá, me chamo Rochele. Tenho 4 anos, mas se engana quem acha que já estou velha. Isso é puro preconceito.
          Tenho muita energia, sou esperta e vou aprender tudo que me ensinarem. Como todos os outros cães do abrigo,
          ainda tenho esperança de ser adotada.
        </p>
        <h2>Mais detalhes</h2>
        <div class="tags">
          <span>Doce</span>
          <span>Brincalhona</span>
          <span>Sociável</span>
          <span>Independente</span>
          <span>Castrado</span>
          <span>Vacinado</span>
          <span>Vermifugado</span>
          <span>Sociável com cachorros</span>
        </div>
        <button class="adopt-btn">Adotar!</button>
      </div>
    </div>
  </div>

  <?php include('../templates/footerUser.php')?>

  <script>
  document.addEventListener("DOMContentLoaded", () => {
    const backLink = document.querySelector(".back-link");
    if (backLink) {
      backLink.addEventListener("click", (event) => {
        event.preventDefault();
        window.location.href = "../resources/adocao.php";
      });
    }

    const adoptBtn = document.querySelector(".adopt-btn");
    if (adoptBtn) {
      adoptBtn.addEventListener("click", () => {
        window.location.href = "../resources/formAdocao.php";
      });
    }

    // Seleciona todas as mini imgs da galeria
    const galleryImages = document.querySelectorAll(".gallery-img");
    // Seleciona a img principal pela class
    const mainProductImage = document.querySelector(".main-image");

    // Verifica se a img principal 
    if (!mainProductImage) return;

    // Ao clicar em qualquer mini img substitui a img principal
    galleryImages.forEach((img) => {
      img.addEventListener("click", () => {
        // Se quiser só trocar direto sem converter URl
        mainProductImage.src = img.src;
      });
    });
  });
</script>

</body>
</html>
