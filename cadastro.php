<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>divulgação</title>
    <link rel="shortcut icon" href="imagens/favicon.png" type="image/png">
    <link rel="stylesheet" href="estilos/style.css"> <!-- link para o css padrão -->
    <link rel="stylesheet" href="estilos/menu.css"> <!--link para o css do menu -->
    <link rel="stylesheet" href="estilos/media.css"> <!-- link para o css responsivo -->
    <link rel="stylesheet" href="estilos/footer.css"> <!-- link para o css do rodapé -->
    <script src="https://kit.fontawesome.com/cd17e1e6db.js" crossorigin="anonymous"></script> <!-- link do font awesome (icones) -->
</head>
<!-- configurações pontuais do css -->
<style>
    img#olho {
        top: 162px;
    }
</style>
<body onresize="mudouTamanho()">

       <!--título principal-->
    <h1>Um Dia</h1>
    <!-- fim do titulo-->
    <!--aqui são os itens do menu-->
    <i class="fa-solid fa-bars" id="icone" onclick="menu()"></i>
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
    <footer class="footer">
        <div class="waves">
            <div class="wave" id="wave1"></div>
            <div class="wave" id="wave2"></div>
            <div class="wave" id="wave3"></div>
            <div class="wave" id="wave4"></div>
        </div>
        <ul class="social-icon">
            <li class="social-icon__item"><a class="social-icon__link" href="#">
                    <ion-icon name="logo-facebook"></ion-icon>
                </a></li>
            <li class="social-icon__item"><a class="social-icon__link" href="#">
                    <ion-icon name="logo-twitter"></ion-icon>
                </a></li>
            <li class="social-icon__item"><a class="social-icon__link" href="#">
                    <ion-icon name="logo-linkedin"></ion-icon>
                </a></li>
            <li class="social-icon__item"><a class="social-icon__link" href="#">
                    <ion-icon name="logo-instagram"></ion-icon>
                </a></li>
        </ul>
        <ul class="menu">
            <h3>Equipe:</h3>
            <li class="menu__item"><a class="menu__link" href="#">Israel mendez</a></li>
            <li class="menu__item"><a class="menu__link" href="#">Luiza alzira</a></li>
            <li class="menu__item"><a class="menu__link" href="#">Maria Beatriz</a></li>
            <li class="menu__item"><a class="menu__link" href="#">Jéssica</a></li>
            <li class="menu__item"><a class="menu__link" href="#">Isabelly Freitas</a></li>
            <li class="menu__item"><a class="menu__link" href="#">Emanuel</a></li>
            <li class="menu__item"><a class="menu__link" href="#">Mauricio oliveira</a></li>
        </ul>
        <p>&copy;2024 Mauricio Oliveira Da Costa | Todos os direitos reservados</p>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="scripts/menu.js"></script>
</body>
</html>