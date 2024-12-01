<?php
include('php/conexao.php');
//verificação se os campos estão preenchidos
if (isset($_POST['email']) || isset($_POST['senha'])) {

    if (strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if (strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);
        $sql_code = "SELECT * FROM usuário WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if ($quantidade == 1) {

            $usuario = $sql_query->fetch_assoc();
            //inicia a seção e verifica se o usuário está registrado
            if (!isset($_SESSION)) {
                session_start();
            }
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];
            //tranfere o usuário para a página de download
            header("Location: download.php");
        } else {
            echo "
            <script>
                    window.alert('usuário ou senha incorretos')
            </script>";
        }
    }
}
?>
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
        top: 120px;
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

    <!-- formulário-->

    <div id="container">
        <form action="" method="post">
            <!-- titulo do formulário-->
            <h2>login</h2>
            <!-- fim do titulo do formulário-->
            <div id="dados">
                <input type="email" name="email" id="email" placeholder="E-MAIL" autocomplete="off" required><label
                    for="email">usuário</label>
                <input type="password" name="senha" id="senha" placeholder="SENHA" required minlength="7"><label
                    for="senha">senha</label>
                <img src="imagens/eye-slash-regular.svg" alt="olho" id="olho" onclick="olharsenha()">
            </div>
            <input type="submit" value="enviar" id="botao">
            <div id="links">
                <a href="cadastro.php" target="_blank">cadastrar-se</a>
                <a href="recuperar.html" target="_blank">esqueci a senha</a>
            </div>
        </form>
    </div>
    </div>
    <!-- fim do formulário-->
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
        <p>&copy;2024 Site desenvolvido por Mauricio Oliveira Da Costa </p>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="scripts/menu.js"></script>
    <script>
        //código para fazer a funcionalidade de ver a senha
        var senha = document.getElementById('senha')
        var imagen = document.getElementById('olho')
        imagen.addEventListener('click', function olharsenha() {
            if (senha.type === 'password') {
                senha.type = 'text'
                imagen.src = 'imagens/eye-solid.svg'
            } else {
                senha.type = 'password'
                imagen.src = 'imagens/eye-slash-regular.svg'
            }

        })
    </script>
</body>

</html>