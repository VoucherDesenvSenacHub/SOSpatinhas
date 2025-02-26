<div class="carousel-container">
    <div class="carousel">
        <?php foreach ($cards as $card): ?>
            <div class="carousel-item">
                <?php echo $card; ?>
            </div>
        <?php endforeach; ?>
    </div>
    <button class="prev">‹</button>
    <button class="next">›</button>
</div>

<script>
    const carousel = document.querySelector('.carousel');
    const items = document.querySelectorAll('.carousel-item');
    let index = 0;

    function showSlide(i) {
        if (i < 0) index = items.length - 1;
        else if (i >= items.length) index = 0;
        else index = i;

        carousel.style.transform = `translateX(${-index * 100}%)`;
    }

    document.querySelector('.prev').addEventListener('click', () => showSlide(index - 1));
    document.querySelector('.next').addEventListener('click', () => showSlide(index + 1));
</script>

<style>
    .carousel-container {
        position: relative;
        width: 300px;
        overflow: hidden;
    }
    .carousel {
        display: flex;
        transition: transform 0.5s ease-in-out;
    }
    .carousel-item {
        min-width: 100%;
    }
    .prev, .next {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(0, 0, 0, 0.5);
        color: white;
        border: none;
        cursor: pointer;
        padding: 5px 10px;
    }
    .prev { left: 0; }
    .next { right: 0; }
</style>