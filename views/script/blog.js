
    async function obterNoticia() {
        
        try{
            
            // const url = `https://newsapi.org/v2/everything?q=${endpoint}&apiKey=31480fb9ae244876aac77345786bc5ec`;
            const url = `https://newsapi.org/v2/everything?q=(gato OR cachorro) AND (engraçado OR adorável OR filhote)&language=pt&apiKey=31480fb9ae244876aac77345786bc5ec`;
            
            const titulo = document.getElementsByTagName('h2') 
            const imgGrande = document.querySelectorAll('.img-first')
            const imgLado = document.querySelectorAll('.img-ladin')
            const subTitulo = document.getElementsByTagName('p')
            const aHref = document.querySelectorAll('.link-not')
            
            
            console.log(imgGrande)
            for (var i = 0; i < 5; i++){
                console.log("1")
            }
            
            console.log(titulo)
            const response = await fetch(url);
            
            
            const data = await response.json();
            console.log(data)
            const dataEncurt = data.articles.slice(0, 5)
            console.log(dataEncurt)
            
            let noticia = dataEncurt;
            let imagens = [];
            let titulos = [];
            let subTitulos = [];
            let links = [];
            
            // Armazenamento das infos do JSON
            noticia.forEach(not => {
                let urlJSON = not.urlToImage;
                let titleJSON = not.title;
                let subTitleJSON = not.description;
                let linkNotJSON = not.url;
                
                imagens.push(urlJSON);
                titulos.push(titleJSON);
                subTitulos.push(subTitleJSON);
                links.push(linkNotJSON);
            });
            
            // Junta todos os elementos <img> desejados
            const todasImagens = [...imgGrande, ...imgLado]; 
            const todosTitulos = [...titulo]; // Converte `titulo` para array se necessário
            const todosSubTitulos = [...subTitulo]; // Converte `subTitulo` para array se necessário
            const todosAHref = [...aHref];
            
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
        
        todosSubTitulos.forEach((subTitleDiv, index) => {
            if (subTitulos[index]) {
                subTitleDiv.innerText = subTitulos[index];
            }
        });
        todosAHref.forEach((aHrefc, index) => {
            if (links[index]) {
                aHrefc.href = links[index];
            }
        });
        for (sub of subTitulo){
            console.log(sub);
            limitarTexto(sub, 23); // Limite de palavras
        }
        
        mostrar()
    }
    catch (e) {
        console.log("Problem " + e)
    }
}
function limitarTexto(elemento, limite) {
    let palavras = elemento.innerText.split(" ");
    if (palavras.length > limite) {
        elemento.innerText = palavras.slice(0, limite).join(" ") + "...";
    }
}
function mostrar(){
    
    document.querySelectorAll('img').forEach(img => {
        img.style.visibility = "visible";
        console.log(img + " <- IMAGEM ")
    });
    document.querySelectorAll('.titulo').forEach(divTitulo => {
        divTitulo.style.visibility = "visible";
        console.log(divTitulo + " <- DIVTITULO")
    })
}

obterNoticia()
