<div class="parceirosCard">
    <img src="/sospatinhas/public/images/icons/iconEditar.png" alt="" class="btn-card-parceiro">
    <img src="/sospatinhas/public/images/Cão.png" alt="Imagem dos nossos parceiros">
</div>

<style>
.parceirosCard{
    display: flex;
    position: relative;
    flex-wrap: wrap;
    justify-content: center;
    overflow: hidden;
    max-width: 100%;
    border-radius: 15px; 
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    margin: 15px; 
    margin-bottom: 80px;
}

.parceirosCard img{
    width: 90%;
    height: auto;
    object-fit: cover;
    
}

.parceirosCard .btn-card-parceiro {
    position: absolute;
    top: 1px;  
    right: 1px; 
    width:50px; 
    cursor: pointer; 
}
</style>