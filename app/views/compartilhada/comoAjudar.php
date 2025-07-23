<?php
  $cssLink  = '/sospatinhas/public/css/comoAjudar.css';
  $tipo = 'User';
  include('app/componentes/default/topHTML.php');
?>

<section class="pontoArrecadacao">
  <div class="infoDestaque">
    <div class="imgPontoArrecadacao">
      <img src="/sospatinhas/public/images/default/imgPontoDeArrecadacao.png" id="imgPA" alt="Imagem do Ponto de Arrecadação" >
      <p class="endereco">R. do Parque, 75 - Centro, Campo Grande - MS</p>
    </div>
    <div class="fundoTexto">
      <div class="descricaoPontoArrecadacao">
        <h2>Ponto de Arrecadação</h2>
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
          <img src="/sospatinhas/public/images/icons/iconracao.png" alt="Ícone de talher" >
          <div>
            <p><strong>Kit Ração</strong></p>
            <span>R$ 50</span>
          </div>
        </div>

        <div class="card">
          <img src="/sospatinhas/public/images/icons/iconLimpeza.png" alt="Ícone de Limpeza">
          <div>
            <p><strong>Kit Limpeza</strong></p>
            <span>R$ 25</span>
          </div>
        </div>

        <div class="card">
          <img src="/sospatinhas/public/images/icons/iconConforto.png" alt="Ícone de Conforto">
          <div>
            <p><strong>Kit Conforto</strong></p>
            <span>R$ 50</span>
          </div>
        </div>

        <div class="card">
          <img src="/sospatinhas/public/images/icons/iconMedico.png" alt="Ícone de Médico">
          <div>
            <p><strong>Kit Médico</strong></p>
            <span>R$ 100</span>
          </div>
        </div>

        <div class="card">
          <img src="/sospatinhas/public/images/icons/iconagradecimento.png" alt="Ícone de Atendimento">
          <div>
            <p><strong>Kit Abono</strong></p>
            <span>R$ 60</span>
          </div>
        </div>

        <div class="card">
          <img src="/sospatinhas/public/images/icons/iconVacinacao.png" alt="Ícone de Vacina">
          <div>
            <p><strong>Kit Vacina</strong></p>
            <span>R$ 40</span>
          </div>
        </div>
      </div>
    </div>

    <div class="fundoQrCode"> 
      <div class="qrCode">
        <h2>Pix QR Code ou CNPJ</h2>
        <img id="imgQrCode" src="public/images/default/imgQrCode.png" alt="QR Code para Doação">
        <br></br>
        <h3>Sos Patinhas</h3>
        <div class="logoBb">Conta: 123456-7
        <img id="imgLogoBanco" src="public/images/icons/iconBanco.png" alt="Imagem da logo do banco">
        </div>
        <p>Agência: 1193</p>
        <p>ChaveCNPJ: 12.345.678/0001-90. </p>
      </div>
    </div> 
  </section>
</section>

<?php
  include('app/componentes/default/bottomHTML.php');
?>