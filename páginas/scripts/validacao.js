const form = document.getElementById('form').value.trim()
var email = document.getElementById('mail').value.trim()
var email2 =  document.getElementById('confirmarmail').value.trim()
var senha = document.getElementById('senha').value.trim()
var senha2 = document.getElementById('confirmarsenha').value.trim()
var data = document.getElementById('dn').value.trim()
var erro = document.querySelector('small')
//a função trim() tira os espaços em brancos dos caracteres
form.addEventListener('submit', (e) => { 
    e.preventDefault()  //cancela o comportamento padrão da página
    validar()
})
function validar(){
    if (email != email2){
        small
    }
}