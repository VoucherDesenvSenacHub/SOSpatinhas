<div class="carousel-container" id="carousel-<?php echo $carouselId; ?>">
    <div class="carousel-track">
        <?php 
        $totalCards = count($cardComponents);
        for ($i = $totalCards - 3; $i < $totalCards; $i++) {
            echo "<div class='carousel-item'>" . $cardComponents[$i] . "</div>";
        }

        foreach ($cardComponents as $card) {
            echo "<div class='carousel-item'>$card</div>";
        }

        for ($i = 0; $i < 3; $i++) {
            echo "<div class='carousel-item'>" . $cardComponents[$i] . "</div>";
        }
        ?>
    </div>
    <button class="prev"><p class="seta">‹</p></button>
    <button class="next"><p class="seta">›</p></button>
</div>

<script>
    (function() {
        const carouselContainer = document.querySelector("#carousel-<?php echo $carouselId; ?>");
        const carouselTrack = carouselContainer.querySelector('.carousel-track');
        const items = carouselContainer.querySelectorAll('.carousel-item');
        const totalItems = items.length;
        let visibleCards = getVisibleCards();
        let index = visibleCards; 
        let itemWidth;

        function getVisibleCards() {
            if (window.innerWidth >= 1024) return 3;
            if (window.innerWidth >= 768) return 2; 
            return 1; 
        }

        function updateCarousel() {
            visibleCards = getVisibleCards();
            itemWidth = carouselContainer.offsetWidth / visibleCards;
            items.forEach(item => item.style.flex = `0 0 ${itemWidth}px`);
            index = visibleCards; 
            carouselTrack.style.transform = `translateX(${-index * itemWidth}px)`;
        }

        function moveSlide(step) {
            index += step;
            carouselTrack.style.transition = 'transform 0.5s ease-in-out';
            carouselTrack.style.transform = `translateX(${-index * itemWidth}px)`;

            setTimeout(() => {
                if (index >= totalItems - visibleCards) {
                    index = visibleCards;
                    carouselTrack.style.transition = 'none';
                    carouselTrack.style.transform = `translateX(${-index * itemWidth}px)`;
                } else if (index <= 0) {
                    index = totalItems - (2 * visibleCards);
                    carouselTrack.style.transition = 'none';
                    carouselTrack.style.transform = `translateX(${-index * itemWidth}px)`;
                }
            }, 500);
        }

        updateCarousel();

        carouselContainer.querySelector('.prev').addEventListener('click', () => moveSlide(-1));
        carouselContainer.querySelector('.next').addEventListener('click', () => moveSlide(1));
        window.addEventListener('resize', updateCarousel);
    })();
</script>

<style>
    .carousel-container {
        position: relative;
        width: 100%;
        max-width: 100%; 
        overflow: hidden;
        margin: 20px auto;
    }
    .carousel-track {
        display: flex;
        transition: transform 0.5s ease-in-out;
    }
    .carousel-item {
        flex: 0 0 auto;
        transition: transform 0.3s ease; 
    }
    .prev, .next {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(0, 0, 0, 0.5);
        border-radius: 50%;
        color: white;
        border: none;
        cursor: pointer;
        font-size: 3.5rem;
        width: 50px;
        height: 50px; 
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 2;
    }

    .seta{
        margin: 0 0.2rem 0.5rem 0;
    }

    .prev {
        left: 10px; 
    }

    .next {
        right: 10px; 
    }

    @media (max-width: 1024px) {
        .carousel-container { max-width: 900px; } 
    }
    @media (max-width: 768px) {
        .carousel-container { max-width: 700px; } 
    }
    @media (max-width: 480px) {
        .carousel-container { max-width: 400px; } 
    }
</style>