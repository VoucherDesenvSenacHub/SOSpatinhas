<div id="card-arrecadacao">
    <img src="../images/eventosImg/eventos2.png" alt="">
    <div id="bottom-content">
        <div id="titulo-barra">
            <h1 id="titulo">Ajude o Fregês</h1>
            <div id="barra-progresso">
                <div id="barra"></div>
                <p id="meta">R$1.000,00</p>
            </div>
        </div>
        <button class="button-card">
            <a href="arrecadacao.php">Saiba Mais</a>
        </button>
    </div>
</div>

<style>
#card-arrecadacao {
    position: relative;
    width: 400px; 
    height: 300px; 
    border-radius: 15px; 
    overflow: hidden; 
}

#card-arrecadacao img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

#bottom-content {
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    color: white;
    padding: 20px;
    text-align: center;
    width: 100%;
}

#titulo-barra{
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

#titulo {
    font-size: 24px;
    color:rgb(255, 255, 255);

}

#barra-progresso {
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
}

.button-card{
    height: 40px;
    width: 150px;
    border-radius: 15px;
}

.button-card a {
    color: #83CE7D;
    font-weight: bold;
    text-decoration: none;
    font-size: 20px;
}
</style>