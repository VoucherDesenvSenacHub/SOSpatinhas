<div id="cardArrecadacao">
    <img src="../images/eventosImg/eventos2.png" alt="Imagem do Cachorro Freguês">
    <div id="bottomContent">
        <div id="tituloBarra">
            <h1>Ajude o Fregês</h1>
            <div id="barraProgresso">
                <div id="barra"></div>
                <p id="meta">R$1.000,00</p>
            </div>
        </div>
        <?php
            // btn Saiba Mais
            $funcaoClick = "saibaMais('arrecadacao.php')";
            $titulo = "Saiba Mais";
            include('../templates/componenteButton.php');
        ?>
    </div>
</div>

<style>
#cardArrecadacao {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    overflow: hidden; 
    max-width: 100%; 
    border-radius: 15px; 
    position: relative;
    margin: 1em;
}

#cardArrecadacao img {
    width: 97%;
    height: 23rem;
    object-fit: cover;
    border-radius: 15px;
}

#bottomContent {
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    color: white;
    padding: 24px 35px 8px  35px;
    text-align: center;
    width: 100%;
}

#tituloBarra{
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

#tituloBarra h1{
    font-size: 22px;
}

#barraProgresso {
    margin: 10px 0;
    border: 4px solid #83CE7D;
    border-radius: 15px;
    height: 2rem;
    display: flex;
    flex-direction: row;
    align-items: center;
    background-color: white;
    color: black;
    width: 100%;
}

#barra{
    width: 264px;
    background-color: #83CE7D;
    height: 100%;
}

#meta{
    margin: 0 10px 0 10px;
    font-weight: 700;
}

@media (max-width: 1024px) {
    #tituloBarra h1 {
        font-size: 20px;
        color:rgb(255, 255, 255);
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }
    #cardArrecadacao img {
        width: 15rem;
        height: 15rem;
    }
}

@media (max-width: 768px) {
    #tituloBarra h1 {
        font-size: 24px;
        color:rgb(255, 255, 255);
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }
    #cardArrecadacao img {
        width: 18rem;
        height: 18rem;
    }
}

@media (max-width: 425px) {
    #tituloBarra h1 {
        font-size: 24px;
        color:rgb(255, 255, 255);
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        padding-left: 16%;
    }
    #cardArrecadacao img {
        width: 23rem;
        height: 23rem;
    }
}


</style>