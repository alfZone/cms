
const seeArticlesListCat1 = async() =>{
  //console.log("aaaa");

  const response = await fetch(window.location.protocol + "//" + window.location.host + "/2do/"+`public/artigos/1/lista`)
  const servicos = await response.json()

  let strHtml = `
        <option value=0>(Escolha um Artigo)</option>
           `
  if (servicos[0].numElements > 0) {
    
    for (const servico of servicos) {
          strHtml += `
                  <option value=${servico.codArtigo}>${servico.Titulo}</option>
                     `
    }
            
  }
  document.getElementById("codArtigo").innerHTML = strHtml


}

