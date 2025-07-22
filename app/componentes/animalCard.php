<div class="card-animal">
    <div class="front-card">
        <img src="/sospatinhas/public/images/default/semfoto.png" alt="">
        <div class="titulo">
            <h1 class="nome">
                <?= !empty($animal['NOME']) ? htmlspecialchars($animal['NOME']) : 'Nome não disponível' ?>
            </h1> 
        </div>
    </div>
    <div class="back-card">
        <header class="header-card">
            <p><?= !empty($animal['TIPO_ANIMAL']) ? htmlspecialchars($animal['TIPO_ANIMAL']) : 'Tipo Animal' ?></p>
            <p><?= !empty($animal['SEXO']) ? htmlspecialchars($animal['SEXO']) : 'Sexo' ?></p>
            <p><?= !empty($animal['IDADE']) ? htmlspecialchars($animal['IDADE']) : 'Idade' ?></p>
            <p><?= !empty($animal['PORTE']) ? 'Porte ' . htmlspecialchars($animal['PORTE']) : 'Porte' ?></p>
            <p><?= !empty($animal['RACA']) ? htmlspecialchars($animal['RACA']) : 'Raça' ?></p>
        </header>
        <button class="button-card">
            <a href="adocao/detalhesanimal/<?= !empty($animal['ID_ANIMAL']) ? htmlspecialchars($animal['ID_ANIMAL']) : '' ?>">Adotar!</a>
        </button>
    </div>
</div>