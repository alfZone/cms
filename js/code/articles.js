 var c = c || new config();

const numCategorie = async() =>{
  //console.log("aaaa");

  const response = await fetch(`${c.url}public/numCategorie`)
  const servicos = await response.json()

  let strHtml = `
                `
  if (servicos[0].numElements > 0) {
    
    for (const servico of servicos) {
          strHtml += `
                  ${servico.numCategorie}
                     `
    }
            
  }
  document.getElementById("numCategorie").innerHTML = strHtml
}

const numArticles = async() =>{
  //console.log("aaaa");

  const response = await fetch(`${c.url}public/numArticles`)
  const servicos = await response.json()

  let strHtml = `
                `
  if (servicos[0].numElements > 0) {
    
    for (const servico of servicos) {
          strHtml += `
                  ${servico.numArticles}
                     `
    }
            
  }
  document.getElementById("numArticles").innerHTML = strHtml
}

