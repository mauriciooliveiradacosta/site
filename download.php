<?php
include('php/protect.php');
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
    <!-- <p>clique no link abaixo para baixar o jogo</p>-->
    <div id="download">
        <h2>link para Download</h2>
        <a href="executável" download="executável/imagens.zip">
            <i class="fa-regular fa-circle-down" id="baixar"></i>
        </a>
    </div>
    <!-- fim do formulário-->
    <!-- rodapé do site -->
    <div id="links">
        <p><a href="php/logout.php">sair</a></p>
    </div>
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
</body>

</html>