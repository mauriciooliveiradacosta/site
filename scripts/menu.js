function menu(){
    var menu =  document.getElementById("menu");
    var icone = document.getElementById('icone')
    if(menu.style.display ==  'block'){
        menu.style.display = 'none';
        icone.className = 'fa-solid fa-bars'
    }else{
        menu.style.display = 'block';
        icone.className = 'fa-regular fa-x'
    }
}