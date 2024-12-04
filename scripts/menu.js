function mudouTamanho(){ //função que será chamada sempre que a janela for redimensionada
    var menu = document.getElementById("menu"); //pega o elemento com id "menu"
    var icone = document.getElementById('icone') //pega o elemento com id "icone
    if(window.innerWidth>= 753){ //se a largura da janela for maior ou igual a 753px
        menu.style.scale = '1'  //aplica a propriedade scale com valor 1
        icone.className = 'fa-regular fa-x' // vai aparecer o icone de X
    }else{
        menu.style.scale = '0' // aplica a propriedade scale com o valor 0 (o menu não será exibido na tela)
        icone.className = 'fa-solid fa-bars' // vai aparecer o icone de barras
    }
}
function menu() {
    var menu = document.getElementById("menu");
    var icone = document.getElementById('icone')
    if (menu.style.scale == '1') { //se a propriedade scale do menu for igual a 1
        menu.style.scale = '0'; //ele não irá aparecer 
        icone.className = 'fa-solid fa-bars' // e o icone será o de barras
    } else { //se não
        menu.style.scale = '1'; //ele irá aparecer
        icone.className = 'fa-regular fa-x' // e o icone será o de X
    }
}
