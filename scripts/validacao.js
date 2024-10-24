form.addEventListener('submit', (e) => { 
    e.preventDefault()  //cancela o comportamento padrão da página
})
function validar(){
    const form = document.getElementById('form')
    var nome = document.getElementById('nome')
    var data = document.getElementById('dn')
    var senha = document.getElementById('senha')
    var vsenha = senha.value
    var senha2 = document.getElementById('confirmarsenha')
    var vsenha2 = senha2.value
    var email = document.getElementById('mail')
    var vsenha = senha.value.trim()  
    //a função trim() tira os espaços em brancos dos caracteres          
    if (vsenha != vsenha2 ||  vsenha == '' || vsenha2 == '') {
        alert('confira as senhas')
    }else{
        location.href = '../download.html'
    }
    
}
