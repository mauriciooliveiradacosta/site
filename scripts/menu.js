function mudouTamanho(){
    var menu = document.getElementById("menu");
    var icone = document.getElementById('icone')
    if(window.innerWidth>= 753){
        menu.style.scale = '1' 
        icone.className = 'fa-regular fa-x'
    }else{
        menu.style.scale = '0'
        icone.className = 'fa-solid fa-bars'
    }
}
function menu() {
    var menu = document.getElementById("menu");
    var icone = document.getElementById('icone')
    if (menu.style.scale == '1') {
        menu.style.scale = '0';
        icone.className = 'fa-solid fa-bars'
    } else {
        menu.style.scale = '1';
        icone.className = 'fa-regular fa-x'
    }
}
