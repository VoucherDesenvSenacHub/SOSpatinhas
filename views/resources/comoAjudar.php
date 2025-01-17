<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sos Patinhas - Como Ajudar</title>
  <link rel="stylesheet" href="../css/comoAjudar.css">
</head>

<body>
  <?php
  include('../templates/navbarUser.php');
  ?>
  
  <section class="corpo container">
    <section class="pontoArrecadacao">
      <section class="infoDestaque">
        <div class="imgPontoArrecadacao">
          <img src="../images/valinhos07 1.png" alt="Imagem da ONG Sos Patinhas" style="width: 453px; height: 283px;">
        </div>
        <div class="hero-text">
          <h2>Ponto de Arrecadação</h2>
          <p>"Seu gesto de doação é o elo que une corações humanos e patas amigas, criando um mundo mais compassivo para
            todos."</p>
          <p>R. do Parque, 75 - Centro, Campo Grande - MS</p>
        </div>
      </section>

      <section class="infoPixPontoArrecadacao">
        <div class="infoValores">
          <h2>Valores para Doação</h2>
            <div class="cards">
              <div class="card">
                <img src="../images/iconeTalher.png" alt="Ícone de talher">
                <h3>Kit Ração</h3>
                <p>R$ 50</p>
              </div>

              <div class="card">
                <img src="../images/iconeLimpeza.png" alt="Ícone de Limpeza">
                <h3>Kit Limpeza</h3>
                <p>R$ 25</p>
              </div>

              <div class="card">
                <img src="../images/iconeConforto.png" alt="Ícone de Conforto">
                <h3>Kit Conforto</h3>
                <p>R$ 50</p>
              </div>

              <div class="card">
                <img src="../images/iconeMedico.png" alt="Ícone de Médico">
                <h3>Kit Médico</h3>
                <p>R$ 100</p>
              </div>

              <div class="card">
                <img src="../images/iconeAtendimento.png" alt="Ícone de Atendimento">
                <h3>Kit Atendimento</h3>
                <p>R$ 60</p>
              </div>

              <div class="card">
                <img src="../images/iconeVacina.png" alt="Ícone de Vacina">
                <h3>Kit Vacinação</h3>
                <p>R$ 40</p>
              </div>
          </div>
        </div>
        <div class="qrCode">
          <h2>Pix QR Code ou CNPJ</h2>

          <div class="qrcode">
            <img src="../images/imagem_qrcode.png" alt="QR Code para Doação">
            <p>ChaveCNPJ: XX. XXX. XXX/0001-XX</p>

            <div class="info">
              <h3>Sos Patinhas</h3>

              <div class="dados-conta">
                <p>Conta: 198655-4</p>
                <p>Agência: 1193</p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </section>
  </section>
  <?php 
  include('../templates/footerUser.php');
  ?>
</body>
</html>