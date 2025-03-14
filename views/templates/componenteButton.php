<button 
    onclick = "<?php echo $funcaoClick ?>" 
    <?php if (!empty($funcaoLoad)) echo 'onload="'.$funcaoLoad.'"'; ?> 
    id = "btnComp"
    >
<?php echo $titulo ?></button>

<script>
    function redirecionar(linkRedirecionamento){
        window.location.href = linkRedirecionamento;
    }

    function compartilhar(){
        if (navigator.share) {
            navigator.share({ url: window.location.href }).catch((error) => console.log("Erro de Compartilhamento:", error));
        } else {
            alert("Erro de compartilhamento por conta do navegador.");
        }
    }

    function adicionar(msgAdicionar){
        if([...document.querySelectorAll("input")].every(input => input.value.trim() !== "")){
            alert($msgAdicionar)
        }else{
            alert("Preencha todos os campos.")
        }
    }

    function cancelarForm(nomeForm, linkRedirecionamento){
        document.getElementById(nomeForm).reset();
        window.location.href = linkRedirecionamento;
    }

    function verMais(){

    }
    
    function excluir(msg){
        let card = this.parentElement;
        card.remove();
        alert(msg);
    }

    function saibaMais(linkRedirecionamento){
        window.location.href = linkRedirecionamento;
        //muda o css 
    }

    function mudarTamanho(w, h){
        const btn = document.getElementById('btnComp');
        btnComp.style.width = w + 'rem';
        btnComp.style.height = h + 'rem';
    }
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
</style>