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

function gerarCardIconsAnimal($imagem,$nome, $sexo, $tipoAnimal, $idade ) {
   
    echo '
        <div class="CardIcons">
            <img src="'.$imagem.'" alt="'.$nome.'">
            <div class="info"> 
                <h3>Nome: '.$nome.'</h3>
                <h3>Sexo: '.$sexo.'</h3>
                <h3>Tipo: '.$tipoAnimal.'</h3>
                <h3>Idade: '.$idade.' anos</h3>
            </div>
            
        </div>
    ';
}


function gerarCardIconsUser($imagem, $nome, $cpf, $telefone, $isUser = false) {
    $class = $isUser ? "user" : "";
    echo '
        <div class="CardIconsUser">
            <img src="'.$imagem.'" alt="'.$nome.'" class="'.$class.'">
            <div class="infoUser"> 
                <h3>Nome: '.$nome.'</h3>
                <h3>CPF: '.$cpf.'</h3>
                <h3>Tel: '.$telefone.'</h3>
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
}

.Card:hover {
    transform: scale(1.05);
}

.Card img {
    width: 100%;
    height: 250px;
    object-fit: cover;
    margin-bottom: 5px;
}

.btnListaFormulario {
    width: 82% !important ;
    display: flex ;
    margin: 5px auto ;
    margin-bottom: 5px ;
    margin-top: -4px;
    justify-content: center ;
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
    display: flex;
    justify-content columns: center;
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

.CardIcons-container {
    display: flex; 
    /* flex-wrap: wrap; */
    gap: 2em; 
    margin-bottom: 20px;
    justify-content: center;
    text-decoration: none;
}

.CardIcons-container a {
    text-decoration: none;
}

.CardIcons{
    background-color: white;
    border-radius: 10px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    width: 450px; 
    text-align: center;
    display: flex;
    gap: 20px;
    align-items: center; 
    transition: transform ease-out  0.2s;
}

.CardIconsUser {
    background-color: white;
    border-radius: 10px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    width: 590px; 
    text-align: center;
    display: flex;
    gap: 20px;
    align-items: center; 
    transition: transform ease-out  0.2s;
    
}

.CardIcons:hover, .CardIconsUser:hover {
    transform: scale(1.05);
}




.CardIcons img, .CardIconsUser img {
    width: 200px; 
    height: 200px;  
    object-fit: cover; 
    border-radius: 10px; 
}

.CardIconsUser img {
    background-color: rgb(68, 128, 63);
}


.CardIcons h3, .CardIconsUser h3 {
    font-size: 1.2em; 
    color: black;
    margin-bottom: 10px;
    margin-left: 20px;
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
    color: #4caf50;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 10px;
}

.Card .localizacao img {
    margin-top: 12px;
    width: 18px;
    height: 25px;
}

@media (max-width: 1024px) {

    .CardIcons img, .CardIconsUser img {
        width: 150px; 
        height: 150px;  
        object-fit: cover; 
        border-radius: 10px; 
        padding: auto;
    }

    .CardIcons {
        width: 320px;
        height: 150px;
    }

    .CardIconsUser {
        width: 450px;
        height: 150px;
        align-items: center;
    }

    .CardIcons h3, .CardIconsUser h3 {
        font-size: 13px; 
    }
}

@media (max-width: 768px) {

    .CardIcons-container {
        flex-wrap: wrap;
    }

    .CardIcons  {
        width: 450px;
    }
    .CardIcons h3 {
        margin-left: 65px;
    }
}


@media (max-width: 425px) {
    .CardIcons img, .CardIconsUser img {
        width: 125px;
        height: 125px;
    }
    .CardIcons, .CardIconsUser {
        width: 366px;
        height: 125px;
    }

    .CardIcons h3, .CardIconsUser h3 {
        font-size: 12px; 
    }

    .CardIcons h3 {
        margin-left: 55px;
    }

    .CardIconsUser h3 {
        margin-left: 8px;

    }
}

</style>