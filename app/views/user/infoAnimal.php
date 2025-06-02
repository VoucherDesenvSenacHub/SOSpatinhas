<?php
  $cssLink  = 'public/css/infoAnimal.css';
  include('app/componentes/default/topHTML.php');
?>

<div class="container">
  <a class="BackLink" href="#">
    <img src="public/images/icons/btn_esquerdo.png" 
       alt="voltar" class="Voltar">
  </a>
  <div class="Profile">
    
    <div class="ProfileImages">
      <img src="public/images/rocheleInfoAnimal.jpg" 
            alt="rochele 1 " class="MainImage">

      <div class="gallery">
        <img src="public/images/rocheleInfoAnimal.jpg" 
              alt="rochele 2" class="GalleryImg">
        <img src="public/images/rochele5.png" 
              alt="rochele 3 " class="GalleryImg">
        <img src="public/images/rochele6.png" 
              alt="rochele 4" class="GalleryImg">
      </div>

    </div>
    <div class="ProfileDetails">
      <?= !empty($animal[0]['NOME']) ? htmlspecialchars($animal[0]['NOME']) : 'Nome não disponível' ?>
      <p class="SubmittedBy">
        <i class="FasFaUser"></i> enviado por Mitski
        <img src="public/images/icons/iconUser.png" 
        alt="" class="User">
      </p>
      <h2>Descrição</h2>
      <p class = "descricao"><?= !empty($animal[0]['DESCRICAO']) ? htmlspecialchars($animal[0]['DESCRICAO']) : 'Descrição' ?></p>
      <button class="button-card">
        <a href="<?= $animal[0]['ID_ANIMAL'] ?>/formularioadocao">Adotar!</a>
      </button>
    </div>
  </div>
</div>

<script>  
  document.addEventListener("DOMContentLoaded", () => {
    const backLink = document.querySelector(".BackLink");
    if (backLink) {
      backLink.addEventListener("click", (event) => {
        event.preventDefault();
        window.location.href = "adocao.php";
      });
    }

    const adoptBtn = document.querySelector(".AdoptBtn");
    if (adoptBtn) {
      adoptBtn.addEventListener("click", () => {
        window.location.href = "frmAdocao.php";
      });
    }

    
    const galleryImages = document.querySelectorAll(".GalleryImg");

    const mainProductImage = document.querySelector(".MainImage");

     
    if (!mainProductImage) return;


    galleryImages.forEach((img) => {
      img.addEventListener("click", () => {
        mainProductImage.src = img.src;
      });
    });
  });

</script>

<?php
  include('app/componentes/default/bottomHTML.php');
?>

<style>
  
.container {
  max-width: 1024px;
  margin: 0 auto;
  padding: 16px;
}


.BackLink {
  display: inline-block;
  font-size: 1.125rem;
  margin-bottom: 16px;
  color: #000;
  text-decoration: none;
  margin-right:95% ;
}


img.Voltar{
  width: 60%;
  height: 60%;
}

.Profile {
  flex-direction: row;
  gap: 32px;
  display: flex;
}

.ProfileImages {
  flex: 1;
  width: 33.33%;
}

.MainImage {
  width: 100%;
  max-width: 300px;
  margin-bottom: 16px;
  object-fit: fill;
  height: 320px;
  overflow: hidden;
  border-radius: 5px;
}

.gallery {
  display: flex;
    gap: 10px;
    object-fit: fill;
    margin-left: 20%;
    height: 12%;
    width: 76%;
    border-radius: 5px;
}

.GalleryImg {
  width: calc(25.33% - 2.33px);
  object-fit: fill;

}

.ProfileDetails {
  flex: 2;
  width: 66.66%;
  padding-left: 32px;
}

.ProfileDetails h1 {
  font-size: 2.25rem;
  font-weight: bold;
  margin-bottom: 5px;
  display: flex;
}

.SubmittedBy {
  color: #44803F; 
  font-size: 1rem;
  margin-bottom: 20px;
  display: flex;
}

img.Icon{
  width: 28px;
  height: 28px;
  margin: -2px 0px 0px 10px;
}

img.User{
    width: 25px;
    height: 25px;
    position: relative;
    left: 1%;
}

.ProfileDetails h2 {
  font-size: 1.5rem;
  font-weight: bold;
  margin-top: 50px;
  margin-bottom: 30px;
  display: flex;
}

.descricao{
  margin-bottom: 36px;
  text-align: justify;
}


.tags {
  flex-wrap:  wrap;
  gap: 5px;
  margin-bottom: 30px;
  padding: 20px ;
  display: inline-flex;
  padding: initial;
}

.tags span {
  background: #90cc89; 
  color: #fff;
  padding: 4px 5px;
  border-radius: 99px;
  font-size: 0.975rem;
  padding: 15px;
  

}


.AdoptBtn {
  background: #44803F;
  color: #fff;
  font-size: 1.125rem;
  font-weight: bold;
  padding: 8px 36px;
  border: none;
  border-radius: 99px;
  cursor: pointer;
  transition: background 0.3s;
}

.AdoptBtn:hover {
  background: #059669;
}
  
@media (max-width: 768px) {
  .Profile {
    flex-direction: column; 
    gap: 32px;
  }
  .ProfileImages {
    width: 100%; 
  }
  .ProfileDetails {
    width: 100%;
    padding: 0;
    margin-top: 16px; 
  }

  img.Voltar {
    width: 120%;
    height: 120%;
  }
  .gallery {
    display: flex;
    gap: 10px;
    object-fit: fill;
    width: 77%;
    position: relative;
    left: 0%;
    }
    .MainImage {
      width: 100%;
      max-width: 80%;
      object-fit: fill;
      height: auto;
      overflow: hidden;
      border-radius: 5px;
      }
  }
  
@media (max-width: 425px) {
  .container {
    padding: 8px;
  }

  .Profile {
    flex-direction: column;
    gap: 16px;
  }
 
  .ProfileImages,
  .ProfileDetails {
    width: 100%;
    padding: 0;
  }
 
  .MainImage {
    max-width: 100%;
    height: auto;
    overflow: hidden;
    object-fit: fill;
  }
 
  .gallery {
    left: 38px;
    width: 37%;
    height: auto;
    gap: 5px;
    position: relative;
  }
 
  .GalleryImg {
    width: calc(50% - 5px);
    height: auto;
  }


  .ProfileDetails h1 {
    font-size: 1.75rem;
  }

  .ProfileDetails h2 {
    font-size: 1.25rem;
  }

  .SubmittedBy {
    font-size: 0.875rem;
  }

  
  .AdoptBtn {
    font-size: 1rem;
    padding: 6px 12px;
  }

  .BackLink {
    margin-right: 0;
    font-size: 1rem;
  }


  img.Voltar {
    width: 15%;
    height: auto;
    position: relative;
    left: -173px;
  }


  img.User {
    left: 10px;
    position: relative;
  }
}

</style>