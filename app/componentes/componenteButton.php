<!-- Exemplo de como implementar -->

<!--<?php
// $funcaoClick = "compartilhar()";                             ---> variavel que chama uma função quando clicar no botão -- é obrigatória
// $funcaoLoad = "mudarTamanho('100rem', '10rem', '100px')";    ---> função para mudar o tamanho do botão, o primeiro valor é a largura, -- é opcional
//                                                                   o segundo a altura e o terceiro o tamanho da fonte 
// $titulo = "teste";                                           ---> variavel que armazena o que vai estar escrito no botão -- é obrigatória
// include('../templates/componenteButton.php');
?>  -->


<button 
    onclick = "<?php echo $funcaoClick ?>" 
    class = "btnComp"
    id="<?php echo !empty($idBtn) ? $idBtn : 'idDefault'; ?>"
    >
<?php echo $titulo ?></button>

<script>

    // função simples pra mandar pra outra pág, só precisa passar o nome da pág
    function redirecionar(linkRedirecionamento){
        window.location.href = linkRedirecionamento;
    }

    // função pra compartilhamento
    function compartilhar(){
        if (navigator.share) {
            navigator.share({ url: window.location.href }).catch((error) => console.log("Erro de Compartilhamento:", error));
        } else {
            alert("Erro de compartilhamento por conta do navegador.");
        }
    }

    // função para fazer submit dos forms com uma msg personalizada Ex: msg = "talCoisa foi adicionada com sucesso", mais pra frente colocar 
    // uma variavel para saber o nome do form q tem q fazer o submit
    function adicionarComValidacao(msgAdicionar, acao, linkRedirecionamento){ // colocar nomeForm depois  
        if([...document.querySelectorAll("input")].every(input => input.value.trim() !== "")){
            alert(msgAdicionar)
        }else{
            alert("Preencha todos os campos.")
        }

        if(acao == 1){
            window.location.href = linkRedirecionamento;
        }
        //document.getElementById(nomeForm).submit();
    }

    // função q faz o submit do form, precisa passar o nome do form
    function submitSimples(nomeForm){
        document.getElementById(nomeForm).submit();
    }

    function submitComValidacao(nomeForm){
        if([...document.querySelectorAll("input")].every(input => input.value.trim() !== "")){
            document.getElementById(nomeForm).submit();
        }else{
            alert("Preencha todos os campos.")
        }
    }

    function sair(){
        window.location.href = "../script/logout.php";
    }

    // é tipo a adicionarComValidacao() e cancelarForm() só q especifico pra modal
    function btnModal(acao){
        if(acao == 'S'){
            if(![...document.querySelectorAll("input")].every(input => input.value.trim() !== "")){
                alert("Preencha todos os campos.") 
            }else{
                const input = document.querySelectorAll('input');
                inputs.forEach(input => {input.value = '';});
                document.getElementById('overlay').style.display = 'none';
                document.getElementById('popup').style.display = 'none';
            }
        }else if(acao == 'C'){
            const input = document.querySelectorAll('input');
            inputs.forEach(input => {input.value = '';});
            document.getElementById('overlay').style.display = 'none';
            document.getElementById('popup').style.display = 'none';
        }

    }

    // essa função é uma gambiarra, será apagada futuramente
    function reload() {
        alert("Enviado com sucesso");
        location.reload();
    }


    // função pra limpar o form e mandar pra outra pág
    function cancelarForm(nomeForm, linkRedirecionamento){
        document.getElementById(nomeForm).reset();
        window.location.href = linkRedirecionamento;
    }
    
    // função pra excluir os cards das págs de listas
    function excluir(btn, msg, nomeCard){
        let card = btn.closest(`${nomeCard}`);
        if (card) {
            card.remove();
            confirm(msg);
        } else {
            console.error("Falha ao procurar card.");
        }
    }

    // mesma coisa que o redirecionar(), única diferença é q muda a cor do botão
    function saibaMais(linkRedirecionamento){
        window.location.href = linkRedirecionamento;
    }

    // função para mudar o width, height e font-size do botão, única função q coloca no $funcaoLoad invês de no funcaoClick
    document.addEventListener("DOMContentLoaded", function() {
        function mudarTamanho(idbtn, width='275px', height='50px', fontSize='20px') {
            if(idbtn){
                console.log("idbtn = ",idbtn)
                btnId = document.getElementById(idbtn);
                console.log("btnId = ",btnId)
                btnId.style.width = width || '275px';
                btnId.style.height = height || '50px';
                btnId.style.fontSize = fontSize || '20px';
            }else{
                btnId = document.getElementById('idDefault');
                btnId.style.width = '275px';
                btnId.style.height = '50px';
                btnId.style.fontSize = '20px';
            }
        }
        <?php 
        if (!empty($funcaoLoad)) {
            echo $funcaoLoad . ';';
        } else {
            echo "mudarTamanho();"; 
        }
        ?>
        
        document.querySelectorAll(".btnComp").forEach(btn => {
            let funcaoClick = btn.getAttribute("onclick");
            if (funcaoClick && funcaoClick.startsWith("saibaMais")) {
                btn.classList.remove("btnComp");
                btn.classList.add("btnSaibaMais");
            }
        });

    });
</script>

<style>
    .btnComp{
        border-radius: 12px;
        background-color: #44803F;
        cursor: pointer;
        color: #ffffff;
        font-weight: 600;
        margin: 0.5rem;
    }

    .btnSaibaMais{
        border-radius: 12px;
        cursor: pointer;
        font-size: 24px;
        color: rgb(131, 206, 125);
        font-weight: bold;
        margin: 0.5rem;
        height: 40px;
        width: 150px;
    }

    .btnComp:hover {
        background-color:rgb(49, 90, 45);
    }
</style>