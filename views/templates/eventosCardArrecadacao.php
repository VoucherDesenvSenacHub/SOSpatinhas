<section class="container">
    <div class="wrapper">            
        <ul id="imgAnimal" class="carousel">
            <li class="card">
                <img src="../images/eventosImg/eventos2.png" class="animal" alt="">
                <h3 class="texto-overlay">Ajude o Freguês</h3>
                <div class="box-anim"></div>
                <div class="box-saibamais"><h1>Saiba mais</h1></div>
            </li>                 
        </ul>
    </div>
</section>
<style>
    * {
    padding: 0;
    margin: 0;
    border: 0;
    }
    body{
    
    }
    .container{
        max-width: 1500px;
        margin: auto;
        padding: 12px;
   
        
    }

    .card {
    margin: 0 10px; /* Espaço lateral entre os itens */
    position: relative; /* Para posicionar o texto em relação à imagem */
    box-sizing: border-box;
    text-align: center;
   
    }

    #imgAnimal,#imgEventos{
    text-align: center;
    margin: 10px;
    display: flex; /* Alinha os itens em uma linha */
    justify-content: space-between; /* Espaço entre as divs */
    padding: 20px; /* Espaço interno no contêiner */

}


.animal{
    width: 420px; /* Define a largura */
    height: auto; /* Mantém a proporção da imagem */
    margin: 20px;
    
}
.eventos{
    width: 420px; /* Define a largura */
    height: auto; /* Mantém a proporção da imagem */
    margin: 20px;
}



/*BARRA*/

.box-anim{
    background-color: #83CE7D;
    position: absolute;
    bottom:90px; /* Posiciona a barra a 10px do fundo da imagem */
    left: 50%; /* Centraliza horizontalmente */
    transform: translateX(-50%); /* Ajusta a posição para centralizar */
    width: 80%; /* Largura da barra */
    height: 40px; /* Altura da barra */
    border-radius: 30px; /* Bordas arredondadas */
    display: flex; /* Permite centralizar o texto dentro da barra */
    justify-content: center; /* Centraliza horizontalmente o texto */
    align-items: center; /* Centraliza verticalmente o texto */
    color: white; /* Cor do texto */
    font-size: 16px; /* Tamanho do texto */
}


.box-saibamais{
 
    background-color: #ffffff;
    position: absolute;
    bottom:40px; 
    left: 50%; /* Centraliza horizontalmente */
    transform: translateX(-50%); /* Ajusta a posição para centralizar */
    width: 37%; /* Largura da barra */
    height: 37px; /* Altura da barra */
    border-radius: 7px; /* Bordas arredondadas */
    display: flex; /* Permite centralizar o texto dentro da barra */
    justify-content: center; /* Centraliza horizontalmente o texto */
    align-items: center; /* Centraliza verticalmente o texto */
    color: #83CE7D; /* Cor do texto */
    font-size: 16px; /* Tamanho do texto */

}


.box-event {
    background-color: #44803F;
    position: absolute;
    bottom: 50px; /* Posiciona a barra a 50px do fundo da imagem */
    left: 50%; /* Centraliza horizontalmente */
    transform: translateX(-50%); /* Ajusta a posição para centralizar */
    width: 85%; /* Largura da barra */
    height: 120px; /* Altura da barra */
    display: flex; /* Permite organizar o conteúdo com flexbox */
    flex-direction: column; /* Organiza os itens na vertical */
    justify-content: flex-start; /* Centraliza o conteúdo verticalmente */
    align-items: flex-start; /* Centraliza o conteúdo horizontalmente */
    color: white; /* Cor do texto */
    font-size: 14px; /* Tamanho do texto */
}

/* titulo */


.box-event h1 {
    margin-bottom: 5px; /* Dá um espaçamento abaixo do título */
    margin-left: 10px;
    margin-top: 10px ;
    
}
.box-event h2{
    margin-bottom: 3px; /* Dá um espaçamento abaixo do título */
    margin-left: 10px;
    margin-top: 10px ;
    
}

/* Ajuste para o parágrafo */
.box-event h1 {
    margin-left: 10px;
    margin-top: 0; /* Remove qualquer espaçamento superior do parágrafo */

}
.imgtext {
    display: flex; /* Flexbox para alinhar os itens na horizontal */
    align-items: center; /* Alinha a imagem e o texto verticalmente no centro */
}
.event-img {
    width: 30px; /* Define o tamanho da imagem */
    height: 30px; /* Mantém a proporção da imagem */
    margin-right: 0; /* Remove o espaçamento à direita da imagem */
}
.textEvent {
    margin: 0; /* Remove a margem padrão do título */
    padding: 0; /* Remove o padding do título */
    font-size: 20px; /* Tamanho do texto do título */
}

.texto-overlay {
    position: absolute; /* Posiciona o texto sobre a imagem */
    top: 58%; /* Centraliza verticalmente */
    left: 30%; /* Centraliza horizontalmente */
    transform: translate(-50%, -50%); /* Ajusta a posição para centralizar */
    color: white; /* Cor do texto */
    font-size: 20px; /* Tamanho do texto */
    text-align: center; /* Centraliza o texto */
    border-radius: 5px; /* Bordas arredondadas para o fundo */
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 1);
    
}

</style>