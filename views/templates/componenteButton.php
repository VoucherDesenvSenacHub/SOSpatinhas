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
    id = "btnComp"
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
    function adicionarComMsg(msgAdicionar){ // colocar nomeForm depois  
        if([...document.querySelectorAll("input")].every(input => input.value.trim() !== "")){
            alert($msgAdicionar)
        }else{
            alert("Preencha todos os campos.")
        }
        //document.getElementById(nomeForm).submit();
    }

    // função q faz o submit do form, precisa passar o nome do form
    function adicionarSimples(nomeForm){
        document.getElementById(nomeForm).submit();
    }

    // é tipo a adicionarComMsg() e cancelarForm() só q especifico pra modal
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
    function mudarTamanho(width, height, fontSize) {
        const btn = document.getElementById('btnComp');
        if (btn && btn.id == 'btnComp') {
            btn.style.width = width || '275px';  
            btn.style.height = height || '50px'; 
            btn.style.fontSize = fontSize || '20px';
        }else{
            btn.style.width = width || '150px';  
            btn.style.height = height || '40px'; 
            btn.style.fontSize = fontSize || '18px';
        }
    }
    document.addEventListener("DOMContentLoaded", function() {
        <?php 
        if (!empty($funcaoLoad)) {
            echo $funcaoLoad . ';';
        } else {
            echo "mudarTamanho();"; 
        }
        ?>
        
        const btn = document.getElementById('btnComp');
        let funcaoClick = btn.getAttribute("onclick");
        if (funcaoClick && funcaoClick.startsWith("saibaMais")) {
            btn.id = 'btnSaibaMais'
        }

    });
</script>

<style>
    #btnComp {
        border-radius: 12px;
        background-color: #44803F;
        cursor: pointer;
        font-size: 24px;
        color: #ffffff;
        font-weight: 600;
    }

    #btnSaibaMais{
        border-radius: 12px;
        cursor: pointer;
        font-size: 24px;
        color: rgb(131, 206, 125);
        font-weight: bold;
    }
</style>