async function obterNoticia() {
    
    try{

        // const url = `https://newsapi.org/v2/everything?q=${endpoint}&apiKey=31480fb9ae244876aac77345786bc5ec`;
        const url = `https://newsapi.org/v2/everything?q=(gato OR cachorro) AND (engraçado OR adorável OR filhote)&language=pt&apiKey=31480fb9ae244876aac77345786bc5ec`;

        const titulo = document.getElementsByTagName('h2') 
        const imgGrande = document.querySelectorAll('.img-first')
        const imgLado = document.querySelectorAll('.img-ladin')
        console.log(imgGrande)
        for (var i = 0; i < 5; i++){
            console.log("1")
        }

        
        // for (let img of imgGrande){
        //     img.src = `http://localhost/codez/sospatinhas/views/images/${urlImg}`
        // }
        
        console.log(titulo)
        const response = await fetch(url);
        // console.log(response)

        const data = await response.json();
        console.log(data)
        const dataEncurt = data.articles.slice(0, 5)
        console.log(dataEncurt)
        // for (let urlImgNot of data.articles[0].src){
        //     console.log(urlImgNot)
        // }
        let noticia = dataEncurt;
        let imagens = [];
        let titulos = [];

        // Armazena URLs das imagens e títulos
        noticia.forEach(not => {
            let urlJSON = not.urlToImage;
            let titleJSON = not.title;

            imagens.push(urlJSON);
            titulos.push(titleJSON);
        });

        // Junta todos os elementos <img> desejados
        const todasImagens = [...imgGrande, ...imgLado]; 
        const todosTitulos = [...titulo]; // Converte `titulo` para array se necessário

        // Atualiza imagens
        todasImagens.forEach((imgDiv, index) => {
            if (imagens[index]) {
                imgDiv.src = imagens[index];
            }
        });

        // Atualiza títulos
        todosTitulos.forEach((titleDiv, index) => {
            if (titulos[index]) {
                titleDiv.innerText = titulos[index];
            }
        });


    }
    catch (e) {
        console.log("Problem " + e)
    }
}
obterNoticia()