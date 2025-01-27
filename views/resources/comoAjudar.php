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
  
  <section class="corpoContainer">
    <section class="pontoArrecadacao">
      <div class="infoDestaque">
        <div class="imgPontoArrecadacao">
          <img src="../images/valinhos07 1.png" alt="Imagem da ONG Sos Patinhas" >
          <p class="endereco">R. do Parque, 75 - Centro, Campo Grande - MS</p>
        </div>
        <div class="descricaoPontoArrecadacao">
          <h2>Ponto de Arrecadação</h2>
          <p>"Seu gesto de doação é o elo que une corações humanos e patas amigas, criando um mundo mais compassivo para
            todos."</p>
        </div>
</div>

      <section class="infoPixECards">
        <div class="infoValores">
          <h2>Valores para Doação</h2>
            <div class="cards">
              <div class="card">
                <img src="../images/iconeTalher.png" alt="Ícone de talher" >
                <div>
                  <p><strong>Kit Ração</strong></p>
                  <p>R$ 50</p>
                </div>
              </div>

              <div class="card">
                <img src="../images/iconeLimpeza.png" alt="Ícone de Limpeza">
                <div>
                  <p><strong>Kit Limpeza</strong></p>
                  <p>R$ 25</p>
                </div>
              </div>

              <div class="card">
                <img src="../images/iconeConforto.png" alt="Ícone de Conforto">
                <div>
                  <p><strong>Kit Conforto</strong></p>
                  <p>R$ 50</p>
                </div>
              </div>

              <div class="card">
                <img src="../images/iconeMedico.png" alt="Ícone de Médico">
                <div>
                  <p><strong>Kit Médico</strong></p>
                  <p>R$ 100</p>
                </div>
              </div>

              <div class="card">
                <img src="../images/iconeAtendimento.png" alt="Ícone de Atendimento">
                <div>
                  <p><strong>Kit Atendimento</strong></p>
                  <p>R$ 60</p>
                </div>
              </div>

              <div class="card">
                <img src="../images/iconeVacina.png" alt="Ícone de Vacina">
                <div>
                  <p><strong>Kit Vacinação</strong></p>
                  <p>R$ 40</p>
                </div>
              </div>
            </div>
          </div>

        <div class="qrCode">
          <h2>Pix QR Code ou CNPJ</h2>
          <img id="imgQrCode" src="../images/imagem_qrcode.png" alt="QR Code para Doação">
          <br></br>
          <h3>Sos Patinhas</h3>
          <p>Conta: 198655-4
          <img id="imgLogoBanco" src="../images/banco.png" alt="Imagem logo Banco"></p>
          <p>Agência: 1193</p>
          <p>ChaveCNPJ: XX. XXX. XXX/0001-XX</p>
        </div>
      </section>
    </section>
  </section>
  <?php 
  include('../templates/footerUser.php');
  ?>
</body>
</html>