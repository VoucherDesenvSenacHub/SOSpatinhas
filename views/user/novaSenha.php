<?php
  $cssLink  = '../../public/css/novaSenha.css';
  $tipo = 'Adm';
  include ('../../public/componentes/default/topHTML.php');
?>

<body>
    
    
    <section class="corpo-container">

        <section class="secao-login">
            <div class="login">
                <h2>Nova Senha</h2>
                <form>
                    <input type="password" placeholder="Digitar nova senha">
                    <input type="password" placeholder="Confirmar senha">
                    <?php
        $idBtn = "btnEnviar";
        $funcaoClick = "adicionarComValidacao('Enviado com sucesso')";                             
        $funcaoLoad = "mudarTamanho('btnEnviar','100%', '100%')";                                                                     
        $titulo = "Enviar";                                           
        include('../../public/componentes/componenteButton.php');
    ?>
                </form>
            </div>
        </section>
    </section>
    
    <?php include('../../public/componentes/default/bottomHTML.php'); ?>
</body>
</html>