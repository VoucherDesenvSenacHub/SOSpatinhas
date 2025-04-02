<div class="card-animal">
    <div class="front-card">

        <img src="../images/destaque-gata-tricolor.webp" alt="">
        <div class="titulo">
            <h1 class="nome"><?= $animal['nome']?></h1class> 
        </div>
    </div>
    <div class="back-card">
        <header class="header-card">
            <p><?= $animal['tipo']?></p>
            <p><?= $animal['sexo']?></p>
            <p><?= $animal['idade']?> anos</p>
            <p>Porte <?= $animal['porte']?></p>
<<<<<<< HEAD:views/templates/animalCard.php
            <p><!--<?= $animal['raca']?>--></p>
=======
>>>>>>> 4778b96d94f9a942ef719b277eadc1b4aadcea39:public/componentes/animalCard.php
        </header>
        <button class="button-card">
            <a href="informacaoAnimal.php?id=1"><!--<?= $animal['id_animal'] ?>-->Adotar!</a>
        </button>
    </div>
</div>