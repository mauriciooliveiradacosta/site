const senhainput = document.getElementById('senha')
const senhainput2 = document.getElementById('confirmarsenha')
const imagem = document.getElementById('olho')
        imagem.addEventListener('click', function olharsenha() {
            // Alterna o tipo de input entre 'password' e 'text'
            const tipo = senhainput.type === 'password' ? 'text' : 'password';
            senhainput.type = tipo;
            senhainput2.type = tipo;
            // Alterna a imagem
            if (tipo === 'text') {
                imagem.src = '../imagens/eye-solid.svg'; // Imagem para mostrar a senha
            } else {
                imagem.src = '../imagens/eye-slash-regular.svg'; // Imagem para ocultar a senha 
            }
        });