var senha = document.getElementById('senha')
var senha2 = document.getElementById('confirmarsenha')
var imagen = document.getElementById('olho')
imagen.addEventListener('click', function olharsenha(){
 if(senha.type === 'password'){
     senha.type = 'text'
     senha2.type = 'text'
     imagen.src = '../imagens/eye-solid.svg'
     }else{
         senha.type = 'password'
         senha2.type = 'password'
         imagen.src = '../imagens/eye-slash-regular.svg'
         }
 
})