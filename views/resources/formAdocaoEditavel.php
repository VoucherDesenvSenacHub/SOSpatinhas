<?php
  $cssLink  = '../css/formAdocaoEditavel.css';
  $tipo = 'Adm';
  include('../templates/default/topHTML.php');
?>

<div class="redimensionar-top">
    <h1>FORMULÁRIO DE ADOÇÃO</h1>

    <div class="p-container">
        <p id="p-feliz">Olá! Estamos muito felizes por você escolher adotar um animalzinho do SOS Patinhas 🙂</p>
        <img src="../images/btnEditar.png" class="botaozin">
    </div>
    <p>Para adotar um dos nossos cãezinhos, é necessário ter mais de 18 anos, preencher este formulário, enviar fotos do seu lar e, caso a adoção seja aprovada, assinar um termo de responsabilidade. Também solicitamos que nos mantenha atualizados sobre o bem-estar do animalzinho após a adoção, enviando notícias de tempos em tempos. Este é o procedimento padrão adotado por diversas outras organizações não governamentais (ONGs) comprometidas com a adoção responsável.</p>

    <p>Se você estiver interessado em participar deste processo, pedimos que responda às seguintes perguntas, que são parte do nosso protocolo de adoção. Embora o questionário seja extenso, nosso objetivo é minimizar as devoluções futuras, o que seria prejudicial para o animal adotado.
    Portanto, solicitamos que você responda todas as perguntas com cuidado e atenção. Analisaremos suas respostas minuciosamente e entraremos em contato assim que possível!</p>
</div>

<div class="tracinho"></div>

<form>

    <input type="text" name="nome" placeholder="Nome Completo*">

    <div class="divMetade">
        <input type="text" name="cpf" placeholder="CPF*">
        <input type="text" name="rg" placeholder="RG*">
    </div>
    <div class="divMetade">
        <input type="email" name="email" placeholder="E-mail*">
        <input type="date" name="data_nascimento" placeholder="Data de Nascimento*">
    </div>
    <div class="divMetade">
        <input id="inputddd" type="text" name="ddd" placeholder="DDD*">
        <input type="text" name="telefone" placeholder="Telefone*">
    </div>
    <div class="divMetade">
        <input type="text" name="cidade" placeholder="Cidade:">
        <input id="inputuf" type="text" name="uf" placeholder="UF*">
    </div>
    <div class="divMetade">
        <input type="text" name="rua" placeholder="Rua:">
        <input id="inputnum" type="text" name="number" placeholder="Número:">
    </div>
    <div>
        <input type="text" name="bairro" placeholder="Bairro:">
        <input type="text" name="complemento" placeholder="Complemento:">
    </div>

    
    
    <div class="perguntaIcon">
        <label for="pergunta1"></label>
        <img src="../images/Icon_de_excluir.png" class="botaozin">
        <img src="../images/btnEditar.png" class="botaozin">
        <input type="text" name="pergunta1" placeholder="Pergunta1:">
    </div>
    
    <div class="perguntaIcon">
        <img src="../images/Icon_de_excluir.png" class="botaozin">
        <img src="../images/btnEditar.png" class="botaozin">
        <label for="pergunta2"></label>
        <input type="text" name="pergunta2" placeholder="Pergunta2:">
    </div>

    
    <div class="perguntaIcon">
        <img src="../images/Icon_de_excluir.png" class="botaozin">
        <img src="../images/btnEditar.png" class="botaozin">
        <label for="pergunta3"></label>
        <input type="text" name="pergunta3" placeholder="Pergunta3:">
    </div>

    <div class="perguntaIcon">
        <img src="../images/Icon_de_excluir.png" class="botaozin">
        <img src="../images/btnEditar.png" class="botaozin">
        <label for="pergunta4"></label>
        <input type="text" name="pergunta4" placeholder="Pergunta4:">  
    </div>
    
    <div class="perguntaIcon">   
        <img src="../images/Icon_de_excluir.png" class="botaozin">
        <img src="../images/btnEditar.png" class="botaozin">
        <label for="pergunta5"></label>
        <input type="text" name="pergunta5" placeholder="Pergunta5:">
    </div>
    
    <div class="perguntaIcon">     
        <img src="../images/Icon_de_excluir.png" class="botaozin">
        <img src="../images/btnEditar.png" class="botaozin">
        <label for="pergunta6"></label>
        <input type="text" name="pergunta6" placeholder="Pergunta6:">
    </div>
    
    <div class="botaozao-container">
        <img src="../images/plusButton.png" class="botaozao">
    </div>
    
</form>

<div class="redimensionar-bottom">
    <h2>TERMO DE COMPROMISO</h2>

    <p>O adotante se declara pelo presente, ciente das responsabilidades de ter um animal e se
        compromete a zelar pela sua saúde e segurança, não permitindo que o mesmo saia
        desacompanhado, alimentando-o, visitando o veterinário regularmente e sempre que
        necessário. Está ciente ainda que esta adoção será monitorada, o que pode incluir visitas
        periódicas, e em caso de maus-tratos poderá responder criminalmente com pena de 3
        meses a 1 ano de detenção e multa, conforme Lei Federal de crimes ambientais
        No.9605, art32 de 12/02/98;</p>
        
    <p>O adotante é ciente que passará por um período de adaptação com o animal, se
        comprometendo a proteger, alimentar, e educar sem sofrimento. Sob nenhuma hipótese
        poderá maltratar o animal ou puni-lo de forma violenta com agressões físicas e NUNCA
        abandoná-lo por nenhum motivo frívolo, como mudança de endereço, férias, doença,
        velhice ou quaisquer motivos não citados. Abandono é crime. Lei municipal No.13131
        de 18 de Maio de 2001.</p>
        
        <div class="checkbox">
            <input type="checkbox" name="termo">
            <label for="termo">Compreendo e aceito os Termos de Compromisso</label>
        </div>
</div>

<div class="botao">
    <?php                          
            $funcaoLoad = "mudarTamanho('100%', '100%')";                                                                     
            $titulo = "Enviar";                                           
            include('../templates/componenteButton.php');
    ?>
</div>

<?php
    include('../templates/default/bottomHTML.php');
?>