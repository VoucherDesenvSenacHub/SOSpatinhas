<?php
  $cssLink  = '/sospatinhas/public/css/infoAnimal.css';
  include('app/componentes/default/topHTML.php');
?>

<div class="adocao-detalhes">
  <button class="voltar-btn"><a href="/sospatinhas/adocao">❮</a></button>
  
  <div class="adocao-esquerda">
    <div class="imagem-grande">
      <img src="/sospatinhas/public/images/default/cachorro1.png" alt="Rumi machucado">
    </div>
    <div class="imagens-miniatura">
      <img src="/sospatinhas/public/images/default/cachorro1.png" alt="Miniatura 1">
      <img src="/sospatinhas/public/images/default/cachorro2.png" alt="Miniatura 2">
      <!-- <img src="/sospatinhas/public/images/animais/rumi3.png" alt="Miniatura 3"> -->
    </div>
  </div>

  <div class="adocao-direita">
    <h2><?= $animal[0]['NOME'] ?></h2>
    <p class="info"><?= $animal[0]['SEXO'] ?> - <?= $animal[0]['IDADE'] ?> - <?= $animal[0]['PORTE'] ?></p>
    <p class="descricao"><?= $animal[0]['DESCRICAO'] ?></p>
    <button class="btn-adotar"><a href="https://web.whatsapp.com/">QUERO ADOTAR!</a></button>
  </div>
</div>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const miniaturas = document.querySelectorAll(".imagens-miniatura img");
    const imagemGrande = document.querySelector(".imagem-grande img");

    miniaturas.forEach(miniatura => {
      miniatura.addEventListener("click", function () {
        imagemGrande.src = this.src;
        imagemGrande.alt = this.alt;
      });
    });
  });
</script>

<?php
  include('app/componentes/default/bottomHTML.php');
?>