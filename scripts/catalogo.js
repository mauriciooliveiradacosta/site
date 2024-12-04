const liItem = document.querySelectorAll('ul.categorias li');
const imgItem = document.querySelectorAll('.consumiveis img');
liItem.forEach(li => {  //para todos os elementos li
    li.onclick = function () { //quando for clicado
        //active
        liItem.forEach(li => {
            li.className = ""; //o nome de classe será ""
        })
        li.className = "ativo"; // o icone com a class ativo
        //Filter
        const value = li.textContent; //transforma as letras em maiúsculas
        imgItem.forEach(img => { //vai verificar todas as imagens
            img.style.display = 'none'; //vai fazer todas as imagens serem escondidas
            if (img.getAttribute('data-filter') == value.toLowerCase() || value == "todos") { //se a imagem tiver o atributo data-filter igual ao valor da li ou for igual a "todos"
                img.style.display = 'block';// a imagem será exibida
            }
        })
    }
});