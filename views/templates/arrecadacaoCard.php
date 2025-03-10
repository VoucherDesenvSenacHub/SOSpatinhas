<div id="cardArrecadacao">
    <img src="../images/eventosImg/eventos2.png" alt="">
    <div id="bottomContent">
        <div id="tituloBarra">
            <h1 id="titulo">Ajude o Fregês</h1>
            <div id="barraProgresso">
                <div id="barra"></div>
                <p id="meta">R$1.000,00</p>
            </div>
        </div>
        <button class="buttonCard">
            <a href="arrecadacao.php">Saiba Mais</a>
        </button>
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
    margin: 50;
}

#cardArrecadacao img {
    width: 90%;
    height: 24rem;
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

#titulo {
    font-size: 24px;
    color:rgb(255, 255, 255);
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
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

.buttonCard{
    height: 40px;
    width: 150px;
    border-radius: 15px;
}

.buttonCard a {
    color: #83CE7D;
    font-weight: bold;
    text-decoration: none;
    font-size: 20px;
}

</style>