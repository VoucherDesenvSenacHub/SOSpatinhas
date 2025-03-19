<?php

  session_start();

    if (!isset($_SESSION['taLogado']) || $_SESSION['taLogado'] !== true || $_SESSION['id'] !== 'Admin') {
    echo '<script type="text/javascript">
            alert("Você precisa estar logado como administrador para acessar esta página.");
            window.location.href = "loginADM.php";
          </script>';
    exit();
    }

  $cssLink  = '../css/comoAjudarEditavel.css';
  $tipo = 'Adm';
  include('../templates/default/topHTML.php');
?>

<section class="pontoArrecadacao">
  <div class="infoDestaque">
    <div class="imgPontoArrecadacao">
      <img src="../images/cachorro03.png" id="imgPA" alt="Imagem do Ponto de Arrecadação" >
      <div class="ruaIcone">
        <p class="endereco">
          R. do Parque, 75 - Centro, Campo Grande - MS
          <img src="../images/icons/iconEditar.png" alt="Editar" class="iconeAcao">  
        </p>
      </div>
    </div>

    <div class="fundoTexto">
      <div class="descricaoPontoArrecadacao">
        <div class="pontoArrecadacaoIcone">
          <h2>
            Ponto de Arrecadação
            <img src="../images/icons/iconEditar.png" alt="Editar" class="iconeAcao">
          </h2>
        </div>
        <p>"Seu gesto de doação é o elo que une corações humanos e patas amigas, criando um mundo mais compassivo para
          todos."</p>
      </div>
    </div>
  </div>

  <section class="infoPixECards">
    <div class="infoValores">
      <h2>Valores para Doação</h2>
      <div class="cards">
        <div class="card">
          <img src="../images/icons/iconEditar.png" alt="Editar" class="iconEdit">
          
          <img src="../images/iconeTalher.png" alt="Ícone de talher">
          <div>
            <p><strong>Kit Ração</strong></p>
            <span>R$ 50</span>
          </div>
        </div>

        <div class="card">
          <img src="../images/icons/iconEditar.png" alt="Editar" class="iconEdit">

          <img src="../images/iconeLimpeza.png" alt="Ícone de Limpeza">
          <div>
            <p><strong>Kit Limpeza</strong></p>
            <span>R$ 25</span>
          </div>
        </div>

        <div class="card">
          <img src="../images/icons/iconEditar.png" alt="Editar" class="iconEdit">

          <img src="../images/iconeConforto.png" alt="Ícone de Conforto">
          <div>
            <p><strong>Kit Conforto</strong></p>
            <span>R$ 50</span>
          </div>
        </div>

        <div class="card">
          <img src="../images/icons/iconEditar.png" alt="Editar" class="iconEdit">

          <img src="../images/iconeMedico.png" alt="Ícone de Médico">
          <div>
            <p><strong>Kit Médico</strong></p>
            <span>R$ 100</span>
          </div>
        </div>

        <div class="card">
          <img src="../images/icons/iconEditar.png" alt="Editar" class="iconEdit">

          <img src="../images/iconeAtendimento.png" alt="Ícone de Atendimento">
          <div>
            <p><strong>Kit Abono</strong></p>
            <span>R$ 60</span>
          </div>
        </div>

        <div class="card">
          <img src="../images/icons/iconEditar.png" alt="Editar" class="iconEdit">

          <img src="../images/iconeVacina.png" alt="Ícone de Vacina">
          <div>
            <p><strong>Kit Vacina</strong></p>
            <span>R$ 40</span>
          </div>
        </div>
      </div>
    </div>

    <div class="fundoQrCode"> 
      <div class="qrCode">
        <h2>
          Pix QR Code ou CNPJ
          <img src="../images/icons/iconEditar.png" alt="Editar" class="iconeAcao">
          <img src="../images/Icon_de_excluir.png" alt="Excluir" class="iconeAcao">
        </h2>
        
        <img id="imgQrCode" src="../images/imagem_qrcode.png" alt="QR Code para Doação">
        <br><br>
        <h3>Sos Patinhas</h3>
        <div class="logoBb">
          Conta: 198655-4
          <img id="imgLogoBanco" src="../images/banco.png" alt="Imagem da logo do banco">
        </div>
        <p>Agência: 1193</p>
        <p>ChaveCNPJ: XX. XXX. XXX/0001-XX</p>
      </div>
    </div>
  </section>
</section>

<?php
  include('../templates/default/bottomHTML.php');
?>
