<?php
include('php/conexao.php');

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

            if (!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

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
    <link rel="stylesheet" href="estilos/style.css">
    <link rel="stylesheet" href="estilos/menu.css">
    <link rel="stylesheet" href="estilos/media.css">
    <script src="https://kit.fontawesome.com/cd17e1e6db.js" crossorigin="anonymous"></script> <!-- link do font awesome -->
</head>
<style>
    img#olho {
        top: 116px;
    }
</style>

<body>
    <!--título principal-->
    <h1>One Day</h1>
    <!-- fim do titulo-->
    <i class="fa-solid fa-bars" id="icone" onclick="menu()"></i>
    <!--aqui são os itens do menu-->
    <nav id="menu">
        <ol>
            <li>
                <a href="index.php">inicio</a>
            </li>
            <li>
                <a href="catalogo.php">catálogo</a>
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

    <!--div pai do formulário-->
    <div id="container">
        <!-- formulário-->
        <form action="" method="post">
            <!-- titulo do formulário-->
            <h2>login</h2>
            <!-- fim do titulo do formulário-->
            <div id="dados">
                <input type="email" name="email" id="email" placeholder="E-MAIL" autocomplete="off" required><label for="user">usuário</label>
                <input type="password" name="senha" id="senha" placeholder="SENHA" required minlength="7"><label for="senha">senha</label>
                <img src="imagens/eye-slash-regular.svg" alt="olho" id="olho" onclick="olharsenha()">
            </div>
            <input type="submit" value="enviar" id="botao">
            <div id="links">
                <a href="cadastro.php" target="_blank">cadastrar-se</a>
                <a href="recuperar.html" target="_blank">esqueci a senha</a>
            </div>
        </form>
        <!-- fim do formulário-->

        <!--fim da div pai-->
    </div>


    <!-- rodapé do site -->
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