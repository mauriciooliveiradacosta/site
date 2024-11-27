<?php
include('php/protect.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>divulgação</title>
    <link rel="stylesheet" href="estilos/menu.css">
    <link rel="stylesheet" href="estilos/style.css">
    <link rel="shortcut icon" href="imagens/favicon.png" type="image/png">
    <script src="https://kit.fontawesome.com/cd17e1e6db.js" crossorigin="anonymous"></script> <!-- link do font awesome -->
</head>
<style>
    div#container {
        flex-flow: column;
        justify-content: center;
        align-items: center;
        width: 400px;
        min-height: 307px;
        max-height: max-content;
        padding: 20px;
        margin: 0px;
        background: transparent;
        backdrop-filter: blur(4px);
        font-family: var(--fonte2), 'Courier New', Courier, monospace;
        border: 3px solid white;
        border-radius: 20px;

    }
</style>

<body>
    <!--aqui são os itens do menu-->
    <h1>One Day</h1>
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
    <!--título principal-->
    <!-- fim do titulo-->
    <!-- formulário-->
    <!-- <p>clique no link abaixo para baixar o jogo</p>-->
    <div id="container">
        <h2>link para Download</h2>
        <a href="executável" download="executável/imagens.zip">
        <label class="label">
            <input type="checkbox" class="input" />
            <span class="circle">
                    <svg class="icon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M12 19V5m0 14-4-4m4 4 4-4"></path>
                    </svg>
                    <div class="square"></div>
                </span>
              
            </label>
        </a>
    </div>
    <!-- fim do formulário-->
    <!-- rodapé do site -->
    <div id="links">
        <p><a href="php/logout.php">sair</a></p>
    </div>
    <script src="scripts/menu.js"></script>
</body>

</html>