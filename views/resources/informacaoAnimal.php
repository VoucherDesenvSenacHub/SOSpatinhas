<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perfil de Rochele</title>
  <link rel="stylesheet" href="informacaoAnimal.css">
  <script src="https://cdn.tailwindcss.com"></script>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
  <?php include('../templates/navbarAdm.php'); ?>

  <main class="container">
    <a href="#" class="back-link">
      <i class="fas fa-arrow-left"></i>
      Voltar
    </a>
    <div class="profile">
      <div class="profile-image">
        <img src="jpg" 
             alt="A happy dog sitting on the grass with a ball in the background" 
             class="main-image">
        <div class="gallery">
          <img src="https://storage.googleapis.com/a1aa/image/EXdTYAiWLU6ujpFrb3Ldq-d0C_W16Filz1Lm-HVmi3I.jpg" 
               alt="A person holding a dog">
          <img src="https://storage.googleapis.com/a1aa/image/08tl5DWGSJhgUD3rLiDvsGcdqXueoeYJ3k-NCO54sKQ.jpg" 
               alt="A close-up of a dog's face">
          <img src="https://storage.googleapis.com/a1aa/image/EBU0oI-6sFz_vNptgaUCAGa1a4IMkSs7cu2cn9O8zM0.jpg" 
               alt="A dog lying on the ground">
        </div>
      </div>
      <div class="profile-details">
        <h1>Rochele</h1>
        <p class="submitted-by">
          <i class="fas fa-user"></i>
          enviado por Lorena Pinheiro
        </p>
        <section class="profile-section">
          <h2>História</h2>
          <p>
            Olá, me chamo Rochele. Tenho 4 anos, mas se engana quem acha que já estou velha. 
            Isso é puro preconceito. Tenho muita energia, sou esperta e vou aprender tudo que me ensinarem. 
            Como todos os outros cães do abrigo, ainda tenho esperança de ser adotada.
          </p>
        </section>
        <section class="profile-section">
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
        </section>
        <button class="adopt-btn">Adotar!</button>
      </div>
    </div>
  </main>
  <?php include('../templates/footerUser.php'); ?>   
</body>
</html>
