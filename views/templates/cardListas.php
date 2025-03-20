<?php 

function gerarCard($nome, $imagem) {
    echo'
        <div class="Card">
            <h3>'.$nome.'</h3>
            <img src="'.$imagem.'" alt="'.$nome.'">
            <button onclick="window.location.href=`listaFormulario.php`"class="btnListaFormulario">
                Lista Formulário
            </button>
            <button class="btnExcluir">Excluir</button>
            <button class="btnEditar">Editar</button>
        </div>
    ';
}


function gerarCardArrecadacao($nome, $imagem, $progresso, $meta) {
    echo'
        <div class="Card">
            <h3>'.$nome.'</h3>
            <div class="divImg">
                <span id="letras">'.$progresso.'</span>
                <img src="'.$imagem.'" alt="'.$nome.'">
            </div>
            <div class="meta">
                <p><b>'.$meta.'</b></p>
            </div>
            <button class="btnExcluir">Excluir</button>
            <button class="btnEditar">Editar</button>
        </div>
    ';
}

function gerarCardEventos($nome, $imagem, $data, $local) {
    echo '
        <div class="Card">
            <h3>'.$nome.'</h3>
            <img src="'.$imagem.'" alt="Imagem do evento">
            <div class="localizacao">
                <img src="../images/icons/iconMarcador2.png" alt="Localização">
                <span>'.$local.'</span> 
            </div>
            <button class="btnExcluir">Excluir</button>
            <button class="btnEditar">Editar</button>
        </div>
    ';
}

function gerarCardFormulario($tituloFrm, $imagemAnimal, $nomeAnimal, $imagemUser, $nomeUser) {
    echo '
        <div class="Card">
            <div class="contentCard">
                <h3 class="tituloFrm">'.$tituloFrm.'</h3>
                <div class="topCont">
                    <div class="ftAnimal">
                        <div class="imgConatiner">
                            <img src="'.$imagemAnimal.'" alt="" style="height: 10rem">
                        </div>
                        <p class="nomes">'.$nomeAnimal.'</p>
                    </div>
                    <div class="ftUser">
                        <div class="imgConatiner">
                            <img src="'.$imagemUser.'" alt="" style="height: 10rem; background-color: #44803F;">
                        </div>
                        <p class="nomes">'.$nomeUser.'</p>
                    </div>
                </div>
                <div class="bottom">
                    <button class="btnEditar">Ver</button>
                    <button class="btnAceitar">Aceitar</button>
                    <button class="btnExcluir" >Recusar</button>
                </div>
            </div>
        </div>
    ';
}

?>

<style>
.Card {
    width: 100%;  
    max-width: 100%;
    border-radius: 10px;
    padding: 10px;
    transition: transform 0.2s;
    text-align: center;
    /* border-radius: 1rem;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); */
}

.Card:hover {
    transform: scale(1.05);
}

.Card img {
    width: 100%;
    height: 250px;
    object-fit: cover;
    margin-bottom: 10px;
}
.Card button {
    background-color: #44803F;
    color: white;
    width: 40%;
    height: 40px;
    border: none;
    padding: 10px;
    border-radius: 30px;
    cursor: pointer;
    font-size: 1em;
    transition: background-color 0.3s, transform 0.2s;
}

.Card button:hover {
    background-color: #346430;
    transform: scale(1.05);
}

.Card h3 {
    margin: 10px 0;
    font-size: 1.2em;
    color: #333;
}

.Card .meta {
    font-size: 1em;  
    background-color: #83CE7D;
    color: black;
    border-radius: 15px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 5px;
    padding: 8px 10px; 
}


.btnListaFormulario {
    width: 82% !important;
    display: flex !important;
    margin: 10px auto ;
    justify-content: center !important;
}


.divImg {
    width: 100%;
    height: 250px; 
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden; 
}

.divImg img {
    width: 100%;
    height: 100%; 
    object-fit: cover; 
}


#letras {
    font-weight: bold;
    font-size: 1em;
    position: absolute;
    bottom: 10px; 
    color: white;
}

.Card .localizacao{
    font-size: 18px;
    background-color: #fff;
    /* border: 1px solid #44803F; */
    color: #4caf50;
    /* border-radius: 5px; */
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 10px;
    /* margin: 10px 0; */
}

.Card .localizacao img {
    margin-top: 12px;
    width: 18px;
    height: 25px;
}

</style>