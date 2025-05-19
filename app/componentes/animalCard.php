<div class="card-animal">
    <div class="front-card">
        <img src="public/images/default/semfoto.png" alt="">
        <div class="titulo">
            <h1 class="nome">
                <?= !empty($animal['nome']) ? htmlspecialchars($animal['nome']) : 'Nome não disponível' ?>
            </h1> 
        </div>
    </div>
    <div class="back-card">
        <header class="header-card">
            <p><?= !empty($animal['tipo_animal']) ? htmlspecialchars($animal['tipo_animal']) : 'Tipo Animal' ?></p>
            <p><?= !empty($animal['sexo']) ? htmlspecialchars($animal['sexo']) : 'Sexo' ?></p>
            <p><?= !empty($animal['idade']) ? htmlspecialchars($animal['idade']) : 'Idade' ?></p>
            <p><?= !empty($animal['porte']) ? 'porte ' . htmlspecialchars($animal['porte']) : 'Porte' ?></p>
            <p><?= !empty($animal['raca']) ? htmlspecialchars($animal['raca']) : 'Raça' ?></p>
        </header>
        <button class="button-card">
            <a href="adocao/detalhesanimal/<?= !empty($animal['raca']) ? htmlspecialchars($animal['raca']) : '' ?>">Adotar!</a>
        </button>
    </div>
</div>