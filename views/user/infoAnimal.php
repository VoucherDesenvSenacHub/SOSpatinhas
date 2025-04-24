<?php
  $cssLink  = '../../public/css/infoAnimal.css';
  $tipo = 'User';
  include('../../componentes/default/topHTML.php');
?>

<div class="container">
  <a class="back-link" href="#">
    <img src="../../public/images/icons/btn_esquerdo.png" 
       alt="voltar" class="Voltar">
  </a>
  <div class="profile">
    
    <div class="profile-images">
      <img src="../../public/images/rocheleInfoAnimal.jpg" 
            alt="rochele 1 " class="main-image">

      <div class="gallery">
        <img src="../../public/images/rocheleInfoAnimal.jpg" 
              alt="rochele 2" class="gallery-img">
        <img src="../../public/images/rochele5.png" 
              alt="rochele 3 " class="gallery-img">
        <img src="../../public/images/rochele6.png" 
              alt="rochele 4" class="gallery-img">
      </div>

    </div>
    <div class="profile-details">
      <h1>Rochele</h1>
      <p class="submitted-by">
        <i class="fas fa-user"></i> enviado por Mitski
        <img src="../../public/images/icons/iconUser.png" 
        alt="" class="User">
      </p>
      <h2>História</h2>
      <p class="descrição">
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

      <?php
        $funcaoClick = "redirecionar('formAdocao.php')";                             
        $titulo = "Adotar";     
        include('../../componentes/componenteButton.php');
      ?>
    </div>
  </div>
</div>

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

<?php
  include('../../componentes/default/bottomHTML.php');
?>
