<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
    <link rel="shortcut icon" href="imagens/favicon.png" type="image/png">
    <link rel="stylesheet" href="estilos/menu.css">
    <link rel="stylesheet" href="estilos/style.css">
    <link rel="stylesheet" href="estilos/media.css">
    <script src="https://kit.fontawesome.com/cd17e1e6db.js" crossorigin="anonymous"></script> <!-- link do font awesome -->
</head>
<style>
    img#olho {
        top: 157px;
    }
</style>

<body>
    <h1>one day</h1>
    <i class="fa-solid fa-bars" id="icone" onclick="menu()"></i>
    <!--aqui são os itens do menu-->
    <nav id="menu">
        <ol>
            <li>
                <a href="index.php">inicio</a>
            </li>
            <li>
                <a href="catalogo.html">catálogo</a>
            </li>
            <!-- itens escondidos (dropdown)-->
            <li class="caixa"><a href="#">docs</a>
                <div class="itens">
                    <a href="#">doc 1</a>
                    <a href="#">doc 2</a>
                </div>
            </li>
        </ol>
    </nav>
    <!-- fim do menu-->
    <div id="container">
        <form action="php/cria_usuario.php" method="POST" id="form">
            <h2>cadastro</h2>
            <div id="dados">
                <input type="text" name="nome" id="nome" placeholder="Digite seu nome" autocomplete="none" minlength="6"><label
                    for="nome"> :Digite seu nome</label>
                <input type="email" name="email" id="mail" placeholder="Digite seu e-mail" required><label for="mail">
                    :Digite seu e-mail</label>
                <input type="password" name="senha" id="senha" placeholder="digite sua senha" required minlength="7" autocomplete="off">
                <img src="imagens/eye-slash-regular.svg" alt="olho" id="olho" onclick="olharsenha()">
                <label for="senha">digite
                    sua senha</label>
                <input type="password" name="confirma_senha" id="confirmarsenha" placeholder="repita sua senha" required minlength="7"><label for="confirmarsenha">digite
                    sua senha</label>
                <input type="date" name="dn" id="dn" required><label for="dn">:data de nascimento</label>
            </div>
            <!-- inputs das opções de sexo-->
            <div id="sexo">
                <p><input type="radio" name="sexo" id="masc" required><label for="masc">Masculino</label></p>
                <p><input type="radio" name="sexo" id="fem"><label for="fem">Feminino</label></p>
                <p><input type="radio" name="sexo" id="outro"><label for="outro">outro</label></p>
            </div>
            <input type="submit" value="enviar" name="enviar" id="botao" onclick="validar()">
        </form>
    </div>
    <script>
        var senha = document.getElementById('senha')
        var senha2 = document.getElementById('confirmarsenha')
        var imagen = document.getElementById('olho')
        imagen.addEventListener('click', function olharsenha() {
            if (senha.type === 'password') {
                senha.type = 'text'
                senha2.type = 'text'
                imagen.src = 'imagens/eye-solid.svg'
            } else {
                senha.type = 'password'
                senha2.type = 'password'
                imagen.src = 'imagens/eye-slash-regular.svg'
            }

        })

        function validar() {
            var senha = document.getElementById('senha').value.trim()
            var senha2 = document.getElementById('confirmarsenha').value.trim()
            if (senha != senha2) {
                window.alert('confira as senhas')
            }
        }
    </script>
    <script src="scripts/menu.js"></script>
</body>

</html>