<?php 

function gerarCard($nome, $imagem) {
    echo'
        <div class="Card">
            <h3>'.$nome.'</h3>
            <img src="'.$imagem.'" alt="'.$nome.'">
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
    border-bottom: 1px solid #ddd;
    margin-bottom: 10px;
    border-radius: 10px 10px 0 0;
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

.Card .meta {
    font-size: 1em;  /* Diminua caso esteja muito grande */
    background-color: #83CE7D;
    color: black;
    border-radius: 15px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 5px;
    padding: 8px 10px; /* Ajuste menor */
}



.divImg {
    width: 100%;
    height: 250px; /* Mesmo valor da imagem */
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden; /* Para evitar que a imagem ultrapasse */
}

.divImg img {
    width: 100%;
    height: 100%; /* Garantir que a imagem ocupe todo o espaço da div */
    object-fit: cover; /* Para manter a proporção */
}


#letras {
    font-weight: bold;
    font-size: 1em;
    position: absolute;
    bottom: 10px; /* Ajuste fino */
    color: white;
}
</style>