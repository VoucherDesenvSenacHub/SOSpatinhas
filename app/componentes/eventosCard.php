<div class="eventosCard" onclick="window.location.href='<?= '/sospatinhas/eventos/detalhesevento/'.$evento['ID_EVENTO']; ?>'">
    <img src="../../public/images/eventosimg/eventos4.png" alt="Imagem do evento">
    <div class="cardInfo">
      <h3><?= $evento["TITULO"];?></h3>
      <p><?= $evento["DESCRICAO"];?></p>
      <div class="local">
          <img src="../../public/images/icons/iconMarcador.png" alt="Icone de local"'>
          <p><?= $evento["CIDADE"].' '. $evento["ESTADO"].', '. $evento["LOCAL_EVENTO"]; ?></p>
      </div>
    </div>
</div>


<style>
.eventosCard {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    overflow: hidden; 
    max-width: 100%; 
    border-radius: 15px; 
    position: relative;
    margin: 1em;
    cursor: pointer;
}

.eventosCard img {
  width: 97%;
  height: 23rem;
  object-fit: cover;
  border-radius: 15px;
}

.cardInfo {
  background-color: #44803F;
  position: absolute;
  bottom: 5%;
  left: 50%;
  transform: translateX(-50%);
  color: white;
  padding: 15px;
  text-align: center;
  width: 85%;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  font-size: larger;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}

.cardInfo p {
  font-size: 14px;
  padding: 8px ;
}

.cardInfo h3 {
  font-size: 1em;
}

.local {
  display: flex;
}

.local p {
  font-size: 12px;
  padding-left: 3px;
}

.local img {
  margin-top: 7.2px;
  width: 15px;
  height: 17px;
}

@media (max-width: 1024px) {
  .eventosCard img {
    width: 15rem;
    height: 15rem;
  }
  .local img {
  width: 25px;
  height: 25px;
  }
  .cardInfo p {
    font-size: 12px;
  }
  .cardInfo h3 { 
    font-size: 18px;
  }
  .local p {
    font-size: 12px ;
  }
}

@media (max-width: 768px) {
  .eventosCard img {
    width: 18rem;
    height: 18rem;
  }
  .local img {
  width: 25px;
  height: 25px;
  }
}

@media (max-width: 425px) {
  .eventosCard img {
    width: 23rem;
    height: 23rem;
  }
  .local img {
  width: 25px;
  height: 25px;
  }
}

</style>