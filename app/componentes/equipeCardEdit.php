<div class="cardIntegranteEquipe">
    <img src="/sospatinhas/public/images/sophia.png" alt="Integrante da equipe">
    <img src="/sospatinhas/public/images/icons/iconEditar.png" alt="" class="btn-card-equipe">
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

.cardIntegranteEquipe .btn-card-equipe {
    position: absolute;
    top: 10px;  
    right: 1px; 
    width: 50px;
    cursor: pointer; 
}
</style>