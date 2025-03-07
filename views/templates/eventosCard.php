<div class="eventosCard" onclick="window.location.href='detalhesEvento.php'">
    <img src="../images/horto-florestal.png" alt="Feira do Auau">
    <div class="card-info">
      <h3>Feira do Auau</h3>
      <p>Feira arrecadativa de moda.</p>
      <div class="local">
          <img src="../images/pin_info.png"></img> Campo Grande MS, Horto Florestal
      </div>
    </div>
</div>

<style>
.eventosCard {
  position: relative;
  width: 400px; 
  height: 450px; 
  border-radius: 15px; 
  overflow: hidden; 
  cursor: pointer;
}

.eventosCard img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.card-info{
  background-color: #44803F;
  position: absolute;
  bottom: 5%;
  left: 50%;
  transform: translateX(-50%);
  color: white;
  padding: 20px;
  text-align: center;
  width: 95%;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  font-size: larger;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}

.local{
  display: flex;
  align-items: flex-end;
}

.local img{
  width: 25px;
  height: 25px;
}

    /* .card {
    position: relative;
    flex: 0 0 300px;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 4px 6px #0000001a;
  }

  .card img {
    width: 360px;
    height: 330px;
    object-fit: cover;
  }

  .card-info {
    position: absolute;
    bottom: 16px;
    left: 20px;
    right: 13px;
    background: #44803F;
    color: #fff;
    padding: 10px;
    text-align: left;
  }
  
  .card-info h3 {
    margin: 0 0 5px;
    font-size: 20px;
    text-shadow: 2px 2px 4px #0000009a;
  }

  .local {
    display: flex;
    align-items: center;
    font-size: 15px;
    text-shadow: 2px 2px 4px #000000b9;
    align-items: center;
  }
  
  .local img {
    width: 20px;
    height: 20px; 
    margin-right: 5px; 
    vertical-align: middle;
  } */

</style>