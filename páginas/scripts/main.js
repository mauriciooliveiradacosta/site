function logar(){
    let senha = document.getElementById('senha').value
    let usuario = document.getElementById('user').value
    if(usuario == 'maumau.olliver@gmail.com' &&  senha == '1234567'){
        location.href = "download.html"
    }else{
        alert('usuário ou senha incorretos')
    }
}
