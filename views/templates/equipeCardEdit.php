<div class="cardIntegranteEquipe">
    <img src="../images/sophia.png" alt="Integrante da equipe">
    <img src="../images/btnEditar.png" alt="" id="btn">
    <div id="nomeIntegrante">Sophia Silva</div>
</div>

<style>
.cardIntegranteEquipe{
    display: flex;
    position: relative;
    flex-wrap: wrap;
    justify-content: center;
    gap: 10px;
    overflow: hidden;
    max-width: 100%;
    border-radius: 15px;
}

.cardIntegranteEquipe img{
    width: 90%;
    height: auto;
    object-fit: cover;
    border-radius: 15px; 
}

#nomeIntegrante {
    font-size: 23px;  
    font-weight: 700;
    color: black;
    margin-top: 10px;
    font-family: 'Roboto', sans-serif;
    text-align: center;
}

#btn {
    position: absolute;
    top: 10px;  
    right: 1px; 
    width: 30px; 
    cursor: pointer; 
}
</style>