async function obterNoticia() {
    
    try{
        const endpoint = 'cat'
        const url = `https://newsapi.org/v2/everything?q=${endpoint}&apiKey=31480fb9ae244876aac77345786bc5ec`;
        const titulo = document.getElementsByTagName('h2') 
        console.log(titulo)
        const response = await fetch(url);
        console.log(response)
        const data = await response.json();
        console.log(data)

        // titulo.innerText = data.articles[0].title

        for (let title of titulo) {
            title.innerText = data.articles[0].title;
        };

    }
    catch (e) {
        console.log("Problem " + e)
    }
}
obterNoticia()