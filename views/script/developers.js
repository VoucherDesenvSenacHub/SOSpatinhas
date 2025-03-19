const devCard = (dev) => {
    return `
        <section class="main">
        <div class="img-box">
            <img src="${dev.foto}" alt="" class="foto">
        </div>
        <div class="title">
            <h5 class="devH5">
                ${dev.nome}
            </h5>
        </div>
        <div class="links">
            <a href="${dev.linkedin}" class="a-links">
                <img src="" alt="Linkedin" class="img-links">
            </a>
            <a href="${dev.github}" class="a-links">
                <img src="" alt="GitHub" class="img-links">
            </a>
            <a href="${dev.insta}" class="a-links">
                <img src="" alt="Insta" class="img-links">
            </a>
        </div>
    </section>   
    `;
};
export default editCard;  // 🔹 Certifique-se de que está exportando como default